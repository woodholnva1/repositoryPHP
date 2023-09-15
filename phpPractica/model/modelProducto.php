<?php

//Clase producto
class producto
{
    private $nombre;
    private $precio;
    public function __construct($precio, $nombre)
    {
        $this->precio = $precio;
        $this->nombre = $nombre;
    }


    // Getter y Setter para $nombre
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    // Getter y Setter para $precio
    public function getPrecio() {
        return $this->precio;
    }
    
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    
}

?>