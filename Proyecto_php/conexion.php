<?php
$host = "localhost";
$usuario = "root";
$password = "";
$baseDeDatos = "pagina_crud"; // <-- Este es el cambio que necesitás

$conn = new mysqli($host, $usuario, $password, $baseDeDatos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
