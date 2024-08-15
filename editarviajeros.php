<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);

    // Obtener los datos del viajero
    $query = "SELECT * FROM viajeros WHERE id = '$id'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Registro no encontrado.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $edad = $conn->real_escape_string($_POST['edad']);
    $direccion = $conn->real_escape_string($_POST['direccion']);
    $tel = $conn->real_escape_string($_POST['telefono']);
    $identificacion = $conn->real_escape_string($_POST['identificacion']);

    // Actualizar el registro
    $sql = "UPDATE viajeros SET nombre='$nombre', apellido='$apellido', edad='$edad', direccion='$direccion', tel='$tel', identificacion='$identificacion' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: registrodeviajeros.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Viajero</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Viajero</h1>
        <form action="editarviajeros.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($row['apellido']); ?>" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" value="<?php echo htmlspecialchars($row['edad']); ?>" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo htmlspecialchars($row['direccion']); ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($row['tel']); ?>" required>
            </div>
            <div class="form-group">
                <label for="identificacion">Identificación:</label>
                <input type="text" class="form-control" id="identificacion" name="identificacion" value="<?php echo htmlspecialchars($row['identificacion']); ?>" required>
            </div>
            <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
            <a href="registrodeviajeros.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
