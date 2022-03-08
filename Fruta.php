<?php 

class Fruta {

    public $nombre;
    public $color;
    
    function __construct($nombre, $color){
        $this->nombre = $nombre;
        $this->color = $color;
    }

    function set_nombre($nombre){
        $this->nombre = $nombre;
    }

    function get_nombre(){
        return $this->nombre;
    }

}