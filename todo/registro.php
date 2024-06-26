<?php
$conn =$conexion = mysqli_connect("localhost", "root", "", "registro");

if (!$conn) {
    die("Conexión fallida: " . $conectar.php);
} 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];


$sql = "INSERT INTO registro (nombre, apellido, dni, telefono, direccion, email) VALUES ('$nombre', '$apellido', '$dni', '$telefono', '$direccion', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}
header("Location: login.html");




$conn->close();
?>
