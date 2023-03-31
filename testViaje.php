<?php
include("viajeFeliz.php");

$codigo = "";
$destino = "";
$cantPasajeros = 0;
$pasajeros = [];
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
        echo "ingrese nombre del pasajero: \n";
        $nombrePas = trim(fgets(STDIN));
        echo "ingrese el apellido:\n ";
        $apellidoPas = trim(fgets(STDIN));
        echo "ingrese el numero de documento:\n ";
        $dniPas = trim(fgets(STDIN));
        array_push($arrayPas, array("NOMBRE" => $nombrePas, "APELLIDO" => $apellidoPas, "DNI" => $dniPas . "\n\n"));
        $cont++;
    } while ($cont == $cantPas);
    return $arrayPas;
}

/**
 * muestra un menu y retorna en las opciones
 */
function menu()
{
    echo "\n";
    echo "SELECCIONE ALGUNA OPCION\n";
    echo "[1]VER DATOS DEL VIAJE\n";
    echo "[2]MODIFICAR INFORMACION DEL VIAJE\n";
    echo "[3]MODIFICAR LOS DATOS DE UNA PERSONA\n";
    echo "[4]SALIR\n\n";
    $opcSeleccionada = trim(fgets(STDIN));
    return $opcSeleccionada;
}

echo "ingrese codigo de viaje:\n ";
$codigo = trim(fgets(STDIN));
echo "destino del viaje:\n ";
$destino = trim(fgets(STDIN));
echo "ingrese la cantidad de pasajeros:\n";
$cantPasajeros = trim(fgets(STDIN));
echo "\nINGRESE LOS DATOS DE LOS PASAJEROS\n\n ";
$datosPas = datosPasajeros($cantPasajeros);
echo "\n";
$viajeFeliz = new ViajeFeliz($codigo, $destino, $cantPasajeros, $datosPas);
$viajeFeliz->get_pasajeros($datosPas);

do {
    $opcionSel = menu();
    switch ($opcionSel) {



    case 1:
        echo $viajeFeliz;
            //  echo "--------------DATOS DEL VIAJE--------------\n";
            //  echo "CODIGO DE VIAJE: " . $viajeFeliz->get_codigo() . "\n";
            //  echo "DESTINO DE VIAJE: " . $viajeFeliz->get_destino() . "\n";
            //  echo "CANTIDAD DE PASAJEROS: " . $viajeFeliz->get_cantPasajeros() . "\n";
            //  echo "-------------------------------------------\n\n";
            break;



    case 2:
            echo "MODIFICAR INFORMACION DEL VIAJE: \n
                1- MODIFICAR CODIGO \n
                2- MODIFICAR DESTINO \n
                3- MODIFICAR CANTIDAD DE PASAJEROS \n\n";
            $opcionModif = trim(fgets(STDIN));
            switch ($opcionModif) {
                case 1:
                    echo "ingrese nuevo codigo: \n";
                    $nuevoCodigo = trim(fgets(STDIN));
                    $viejoCodigo = $viajeFeliz->get_codigo();
                    if ($nuevoCodigo !== $viejoCodigo) {
                        echo "El antiguo codigo era: " . $viejoCodigo . "\n";
                        echo "El nuevo es: " . $nuevoCodigo . "\n\n";
                        $viajeFeliz->set_codigo($nuevoCodigo);
                    } else {
                        echo "es el mismo codigo\n\n";
                    }
                    break;
                case 2:
                    echo "ingrese nuevo destino: \n";
                    $nuevoDestino = trim(fgets(STDIN));
                    $viejoDestino = $viajeFeliz->get_destino();
                    if ($nuevoDestino !== $viejoDestino) {
                        echo "El antiguo destino era: " . $viejoDestino . "\n";
                        echo "El nuevo es: " . $nuevoDestino . "\n\n";
                        $viajeFeliz->set_destino($nuevoDestino);
                    } else {
                        echo "es el mismo destino\n\n";
                    }
                    break;
                case 3:
                    echo "modifique la cantidad de pasajeros: \n";
                    $nuevaCantidad = trim(fgets(STDIN));
                    $viejaCantidad = $viajeFeliz->get_cantPasajeros($cantPasajeros);
                    if ($nuevaCantidad !== $viejaCantidad) {
                        echo "la antigua cantidad era: " . $viejaCantidad . "\n";
                        echo "la nueva es: " . $nuevaCantidad . "\n\n";
                        $viajeFeliz->set_cantPasajeros($nuevaCantidad);
                    } else {
                        echo "es la misma cantidad\n\n";
                    }
            }
            break;

    case 3:
            echo "MODIFICAR DATOS DE UNA PERSONA: \n";
            echo "ingrese el DNI de la persona que busca modificar sus datos: ";
            $dniModif = trim(fgets(STDIN));
            echo "\n";
            $pasajerosModif = $viajeFeliz->get_pasajeros();
            for ($i = 0; $i < count($pasajerosModif); $i++){
                if ($dniModif == $pasajerosModif[$i]["DNI"]){
                    echo "SELECCIONE EL DATO QUE QUIERE MODIFICAR\n";
                    echo "[1]MODIFICAR EL NOMBRE ".$pasajerosModif[$i]["NOMBRE"]."\n";
                    echo "[2]MODIFICAR EL APELLIDO ".$pasajerosModif[$i]["APELLIDO"]."\n";
                    echo "[3]MODIFICAR EL DNI ".$pasajerosModif[$i]["DNI"]."\n";
                    $opcionPasajeros=trim(fgets(STDIN));
                    echo "\n\n";
                        switch($opcionPasajeros){
                            case 1:
                                echo "ingrese nuevo nombre: ";
                                $nuevoNombre=trim(fgets(STDIN));
                                echo "\n";
                                $viajeFeliz->set_datosPasajeros($i,"NOMBRE",$nuevoNombre);
                                break;
                            case 2:
                                echo "ingrese el apellido nuevo: ";
                                $nuevoApellido=trim(fgets(STDIN));
                                echo "\n";
                                $viajeFeliz->set_datosPasajeros($i,"APELLIDO",$nuevoApellido);
                                break;
                            case 3:
                                echo "ingrese nuevo dni: ";
                                $nuevoDni=trim(fgets(STDIN));
                                echo "\n";
                                $viajeFeliz->set_datosPasajeros($i,"DNI",$nuevoDni);
                                break;
                        }
                }
            }
    }
} while ($opcionSel != "4");
