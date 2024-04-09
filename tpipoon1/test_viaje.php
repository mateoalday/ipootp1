<?php
include_once "viaje.php";
include_once "responsable.php";
include_once "pasajero.php";


while (true) {
    echo "1. Cargar información del viaje\n";
    echo "2. Modificar datos del pasajero\n";
    echo "3. Agregar pasajero al viaje\n";
    echo "4. Mostrar datos del viaje\n";
    echo "5. Salir\n";
    echo "Seleccione una opción: ";

    $opcion = fgets(STDIN);

    switch ($opcion) {
        case 1:
            echo "Ingrese código del viaje: ";
            $codigo = fgets(STDIN);
            echo "Ingrese destino: ";
            $destino = fgets(STDIN);
            echo "Ingrese cantidad máxima de pasajeros: ";
            $maxPasajeros = fgets(STDIN);
            for ($i = 0; $i < $maxPasajeros; $i++) {
                echo "Ingrese nombre del pasajero: ";
                $nombre = fgets(STDIN);
                echo "Ingrese apellido del pasajero: ";
                $apellido = fgets(STDIN);
                echo "Ingrese documento del pasajero: ";
                $documento = fgets(STDIN);
                echo "Ingrese teléfono del pasajero: ";
                $telefono = fgets(STDIN);
                $pasajero = new Pasajero($nombre, $apellido, $documento, $telefono);
                
            }
            echo "Ingrese responsable: ";
            $responsable = fgets(STDIN);
            $viaje = new Viaje($codigo, $destino, $maxPasajeros, $responsable);
            echo "Viaje creado correctamente.\n";
            break;
        case 2:
            echo "Ingrese documento del pasajero a modificar: ";
            $documento = fgets(STDIN);
            echo "Ingrese nuevo nombre: ";
            $nombre = fgets(STDIN);
            echo "Ingrese nuevo apellido: ";
            $apellido = fgets(STDIN);
            echo "Ingrese nuevo teléfono: ";
            $telefono = fgets(STDIN);
            $viaje->modificarPasajero($documento, $nombre, $apellido, $telefono);
            break;
        case 3:
            echo "Ingrese nombre del pasajero: ";
            $nombre = fgets(STDIN);
            echo "Ingrese apellido del pasajero: ";
            $apellido = fgets(STDIN);
            echo "Ingrese documento del pasajero: ";
            $documento = fgets(STDIN);
            echo "Ingrese teléfono del pasajero: ";
            $telefono = fgets(STDIN);
            $pasajero = new Pasajero($nombre, $apellido, $documento, $telefono);
            $viaje->agregarPasajero($pasajero);
            break;
        case 4:
            $viaje->mostrarDatosViaje();
            break;
        case 5:
            exit();
        default:
            echo "Opción no válida\n";
            break;
    }
}


$responsable = new ResponsableV("123456", "789", "John", "Doe");
$viaje = new Viaje("ABC123", "Destino", 5, $responsable);


echo "Cargando información del viaje...\n";
$viaje->agregarPasajero(new Pasajero("Juan", "Pérez", "12345678", "555-1234"));
$viaje->agregarPasajero(new Pasajero("María", "Gómez", "87654321", "555-5678"));

echo "Modificando datos del pasajero...\n";
$viaje->modificarPasajero("12345678", "Juanita", "Pérez", "555-9999");

echo "Mostrando datos del viaje...\n";
$viaje->mostrarDatosViaje();