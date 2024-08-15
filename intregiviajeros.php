<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrar'])) {
    // Recoger los datos del formulario
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $edad = $conn->real_escape_string($_POST['edad']);
    $direccion = $conn->real_escape_string($_POST['direccion']);
    $tel = $conn->real_escape_string($_POST['ne']); // Cambia 'ne' a 'telefono'
    $identificacion = $conn->real_escape_string($_POST['numero']); // Cambia 'numero' a 'identificacion'

    // Crear la consulta SQL
    $sql = "INSERT INTO viajeros (nombre, apellido, edad, direccion, tel, identificacion) 
            VALUES ('$nombre', '$apellido', '$edad', '$direccion', '$tel', '$identificacion')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Redirigir a registrodeviajeros.php si la inserción fue exitosa
        header("Location: registrodeviajeros.php");
        exit(); // Asegúrate de detener el script después de la redirección
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
