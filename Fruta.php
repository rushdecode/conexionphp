<?php 

class Fruta {

    public $nombre;
    protected $color;
    public $peso;
    
    function __construct($nombre, $color){
        $this->nombre = $nombre;
        $this->color = $color;
    }

    function __destruct(){
        echo "<br> La fruta es {$this->nombre}";
    }

    function set_nombre($nombre){
        $this->nombre = $nombre;
    }

    function get_nombre(){
        return $this->nombre;
    }

    function sobreescribir_en_tropical(){
        echo "Estamos sobre escribiendo el metodo tropical: {$this->nombre}, {$this->color}, {$this->peso}";
    }

}

