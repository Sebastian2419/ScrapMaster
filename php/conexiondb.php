<?php

//Variables para definir la conexión a la base de datos
$host = "localhost"; 
$usuario = "postgres"; 
$contrasena = "root"; 
$base_datos = "scraping"; 

try {
    // Crear una conexión PDO
    $conexion = new PDO("mysql:host=$host;dbname=$base_datos", $usuario, $contrasena);

    // Establecer el modo de error de PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>