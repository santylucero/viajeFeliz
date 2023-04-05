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
public function set_datosPasajeros($numPasajero,$datoPasajero,$valorModif){
$this->pasajeros[$numPasajero][$datoPasajero]=$valorModif;
}

public function datosPasajeros(){
        $cadena = "";
        for ($i = 0; $i < count($this->get_Pasajeros()); $i++) {
            $cadena = "____________________________________________________ \n
            PASAJERO nro". $i+1 ."\n"
                . "NOMBRE: " . $this->get_Pasajeros()[$i]["NOMBRE"] . "\n"
                . "APELLIDO: " . $this->get_Pasajeros()[$i]["APELLIDO"] . "\n"
                . "DNI: " . $this->get_Pasajeros()[$i]["DNI"] . "\n" .
                "____________________________________________________ \n" . $cadena;
        }
        return $cadena;
}
public function __toString(){
// {
//     $cadena = "";
//     for ($i = 0; $i < count($this->get_Pasajeros()); $i++) {
//         $cadena = "____________________________________________________ \n
//         PASAJERO nro". $i+1 ."\n"
//             . "NOMBRE: " . $this->get_Pasajeros()[$i]["NOMBRE"] . "\n"
//             . "APELLIDO: " . $this->get_Pasajeros()[$i]["APELLIDO"] . "\n"
//             . "DNI: " . $this->get_Pasajeros()[$i]["DNI"] . "\n" .
//             "____________________________________________________ \n" . $cadena;
//     }
    return  "____________________________________________________ \n
    DATOS DEL VIAJE:\n" .
        "CODIGO DEL VIAJE: " . $this->get_codigo() . "\n" .
        "DESTINO: " . $this->get_destino() . "\n" .
        "CANTIDAD DE PASAJEROS: " . $this->get_cantPasajeros() . "\n" .
        "____________________________________________________ \n" .
        $this->datosPasajeros();
}
}