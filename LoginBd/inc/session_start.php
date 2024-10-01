<?php
session_name("I");
session_start();

// Conectar a la base de datos
$host = "localhost"; 
$dbname = "registro_usuarios"; // Nombre de la base de datos
$username_db = "root"; // Usuario de la base de datos 
$password_db = ""; // Contraseña del usuario de la base de datos 

// Crear la conexión
$conn = new mysqli($host, $username_db, $password_db, $dbname);
