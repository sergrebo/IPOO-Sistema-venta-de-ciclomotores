<?php
class Venta{
    private $numero;
    private $fecha;
    private $refCliente;
    private $refArrayMotos;
    private $precioFinal;

    public function __construct($num, $fecha, $refCliente, $refColMotos, $precio){
        $this->numero=$num;
        $this->fecha=$fecha;
        $this->refCliente=$refCliente;
        $this->refArrayMotos=$refColMotos;
        $this->precioFinal=$precio;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getRefCliente(){
        return $this->refCliente;
    }
    public function getRefArrayMotos(){
        return $this->refArrayMotos;
    }
    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function setNumero($nvoNum){
        $this->numero=$nvoNum;
    }
    public function setFecha($nvaFecha){
        $this->fecha=$nvaFecha;
    }
    public function setRefCliente($nvaRefCliente){
        $this->refCliente=$nvaRefCliente;
    }
    public function setRefArrayMotos($nvaRefArrayMotos){
        $this->refArrayMotos=$nvaRefArrayMotos;
    }
    public function setPrecioFinal($nvoPrecioFinal){
        $this->precioFinal=$nvoPrecioFinal;
    }

    public function __toString(){
        return "Venta n°: ". $this->getNumero(). " - Fecha: ". $this->getFecha(). " - Cliente: ". $this->getRefCliente(). " - Moto: ". $this->getRefArrayMotos(). " Precio final: $ ". $this->getPrecioFinal();
    }

    public function incorporarMoto($objMoto){
        
    }
}
?>