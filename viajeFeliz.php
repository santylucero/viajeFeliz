<?php
class ViajeFeliz{
private $codigo ;
private $destino;
private $cantPasajeros;
private $pasajeros=[];

public function __construct($codigo,$destino,$cantPasajeros,$pasajeros){
$this->codigo=$codigo;
$this->destino=$destino;
$this->cantPasajeros=$cantPasajeros;
$this->pasajeros=$pasajeros;
 }
public function get_codigo(){
return $this->codigo;
}
 public function get_destino(){
return $this->destino;
 }   
public function get_cantPasajeros(){
return $this->cantPasajeros;
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
public function set_cantPasajeros($cantPasajeros){
    $this->cantPasajeros=$cantPasajeros;
}
public function set_pasajeros($pasajeros){
    $this->pasajeros=$pasajeros;
}
public function __toString(){
    return "codigo: " . $this->codigo . " ".
         "destino: " . $this->destino . " ".
         "cantidad maxima de pasajeros: " . $this->cantPasajeros . " ". 
         "pasajeros: " . $this->pasajeros . " "; 
}
}