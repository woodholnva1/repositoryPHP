<?php

//Clase producto
class pais
{
    private $nombre;
    private $saludo = array();

    private $zona_hr;

    private $image;

    public function __construct($nombre, $saludo, $zona_hr,$image)
    {
        $this->nombre = $nombre;
        $this->saludo = $saludo;
        $this->zona_hr = $zona_hr;
        $this->image = $image;
    }


    // Getter y Setter para $nombre
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    // Getter y Setter para $saludo
    public function getSaludo() {
        return $this->saludo;
    }
    
    public function setSaludo($saludo) {
        $this->saludo = $saludo;
    }
    
    // Getter y Setter para $zona_hr
    public function getZona_hr() {
        return $this->zona_hr;
    }
    
    public function setZona_hr($zona_hr) {
        $this->zona_hr = $zona_hr;
    }
    
    // Getter y Setter para $image
    public function getImage() {
        return $this->image;
    }
    
    public function setImage($image) {
        $this->image = $image;
    }

     




}

?>