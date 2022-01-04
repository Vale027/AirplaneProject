<?php
    require('conexion.php');

    $cadena = "";
    $idPais = $_POST['ciudadOrigen'];
    $consulta2 = "SELECT ciudad.id, ciudad.nombre FROM pais INNER JOIN ciudad ON ciudad.idpais=pais.id WHERE ciudad.idpais='$idPais'";
    $result2 = mysqli_query($conn,$consulta2);
    $cadena = "<select name='listaCiudadesO' id='listaCiudadesO'>";
        while($imprimir2 = mysqli_fetch_array($result2)){
            $cadena .= "<option value='".$imprimir2['id']."'>".$imprimir2['nombre']."</option>";
        }
    $cadena .= "</select>";
    echo $cadena;
        
?>