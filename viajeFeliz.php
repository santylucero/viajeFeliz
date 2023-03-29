<?php
class viajeFeliz{
private $codigo ;
private $destino;
private $cantMaxPasajeros;
private $Pasajeros;

public function __construct($codigo,$destino,$cantMaxPasajeros,$Pasajeros){
$this->codigo=$codigo;
$this->destino=$destino;
$this->cantMaxPasajeros=$cantMaxPasajeros;
$this->pasajeros=$pasajeros;
 }
public function get_codigo(){
return $this->codigo;
}
 public function get_destino(){
return $this->destino;
 }   
public function get_cantMaxPasajeros(){
return $this->cantMaxPasajeros;
}
public function get_pasajeros(){
return $this->pasajeros;
}
public function set_codigo($codigo){
    $this->codigo=$codigo;
    
}
public function set_destino($destino){
    $this->destino=$destino;
}
public function set_cantMaxPasajeros($cantMaxPasajeros){
    $this->cantMaxPasajeros=$cantMaxPasajeros;
}
public function set_pasajeros($pasajeros){
    $this->pasajeros=$pasajeros;
}
public function __toString(){
    return "codigo: " . $this->codigo . " ".
         "destino: " . $this->destino . " ".
         "cantidad maxima de pasajeros: " . $this->cantMaxPasajeros . " ". 
         "pasajeros: " . $this->pasajeros . " "; 
}
}