<?php
include_once "./inc/session_start.php";

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error); //finaliza
}

// Obtener los datos del formulario
$username = $_POST['usuario'];
$password = $_POST['contrasena'];

// Consulta para verificar si el usuario y la contraseña existen en la tabla
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    echo "Bienvenido , $username.<br>";
    echo '<a href="index.php">Regresar</a>';

    
} else {
    // Credenciales incorrectas
    echo "Usuario o contraseña incorrectos.<br>";
    echo '<a href="index.php">Regresar</a>';
}

// Cerrar la conexión
$conn->close();
?>
