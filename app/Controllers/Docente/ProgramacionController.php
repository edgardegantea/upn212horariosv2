<?php

namespace App\Controllers\Docente;

use App\Controllers\BaseController;
use App\Models\ProgramacionModel;
use App\Models\UsuarioModel;
use TCPDF;

class ProgramacionController extends BaseController
{


    public function index()
    {
        $this->session = \Config\Services::session();
        $docente_id = $this->session->id;

        $docenteModel = new UsuarioModel();
        $docente = $docenteModel->find($docente_id);

        $programacionModel = new ProgramacionModel();
        $asignaciones = $programacionModel->getAsignacionesPorDocente($docente_id);

        $data = [
            'docente' => $docente,
            'asignaciones' => $asignaciones,
        ];

        return view('docente/programacion/index', $data);
    }





    public function generarConstancia($docente_id)
    {
        $programacionModel = new ProgramacionModel();
        $asignaciones = $programacionModel->getAsignacionesPorDocente($docente_id);

        $pdf = new TCPDF();

        $pdf->SetFont('', 'B', 14);
        $pdf->AddPage();

        $pdf->Cell(0, 10, 'Constancia de Asignaciones de Horarios', 0, 1, 'C');

        $constanciaTexto = 'Por la presente se certifica que el docente ha sido asignado a las siguientes actividades académicas.';
        $pdf->SetFont('', '', 12);
        $pdf->MultiCell(0, 10, $constanciaTexto);

        $constanciaTexto = 'Por la presente se certifica que el docente ha sido asignado a las siguientes actividades académicas.';
        $pdf->SetFont('', '', 12);
        $pdf->MultiCell(0, 10, $constanciaTexto);


        foreach ($asignaciones as $asignacion) {
            $pdf->SetFont('', '', 12);
            $pdf->Cell(0, 10, "Carrera: {$asignacion['carrera']}", 0, 1);
            $pdf->Cell(0, 10, "Asignatura: {$asignacion['asignatura']}", 0, 1);
            $pdf->Ln();
        }


        $constanciaTexto = 'Por la presente se certifica que el docente ha sido asignado a las siguientes actividades académicas.';
        $pdf->SetFont('', '', 12);
        $pdf->MultiCell(0, 10, $constanciaTexto);


        $pdf->Output('constancia.pdf', 'I');
        exit();
    }

}