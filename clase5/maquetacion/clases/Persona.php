<?php

class Persona
{
    public $nombre;
    public $apellidos;
    public $fecha_nac;
    public $ci;

    public function __construct($nom, $ap, $fn, $ci) {
        $this->nombre = $nom;
        $this->apellidos = $ap;
        $this->fecha_nac = $fn;
        $this->ci = $ci;
    }

    public function listar()
    {
        echo "Listando Personas";
    }

    public function crear_persona($nom, $ap, $fn, $ci)
    {
        $this->nombre = $nom;
        $this->apellidos = $ap;
        $this->fecha_nac = $fn;
        $this->ci = $ci;
    }

    public function mostrar_persona()
    {
        echo "Nombre: $this->nombre , Apellidos: $this->apellidos , Ci: $this->ci";
    }

    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

}

