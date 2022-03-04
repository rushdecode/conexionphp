
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
        die ("Conexion a base de datos falló".mysqli_connect_error());
    }

    $consulta = "INSERT INTO alumnos (nombre, apellido) VALUES ('Julian', 'Duran');"; 
    $consulta .= "INSERT INTO alumnos (nombre, apellido) VALUES ('Lezza', 'Duran');";
    $consulta .= "INSERT INTO alumnos (nombre, apellido) VALUES ('Olga', 'Hernandez');";

    if(mysqli_multi_query($conn, $consulta)){
        echo "Se registraron multiples alumnos";
    }
    else{
        echo "Error: ".$consulta."<br>".mysqli_error($conn);
    }

?>