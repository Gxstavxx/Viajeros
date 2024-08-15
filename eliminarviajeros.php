<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);

    // Eliminar el registro
    $sql = "DELETE FROM viajeros WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: registrodeviajeros.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
