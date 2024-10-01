<?php
// Variables con el usuario y la contraseña
$usuario_correcto = "root";
$contrasena_correcta = "1234";

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar si los datos son correctos
if ($usuario == $usuario_correcto && $contrasena == $contrasena_correcta){
    echo "¡Login exitoso! Bienvenido, $usuario.";
    echo"<br><br>";
    echo "<button onclick=\"location.href='index.php'\">Regresar</button>";
    
} else 
{
    echo "Usuario o contraseña incorrectos.";
    echo"<br><br>";
    echo "<a href='index.php'>Volver a intentar</a>";
}
?>