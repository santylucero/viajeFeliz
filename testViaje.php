<?php
include("viajeFeliz.php");

$codigo = "";
$destino = "";
$cantPasajeros = 0;
$personasViaje = [];
$nombre = "";
$apellido = "";
$dni = "";

/**
 * pide los datos de los pasajeros y se repite segun la cantidad de pasajeros que se le indique
 */
function datosPasajeros($cantPas)
//string $nombrePas, $apellidoPas
//int $dniPas, $cont
{
    $cont = 1;
    $arrayPas = [];
    do {
        echo "ingrese nombre del pasajero: ";
        $nombrePas = trim(fgets(STDIN));
        echo "ingrese el apellido: ";
        $apellidoPas = trim(fgets(STDIN));
        echo "ingrese el numero de documento: ";
        $dniPas = trim(fgets(STDIN));
        array_push($arrayPas, array("nombre: " => $nombrePas, "apellido: " => $apellidoPas, "DNI: " => $dniPas));
        $cont++;
    } while ($cont == $cantPas);
    return $arrayPas;
}

/**
 * muestra un menu y retorna en las opciones
 */
function menu(){
    echo "[1]VER DATOS DEL VIAJE";
    echo "[2]MODIFICAR INFORMACION DEL VIAJE";
    echo "[3]MODIFICAR LOS DATOS DE UNA PERSONA";
    echo "[4]SALIR";
    $opcSeleccionada=trim(fgets(STDIN));
    return $opcSeleccionada;
}

echo "ingrese codigo de viaje: ";
$codigo = trim(fgets(STDIN));
echo "destino del viaje: ";
$destino = trim(fgets(STDIN));
echo "ingrese la cantidad de pasajeros: ";
$cantPasajeros = trim(fgets(STDIN));
echo "INGRESE LOS DATOS DE LOS PASAJEROS ";
$datosPas = datosPasajeros($cantPasajeros);

$viajeFeliz= new ViajeFeliz($codigo, $destino, $cantPasajeros, $datosPas);

