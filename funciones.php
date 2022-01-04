<?php

function InsertarVuelo()
{
    require('conexion.php');  
    $ciudadDestino = isset($_POST['listaCiudadesD']);
    $ciudadOrigen = isset($_POST['listaCiudadesO']);
    $fechasalida = isset($_POST['salida']);
    $fechasalida = new DateTime();
    $fechaS = $fechasalida->format('Y-m-d');
    $fechallegada = isset($_POST['llegada']);
    $fechallegada = new DateTime();
    $fechaLl = $fechallegada->format('Y-m-d');
    $horasalida =  isset($_POST['horasalida']);
    $horallegada =  isset($_POST['horallegada']);

    if(isset($_POST['enviar'])){
        $conn->set_charset("utf8");
        $consulta = "INSERT INTO vuelo(fecha_salida, hora_salida, fecha_llegada, hora_llegada, idestado, idciudad, idtipoavion) VALUES ('$fechaS','$horasalida','$fechaLl','$horallegada',1,'$ciudadDestino',1)";
        $result = mysqli_query($conn,$consulta);
        if($result == false){
            printf("error: %s\n", mysqli_error($con));
        }
        else{
            echo ":(";
        }
        
    }
}


?>