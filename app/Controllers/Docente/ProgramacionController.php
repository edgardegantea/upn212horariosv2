<?php

namespace App\Controllers\Docente;

use App\Controllers\BaseController;
use App\Models\ProgramacionModel;
use App\Models\UsuarioModel;

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

}