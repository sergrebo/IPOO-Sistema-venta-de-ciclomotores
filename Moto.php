<?php
class Moto {
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcIncrementoAnual;
    private $activa;

    public function __construct($cod, $costo, $anio, $descripcion, $porcIncrementoAnual, $activa){
        $this->codigo=$cod;
        $this->costo=$costo;
        $this->anioFabricacion=$anio;
        $this->descripcion=$descripcion;
        $this->porcIncrementoAnual=$porcIncrementoAnual;
        $this->activa=$activa;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getAnio(){
        return $this->anioFabricacion;
    }
    public function getDesc(){
        return $this->descripcion;
    }
    public function getPocentaje(){
        return $this->porcIncrementoAnual;
    }
    public function getActiva(){
        return $this->activa;
    }

    public function setCodigo($nvoCod){
        $this->codigo=$nvoCod;
    }
    public function setCosto($nvoCosto){
        $this->costo=$nvoCosto;
    }
    public function setAnio($nvoAnio){
        $this->anioFabricacion=$nvoAnio;
    }
    public function setDesc($nvaDesc){
        $this->descripcion=$nvaDesc;
    }
    public function setPorcentaje($nvoPorcentaje){
        $this->porcIncrementoAnual=$nvoPorcentaje;
    }
    public function setActiva($nvaActiva){
        $this->activa=$nvaActiva;
    }

    public function __toString(){
        return "Motocicleta código: ". $this->getCodigo(). " - Costo: ". $this->getCosto(). " - Año: ". $this->getAnio(). "\nDescripción:\n". $this->getDesc(). "\nPorcentaje de incremento anual: ". $this->getPocentaje(). "%\n". $this->imprimirActiva();
    }

    public function imprimirActiva(){
        $respuesta="";
        if ($this->getActiva()) {
            $respuesta="Apta para la venta";
        } else {
            $respuesta="No comercializable";
        }
        return $respuesta;
    }

    public function darPrecioVenta(){
        $_venta=-1;
        if ($this->getActiva()) {
            $_venta=$this->getCosto() + $this->getCosto() * ((date("Y") - $this->getAnio()) * $this->getPocentaje());
        }
        return $_venta;
    }
}
?>