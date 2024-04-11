<?php
class Cliente {
    private $nombre;    //string
    private $apellido;  //string
    private $dadoDeBaja;    //boleano
    private $tipoDocumento; //string
    private $numDocumento;  //entero

    public function __construct($nombre, $apellido, $dadoDeBaja, $tipoDoc, $nroDoc){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->$dadoDeBaja=$dadoDeBaja;
        $this->tipoDocumento=$tipoDoc;
        $this->numDocumento=$nroDoc;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEstadoBaja(){
        return $this->dadoDeBaja;
    }
    public function getTipoDoc(){
        return $this->tipoDocumento;
    }
    public function getNumDoc(){
        return $this->numDocumento;
    }

    public function setNombre($nvoNombre){
        $this->nombre=$nvoNombre;
    }
    public function setApellido($nvoApellido){
        $this->apellido=$nvoApellido;
    }
    public function setEstadoBaja($nvoEstadoBaja){
        $this->dadoDeBaja=$nvoEstadoBaja;
    }
    public function setTipoDoc($nvoTipoDoc){
        $this->tipoDocumento=$nvoTipoDoc;
    }
    public function setNumDoc($nvoNumDoc){
        $this->numDocumento=$nvoNumDoc;
    }

    public function __toString(){
        return "Cliente: ". $this->getApellido(). ", ". $this->getNombre(). " ". $this->getTipoDoc(). " ". $this->getNumDoc(). " - ". $this->imprimirEstadoCuenta()."\n";
    }

    public function imprimirEstadoCuenta(){
        $respuesta="";
        if ($this->getEstadoBaja()) {
            $respuesta="Cuenta dada de baja";
        } else {
            $respuesta="Cuenta dada de alta activa";
        }
        return $respuesta;
    }
}
?>