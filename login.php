<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "registro");

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener datos del formulario
$correo = $_POST['correo'];
$dni = $_POST['dni'];

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM registros WHERE correo='$correo' AND dni='$dni'";
$resultado = mysqli_query($conexion, $sql);

// Verificar si se encontró un usuario con las credenciales proporcionadas
if (mysqli_num_rows($resultado) == 1) {
    // Iniciar sesión o establecer una cookie de sesión
    session_start();
    $_SESSION['correo'] = $correo;
    // Redirigir a la página de inicio
    header("Location: login.php");
} else {
    // Si las credenciales son incorrectas, redirigir de nuevo al formulario de login con un mensaje de error
    header("Location: inicio.html?error=1");
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
