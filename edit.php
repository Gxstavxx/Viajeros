<?php
include "conexion.php";

// Verificar si se envió un formulario POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el ID del usuario a actualizar
    $id = $_GET['id'];

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $encargado = $_POST['ne']; // Aquí obtenemos el nombre del encargado
    $tel_encargado = $_POST['numero'];

    // Preparar la consulta de actualización
    $stmt = $conn->prepare("UPDATE ur SET nombres = ?, apellidos = ?, edad = ?, direccion = ?, encargado = ?, tel_encargado = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $nombre, $apellido, $edad, $direccion, $encargado, $tel_encargado, $id);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir después de la actualización exitosa
        header('Location: listar.php');
        exit(); // Asegurar que el script se detenga después de la redirección
    } else {
        echo "Error al actualizar los datos: " . $stmt->error;
    }

    // Cerrar la consulta preparada
    $stmt->close();
} else {
    echo "Método no permitido.";
}
?>
