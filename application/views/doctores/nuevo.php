<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  <b>Nuevo Doctor</b>
</legend>
<form class="" action="index.html" method="post">
  <div class="row">
  <div class="col-md-4 text-right">
    <label for="">CEDULA: </label>
  </div>
  <div class="col-md-7">

    <input type="number" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">APELLIDO: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">NOMBRE: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">TELEFONO: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DIRECCION: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">FECHA DE NACIMIENTO: </label>
  </div>
  <div class="col-md-7">

    <input type="date" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">ESPECIALIDAD: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4">
  </div>

  <div class="col-md-7">
    <button type="submit" name="button" class="btn btn-primary">
      <i class="glyphicon glyphicon-ok"></i>
      Guardar
    </button>
    <!-- etiqueta a link -->
    <a href="<?php echo site_url('doctores/index'); ?>" class="btn btn-danger">
      <i class="glyphicon glyphicon-remove"></i>
      Cancelar
    </a>
  </div>
</div>

</form>
