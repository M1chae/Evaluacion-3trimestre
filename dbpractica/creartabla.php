<?php
$servername = "localhost";
$username = "root";
$password = "";
$var=$_POST["nombredb"];
$tabla=["tb"];

$ct01=$_POST["id"];
$ct02=$_POST["nombre"];
$ct03=$_POST["apellido"];
$ct04=$_POST["ci"];

//creando la conexion
$conn = new mysqli($servername, $username, $password);

//Verificando la conexión
if ($conn->connect_error){
    die("Falló de la conexión: "  .$conn->connect_error);

}
echo "Conexión correcta";

//SQL para crear tablas
$sql= "CREATE DATABASE $var"; 

$sql =  "CREATE TABLE $tabla(
    ct01 BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ct02 VARCHAR(12),
    ct03 VARCHAR(12),
    ct04 VARCHAR(8) UNSIGNED
)";
if ($conn->query($sql) === TRUE){
    echo "Base de datos creada correctamente";
}else{
    echo "Error al crear: "  .$conn->error;
}

$conn->close();
?>