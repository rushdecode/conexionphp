<?php

include "Fruta.php";

$guanabana = new Fruta("Guanabana", "verde");

$guanabana->nombre = "Soursop";
$guanabana->peso = "500gr";

echo $guanabana->nombre;