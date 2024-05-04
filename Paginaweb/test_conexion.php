<?php
// Datos de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "prueba";

// Conexión a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);

// Verifica la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recibe los datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$tipo_ayuda = isset($_POST['tipo_ayuda']) ? $_POST['tipo_ayuda'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

// Prepara la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO donacion (nombre, correo, tipo_ayuda, mensaje) VALUES ('$nombre', '$correo', '$tipo_ayuda', '$mensaje')";

// Ejecuta la consulta
if (mysqli_query($conexion, $sql)) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . mysqli_error($conexion);
}

// Cierra la conexión
mysqli_close($conexion);
?>






