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

    <input type="number" name="cedula_doc" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">APELLIDO: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="apellido_doc" value="" class="form-control" placeholder="Ingrese el apellido" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">NOMBRE: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="nombre_doc" value="" class="form-control" placeholder="Ingrese el nombre" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">TELEFONO: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="telefono_doc" value="" class="form-control" placeholder="Ingrese el telefono" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DIRECCION: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="direccion_doc" value="" class="form-control" placeholder="Ingrese la direccion" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">FECHA DE NACIMIENTO: </label>
  </div>
  <div class="col-md-7">

    <input type="date" name="fecha_nacimiento_doc" value="" class="form-control" placeholder="Ingrese la fecha de nacimiento" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">ESPECIALIDAD: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="especialidad_doc" value="" class="form-control" placeholder="Ingrese la especialuidad" required>
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
