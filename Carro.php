<?php
// Clase Madre
abstract class Carro {
    public $nombre;
    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    abstract public function introduccion() : string;
}

// Clases hijas
class Camioneta extends Carro {
    public function introduccion() : string {
        return "Escogimos camioneta: $this->nombre";
    }   
}

class Bus extends Carro {
    public function introduccion() : string{
        return "Escogimos bus: $this->nombre";
    }
}

$toyota = new Camioneta("Toyota");
echo $toyota->introduccion();
echo "<br>";

$volvo = new Bus("Volvo");
echo $volvo->introduccion();
echo "<br>";