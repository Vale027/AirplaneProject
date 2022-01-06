<?php

class Vuelo {
    public $id;
    public $fechaLlegada;
    public $fechaSalida;
    public $horaLlegada;
    public $horaSalida;
    public $estado;
    public $tipoAvion;
    
    function setId($id){
        $this->id=$id;
    }
    function getId(){
        return $this->id;
    }
    
    function setFechallegada($fechaLlegada){
        $this->fechaLlegada = $fechaLlegada;
    }
    function getFechallegada(){
       return  $this->fechaLlegada;
    }
    function setFechaSalida($fechaSalida){
        $this->fechaSalida = $fechaSalida;
    }
    function getFechaSalida(){
       return  $this->fechaSalida;
    }
    function setHoraLlegada($horaLlegada){
        $this->horaLlegada = $horaLlegada;
    }
    function getHorallegada(){
       return  $this->horaLlegada;
    }
    function setHoraSalida($horaSalida){
        $this->horaSalida = $horaSalida;
    }
    function getHoraSalida(){
       return  $this->horaSalida;
    }
    function setEstado($estado){
        $this->estado = $estado;
    }
    function getEstado(){
       return  $this->estado;
    }
    function setTipoAvion($tipoAvion){
        $this->tipoAvion = $tipoAvion;
    }
    function getTipoAvion(){
       return  $this->tipoAvion;
    }
}
?>