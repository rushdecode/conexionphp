<?php
    $server = "localhost";
    $user = "root";
    $pass = "";

    // Crea conexion
    $conn = mysqli_connect($server, $user, $pass);
   
    // Verificar conexion
    if (!$conn){
        die ("Conexion falló: ".mysqli_connect_error());
    }

    echo "Conexión OK <br>";

    $db = "baseejem";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn){
        die ("Conexion a base de datos fallo".mysqli_connect_error());
    }

    $consulta = "INSERT INTO alumnos  (nombre, apellido) VALUES ('Alejandro','Buitrago')";

    if ( mysqli_query($conn, $consulta) ){
        $ultimo_codigo = mysqli_insert_id($conn);
        echo "Alumno ingresado con el codigo: ".$ultimo_codigo;
    }
    else{
        echo "Error ".$consulta."<br>".mysqli_error($conn);
    }

?>