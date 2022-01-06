<?php include "../templates/base.php"; ?>
<?php include "../models/vuelo.php"; ?>
<?php include "../database/database-functions.php"; ?>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Registra Vuelo</h2>
      <hr>
      <form method="post">
        <div class="form-group">
          <label for="fechaLlegada">Fecha de Llegada</label>
          <input type="date" name="fechaLlegada" id="fechaLlegada" class="form-control">
        </div>
        <div class="form-group">
          <label for="fechaSalida">Fecha de Salida</label>
          <input type="date" name="fechaSalida" id="fechaSalida" class="form-control">
        </div>
        <div class="form-group">
          <label for="horaLlegada">Hora de llegada</label>
          <input type="time" name="horaLlegada" id="horaLlegada" class="form-control">
        </div>
        <div class="form-group">
          <label for="horaSalida">Hora de Salida</label>
          <input type="time" name="horaSalida" id="horaSalida" class="form-control">
        </div>
        <div class="form-group">
          <label for="tipoAvion">Tipo de avion</label>
          <input type="text" name="tipoAvion" id="tipoAvion" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
        </div>
      </form>
    </div>
  </div>
</div>
<?php
if (isset($_POST['submit'])) {
  //catch value from POST request and make validation for each field
  //create object
  $vuelo = new Vuelo();
  $vuelo->setFechaLlegada($_POST['fechaLlegada']);
  $vuelo->setFechaSalida($_POST['fechaSalida']);
  $vuelo->setHoraLlegada($_POST['horaLlegada']);
  $vuelo->setHoraSalida($_POST['horaSalida']);
  //set defect values when you create a vuelo object
  $vuelo->setEstado(1);
  $vuelo->setTipoAvion(1);
  //call method to save in the database
  guardarVuelo($vuelo);

}
 ?>
<?php include "../templates/footer.php"; ?>
