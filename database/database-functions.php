<?php

    function guardarVuelo($vuelo){
        require('../config/conexion.php');
        $fechaLlegada=date("Y-m-d",strtotime($vuelo->getFechaLLegada()));
        $fechaSalida=date("Y-m-d",strtotime($vuelo->getFechaSalida()));
        $horaLlegada=date("H:i:s", strtotime($vuelo->getHorallegada()));
        $horaSalida=date("H:i:s", strtotime($vuelo->getHoraSalida()));
        $estado=$vuelo->getEstado();
        $tipoAvion=$vuelo->getTipoAvion();
        $query = "INSERT INTO vuelo(fecha_llegada,fecha_salida,hora_llegada, hora_salida, idestado, idtipoavion)"; 
        $query .= "VALUES ('$fechaLlegada','$fechaSalida','$horaLlegada','$horaSalida',$estado,$tipoAvion)";
        $result = mysqli_query($conn,$query);
        if($result != 1){ 
            echo("Ocurrió un error al guardar en la base de datos");
        }
        else {
            echo "Vuelo guardado en la base de datos";
        }
    }
    function retraerVuelos(){
        require('../config/conexion.php');
        $arrayResponse = array();
        $query = "SELECT id, fecha_llegada, fecha_salida FROM vuelo ";
        $result = mysqli_query($conn,$query);
            while($record = mysqli_fetch_array($result)){
                $vuelo = new Vuelo();
                $vuelo->setId($record['id']);
                $vuelo->setFechallegada($record['fecha_llegada']);
                $vuelo->setFechaSalida($record['fecha_salida']);
                $arrayResponse[]=$vuelo;
            }    
            return $arrayResponse;

    }
?>