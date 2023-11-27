<?php

namespace App\Controllers\Admin;

use App\Models\UsuarioModel;
use App\Models\DocentesCarrerasModel;
use App\Models\CarrerasAsignaturasModel;
use App\Models\AsignaturaModel;

class ProgramacionController extends BaseController
{

    // CarreraDocenteController.php

    public function agregar_horario($carrera_id)
    {
        // Obtener docentes y asignaturas relacionados con la carrera
        $docenteModel = new DocenteModel();
        $asignaturaModel = new AsignaturaModel();

        $data['docentes'] = $docenteModel->getCarreras($carrera_id);
        $data['asignaturas'] = $asignaturaModel->getCarreras($carrera_id);
        $data['carrera_id'] = $carrera_id;

        return view('carrera_docente/agregar_horario', $data);
    }


}