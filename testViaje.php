<?php
include("viajeFeliz.php");

$codigo = "";
$destino = "";
$cantPasajeros = 0;
$personasViaje = [];
$nombre = "";
$apellido = "";
$dni = "";
echo "ingrese codigo de viaje: ";
$codigo=trim(fgets(STDIN));
echo "destino del viaje: ";
$destino= trim(fgets(STDIN));
echo "ingrese la cantidad de pasajeros: ";
$cantPasajeros = trim(fgets(STDIN));
echo "datos de los pasajeros: ";

/**
 * pide los datos de los pasajeros
 * 
 */
function datosPasajeros()

{
    echo "ingrese nombre del pasajero: ";
    $nombrePas = trim(fgets(STDIN));
    echo "ingrese el apellido: ";
    $apellidoPas = trim(fgets(STDIN));
    echo "ingrese el numero de documento: ";
    $dniPas = trim(fgets(STDIN));

}



