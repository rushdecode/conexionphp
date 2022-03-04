
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

    /// Consulta para insertar un registro nuevo
   
    echo "Encontró base de datos <br>";

    $consulta = "INSERT INTO alumnos (nombre, apellido) VALUES ('Nora','Sierra')";

    $query = mysqli_query($conn, $consulta);

    if(!$query){
        echo "Error ".$consulta. "<br>".mysqli_error($conn);
    }else{
        echo "Se creó un nuevo registro";
    }


?>