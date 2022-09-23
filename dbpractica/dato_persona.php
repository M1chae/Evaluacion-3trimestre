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
$sql = "INSERT INTO persona(id_persona, nombres, apellidoP, apeliidoM, ci)
VALUES (30,'Nayra','Copa','Soto', 6600123)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>