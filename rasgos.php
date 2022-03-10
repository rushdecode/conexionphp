<?php

trait mensaje1{
    public function msg1(){
        echo "Orientada a Objetos es divertida";
    }
}

trait mensaje2{
    public function msg2(){
        echo "Orientada a Objetos reduce duplicacion de codigo";
    }
}

class Bienvenida {
    use mensaje1, mensaje2;
}

$objeto = new Bienvenida();
$objeto->msg1();
echo "<br>"
$objeto->msg2();