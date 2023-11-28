<?= $this->extend('template/body') ?>
<?= $this->section('content'); ?>

<h2>Programación de Horarios para Carrera <?= $carrera_id; ?></h2>

<?= form_open("admin/carreras/agregar_horario/{$carrera_id}"); ?>



<div class="form-group">
    <label for="docente">Docente:</label>
    <select class="form-control" name="docente" id="docente">
        <?php foreach ($docentes as $docente): ?>
            <option class="text-uppercase" value="<?= $docente['id']; ?>"><?= $docente['nombre'] . ' ' . $docente['apaterno'] . ' ' . $docente['amaterno']; ?></option>
        <?php endforeach; ?>
    </select>
</div>


<div class="form-group">
    <label for="asignatura">Asignatura:</label>
    <select name="asignatura" id="asignatura">
        <?php foreach ($asignaturas as $asignatura): ?>
            <option value="<?= $asignatura['id']; ?>"><?= $asignatura['nombre']; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label for="hora_inicio1">Hora de inicio 1:</label>
    <input type="time" name="hora_inicio1" id="hora_inicio1" value="<?= old('hora_inicio1'); ?>">
</div>

<div class="form-group">
    <label for="hora_fin1">Hora de fin 1:</label>
    <input type="time" name="hora_fin1" id="hora_fin1" value="<?= old('hora_fin1'); ?>">
</div>

<div class="form-group">
    <label for="dia_semana1">Día de la semana 1:</label>
    <select name="dia_semana1" id="dia_semana1">
        <option value="Lunes" <?= old('dia_semana1') === 'Lunes' ? 'selected' : ''; ?>>Lunes</option>
        <option value="Martes" <?= old('dia_semana1') === 'Martes' ? 'selected' : ''; ?>>Martes</option>
        <option value="Miércoles" <?= old('dia_semana1') === 'Miércoles' ? 'selected' : ''; ?>>Miércoles</option>
        <option value="Jueves" <?= old('dia_semana1') === 'Jueves' ? 'selected' : ''; ?>>Jueves</option>
        <option value="Viernes" <?= old('dia_semana1') === 'Viernes' ? 'selected' : ''; ?>>Viernes</option>
        <option value="Sábado" <?= old('dia_semana1') === 'Sábado' ? 'selected' : ''; ?>>Sábado</option>
    </select>
</div>

<div class="form-group">
    <label for="hora_inicio2">Hora de inicio 2:</label>
    <input type="time" name="hora_inicio2" id="hora_inicio2" value="<?= old('hora_inicio2'); ?>">
</div>

<div class="form-group">
    <label for="hora_fin2">Hora de fin 2:</label>
    <input type="time" name="hora_fin2" id="hora_fin2" value="<?= old('hora_fin2'); ?>">
</div>

<div class="form-group">
    <label for="dia_semana2">Día de la semana 2:</label>
    <select name="dia_semana2" id="dia_semana2">
        <option value="Lunes" <?= old('dia_semana2') === 'Lunes' ? 'selected' : ''; ?>>Lunes</option>
        <option value="Martes" <?= old('dia_semana2') === 'Martes' ? 'selected' : ''; ?>>Martes</option>
        <option value="Miércoles" <?= old('dia_semana2') === 'Miércoles' ? 'selected' : ''; ?>>Miércoles</option>
        <option value="Jueves" <?= old('dia_semana2') === 'Jueves' ? 'selected' : ''; ?>>Jueves</option>
        <option value="Viernes" <?= old('dia_semana2') === 'Viernes' ? 'selected' : ''; ?>>Viernes</option>
        <option value="Sábado" <?= old('dia_semana2') === 'Sábado' ? 'selected' : ''; ?>>Sábado</option>
    </select>
</div>

<div class="form-group">
    <label for="grupo">Grupo:</label>
    <input type="text" name="grupo" id="grupo" value="<?= old('grupo'); ?>">
</div>

<div class="form-group">
<button class="btn btn-primary" type="submit">Guardar Asignación</button>
        </div>

<?= form_close(); ?>

<?= $this->endSection(); ?>
