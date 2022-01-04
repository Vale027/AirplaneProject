<?php

    require("conexion.php");

    $cadena1 = "";
    $idPaisD = $_POST['ciudadDestino'];
    $consulta3 = "SELECT ciudad.id, ciudad.nombre FROM pais INNER JOIN ciudad ON ciudad.idpais=pais.id WHERE ciudad.idpais='$idPaisD'";
    $result3 = mysqli_query($conn,$consulta3);
    $cadena1 = "<select name='listaCiudadesD' id='listaCiudadesD'>";
        while($imprimir3 = mysqli_fetch_array($result3)){
            $cadena1 .= "<option value='".$imprimir3['id']."'>".$imprimir3['nombre']."</option>";
        }
    $cadena1 .= "</select>";
    echo $cadena1;
?>