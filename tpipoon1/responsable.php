<?php
class ResponsableV {
    public $numEmpleado;
    public $numLicencia;
    public $nombre;
    public $apellido;

    public function __construct($numEmpleado, $numLicencia, $nombre, $apellido) {
        $this->numEmpleado = $numEmpleado;
        $this->numLicencia = $numLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
}