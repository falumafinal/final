<?php
$conexion = mysqli_connect("localhost", "root", "", "registro");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


$correo = $_POST['correo'];
$dni = $_POST['dni'];

$sql = "SELECT * FROM registros WHERE correo='$correo' AND dni='$dni'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 1) {
    session_start();
    $_SESSION['correo'] = $correo;
    header("Location: login.php");
} else {
    header("Location: inicio.html?error=1");
}

mysqli_close($conexion);
?>
