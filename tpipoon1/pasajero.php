<?php

class Pasajero {
    public $nombre;
    public $apellido;
    public $documento;
    public $telefono;

    public function __construct($nombre, $apellido, $documento, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->telefono = $telefono;
    }
}
