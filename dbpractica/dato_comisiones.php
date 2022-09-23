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
$sql = "INSERT INTO comisiones(id_comision, monto, concepto, fecha_comision, id_persona)
VALUES (313, 1500,'Venta_de_computadoras','2022-11-22', 14)
";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>