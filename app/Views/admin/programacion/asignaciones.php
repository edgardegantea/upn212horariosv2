<?= $this->extend('template/body') ?>

<?= $this->section('content') ?>

    <h2>Asignaciones de Horarios para Carrera <?= $carrera['nombre']; ?></h2>

<?php if (empty($asignaciones)): ?>
    <p>No hay asignaciones de horarios disponibles.</p>
<?php else: ?>
    <table id="example" class="table-striped table table-hover">
        <thead>
        <tr>
            <th>Carrera</th>
            <th>Docente</th>
            <th>Asignatura</th>
            <th>Horario</th>
            <th>Fecha de Creación</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($asignaciones as $asignacion): ?>
            <tr>
                <td><?= $carrera['nombre']; ?></td>
                <td><?= $asignacion['docente']; ?></td>
                <td><?= $asignacion['asignatura']; ?></td>
                <td>
                    <?= $asignacion['dia_semana1']; ?>
                    <?= $asignacion['hora_inicio1']; ?>
                    <?= $asignacion['hora_fin1']; ?>
                    <br>
                    <?= $asignacion['dia_semana2']; ?>
                    <?= $asignacion['hora_inicio2']; ?>
                    <?= $asignacion['hora_fin2']; ?>
                </td>
                <td><?= $asignacion['created_at']; ?></td>
                <td>
                    <a href="#">Ver</a>
                    <a href="#">Editar</a>
                    <a href="#">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?= $this->endSection(); ?>