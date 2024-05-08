<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "registro");

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

