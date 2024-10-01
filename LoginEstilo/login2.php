<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- Configura la ventana gráfica para que el diseño sea responsive -->
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"> 
    <!-- Enlace a la hoja de estilos de Bulma -->
</head>
<body>

<?php
// Variables con el usuario y la contraseña
$usuario_correcto = "admin";
$contrasena_correcta = "admin123";

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar si los datos son correctos
if ($usuario == $usuario_correcto && $contrasena == $contrasena_correcta) {
    echo "<div class='notification is-success'>";
    echo "¡Login exitoso! Bienvenido, $usuario.";
    echo "</div>";
    echo "<br>";
    echo "<button class='button is-link' onclick=\"location.href='index.php'\">Regresar</button>";
} else {
    echo "<div class='notification is-danger'>";
    echo "Usuario o contraseña incorrectos.";
    echo "</div>";
    echo "<br>";
    echo "<a class='button is-warning' href='index.php'>Volver a intentar</a>";
}
?>
</body>
</html>
