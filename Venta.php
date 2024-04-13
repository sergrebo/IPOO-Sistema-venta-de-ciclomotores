<?php
class Venta{
    private $numero;
    private $fecha;
    private $objCliente;
    private $ArrayMotos;
    private $precioFinal;

    public function __construct($num, $fecha, $objCliente, $colMotos, $precio){
        $this->numero=$num;
        $this->fecha=$fecha;
        $this->objCliente=$objCliente;
        $this->ArrayMotos=$colMotos;
        $this->precioFinal=$precio;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getObjCliente(){
        return $this->objCliente;
    }
    public function getArrayMotos(){
        return $this->ArrayMotos;
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
    public function setObjCliente($nvaObjCliente){
        $this->objCliente=$nvaObjCliente;
    }
    public function setArrayMotos($nvoArrayMotos){
        $this->ArrayMotos=$nvoArrayMotos;
    }
    public function setPrecioFinal($nvoPrecioFinal){
        $this->precioFinal=$nvoPrecioFinal;
    }

    public function __toString(){
        return "Venta n°: ". $this->getNumero(). " - Fecha: ". $this->getFecha(). " - Cliente: ". $this->getObjCliente(). " - Moto: ". $this->getArrayMotos(). " Precio final: $ ". $this->getPrecioFinal();
    }

    public function incorporarMoto($objMoto){
        if ($objMoto->getActiva()) {
            $arregloMotos=$this->getArrayMotos();
            array_push($arregloMotos, $objMoto);
            $this->setArrayMotos($arregloMotos);
            $this->setPrecioFinal($this->getPrecioFinal()+$objMoto->darPrecioVenta());
            $respuesta=true;
        } else {
            $respuesta=false;
        }
        return $respuesta;
    }
}
?>