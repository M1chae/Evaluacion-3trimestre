<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpractica";

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "INSERT INTO destino(id_destino, destino, fecha_llegada, fecha_salida, id_persona)
VALUES (229,'Santa_Cruz','2022-07-27','2022-06-10', 30)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>