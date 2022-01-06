<?php include "../templates/base.php"; ?>
<?php include "../models/vuelo.php"; ?>
<?php include "../database/database-functions.php"; ?>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col"># ID Vuelo</th>
      <th scope="col">Fecha de Llegada</th>
      <th scope="col">Fecha de Salida</th>
    </tr>
  </thead>
  <tbody>
<?php
$arrayVuelos = retraerVuelos();
foreach($arrayVuelos as $vuelo){
    echo '<tr><td>'.$vuelo->getId().'</td><td>'.$vuelo->getFechallegada().'</td><td>'.$vuelo->getFechaSalida().'</td> </tr>';
}
?>
  </tbody>
</table>
</div>
<?php include "../templates/footer.php"; ?>