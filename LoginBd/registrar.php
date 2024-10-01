<?php
include_once "./inc/session_start.php";
// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO usuarios (username, password) VALUES (?,?)";
    // Preparar y enlazar
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro exitoso.<br>";
        echo "<button onclick=\"location.href='index.php'\">Regresar</button>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}
?>
