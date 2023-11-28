<?= $this->extend('template/bodyDocente') ?>
<?= $this->section('content'); ?>

    <h2>Asignaciones de Horarios para <?= $docente['nombre'] . " " . $docente['apaterno'] . " " . $docente['amaterno']; ?></h2>

    <div class="mt-5 mb-5">
        <a href="<?= site_url("docente/horarios/generar_constancia/{$docente['id']}"); ?>" target="_blank" class="btn btn-primary">Generar Constancia PDF</a>
    </div>

<?php if (empty($asignaciones)): ?>
    <p>No hay asignaciones de horarios disponibles.</p>
<?php else: ?>

    

    <table id="example" class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Carrera</th>
            <th>Asignatura</th>
            <th>Horario</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($asignaciones as $asignacion): ?>
            <tr>
                <td><?= $asignacion['carrera']; ?></td>
                <td><?= $asignacion['asignatura']; ?></td>
                <td>
                    <?= $asignacion['dia_semana1']; ?>
                    <?= $asignacion['hora_inicio1']; ?> -
                    <?= $asignacion['hora_fin1']; ?>
                    <br>
                    <?= $asignacion['dia_semana2']; ?>
                    <?= $asignacion['hora_inicio2']; ?> -
                    <?= $asignacion['hora_fin2']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?= $this->endSection(); ?>