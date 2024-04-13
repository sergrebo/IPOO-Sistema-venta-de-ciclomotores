<?php
class Empresa{
    private $denominacion;
    private $direccion;
    private $arrayClientes;
    private $arrayMotos;
    private $arrayVentas;

    public function __construct($nombre, $domicilio, $coleccionClientes, $coleccionMotos, $coleccionVentas){
        $this->denominacion=$nombre;
        $this->direccion=$domicilio;
        $this->arrayClientes=$coleccionClientes;
        $this->arrayMotos=$coleccionMotos;
        $this->arrayVentas=$coleccionVentas;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getArrayClientes(){
        return $this->arrayClientes;
    }
    public function getArrayMotos(){
        return $this->arrayMotos;
    }
    public function getArrayVentas(){
        return $this->arrayVentas;
    }

    public function setDenominacion($nvaDenominacion){
        $this->denominacion=$nvaDenominacion;
    }
    public function setDireccion($nvaDireccion){
        $this->direccion=$nvaDireccion;
    }
    public function setArrayClientes($nvoArrayClientes){
        $this->arrayClientes=$nvoArrayClientes;
    }
    public function setArrayMotos($nvoArrayMotos){
        $this->arrayMotos=$nvoArrayMotos;
    }
    public function setArrayVentas($nvoArrayVentas){
        $this->arrayVentas=$nvoArrayVentas;
    }

    public function __toString(){
        return "Empresa: ". $this->getDenominacion(). " - ". $this->getDireccion();
    }

    public function retornarMoto($codigoMoto){
        $i=0;
        $bandera=false;
        $respuesta=null;
        do {
            if ($this->getArrayMotos()[$i]->getCodigo()==$codigoMoto){
                $bandera=true;
                $respuesta=$this->getArrayMotos()[$i];
            }
            $i++;
        } while ($i<count($this->getArrayMotos()) && !$bandera);
        return $respuesta;//que retorno? "retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro" //el codigo de la moto?
    }

    public function registrarVenta($colCodigosMoto, $objCliente){
        $precioFinal=0;
        if (!$objCliente->getEstadoBaja()) {
            $objVenta=new Venta((count($this->getArrayVentas())+1), date("d/m/Y"), $objCliente, [], 0);
            for ($i=0; $i<count($colCodigosMoto) ; $i++) {
                $objMoto=$this->retornarMoto($colCodigosMoto[$i]);
                if ($objMoto!=null) {
                    $objVenta->incorporarMoto($objMoto);
                }
            }
        $precioFinal=$objVenta->getPrecioFinal();
        }
        $arrayVentas=$this->getArrayVentas();
        array_push($arrayVentas, $objVenta);
        $this->setArrayVentas($arrayVentas);
        return $precioFinal;
    }
}
?>