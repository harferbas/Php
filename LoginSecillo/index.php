<?php 
include_once "./inc/session_start.php"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Sencillo</title>
</head>
<body>
    <h1> Login en PHP</h1>
    <form action="login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <br>
    
</body>
</html>