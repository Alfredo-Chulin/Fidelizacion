<?php

// Conectar a la base de datos (reemplazar con tus propios detalles de conexión)
$servername = "localhost";
$username = "chulin";
$password = "chulin123";
$dbname = "fidelizacion";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$telefono = $_POST['telefono'];
$password = $_POST['password']; // Hash de la contraseña
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];




// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (telefono, password, nombres, apellidos, direccion, correo, estado, ciudad) VALUES ('$telefono', '$password', '$nombres', '$apellidos', '$direccion', '$correo', '$estado', '$ciudad')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. <a href='index.html'>Volver al formulario de registro</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
