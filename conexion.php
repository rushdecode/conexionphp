
<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "baseejem";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn){
        die ("Conexion a base de datos falló".mysqli_connect_error());
    }

?>