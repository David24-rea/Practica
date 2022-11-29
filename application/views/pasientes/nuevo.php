<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  <b>Nuevo Pasiente</b>
</legend>
<center>
  <a href="<?php echo site_url('pasientes/index'); ?>" class="btn btn-primary">
    <i class="glyphicon glyphicon-arrow-left"></i>
    Volver
  </a>
</center>
<br>
<form class="" action="index.html" method="post">
  <div class="row">
  <div class="col-md-4 text-right">
    <label for="">CEDULA: </label>
  </div>
  <div class="col-md-7">

    <input type="number" name="cedula_pas" value="" class="form-control" placeholder="Ingrese el número de cédula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">APELLIDO: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="apellido_pas" value="" class="form-control" placeholder="Ingrese sua apellido" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">NOMBRE: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="nombre_pas" value="" class="form-control" placeholder="Ingrese el nombre" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">TELEFONO: </label>
  </div>
  <div class="col-md-7">

    <input type="number" name="telefono_pas" value="" class="form-control" placeholder="Ingrese el telefono" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DIRECCION: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="direccion_pas" value="" class="form-control" placeholder="Ingrese la direccion" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">FECHA DE NACIMIENTO: </label>
  </div>
  <div class="col-md-7">

    <input type="date" name="fecha_nacimiento" value="" class="form-control" placeholder="Ingrese la fecha de nacimiento" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">SINTOMAS: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="sintomas_pas" value="" class="form-control" placeholder="Ingrese los sintomas del pasiente" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DESCRIPCION: </label>
  </div>
  <div class="col-md-7">

    <input type="text" name="descripcion_pas" value="" class="form-control" placeholder="Ingrese la descripcion del pasiente" required>
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
    <a href="<?php echo site_url('pasientes/index'); ?>" class="btn btn-danger">
      <i class="glyphicon glyphicon-remove"></i>
      Cancelar
    </a>
  </div>
</div>

</form>
