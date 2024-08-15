<?php
include 'conexion.php';

// Consultar la tabla viajeros para obtener todos los registros
$query = "SELECT * FROM viajeros";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Viajeros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Registro de Viajeros</h1>
        <a href="regiviajeros.php" class="btn btn-primary mb-4">Agregar Viajero</a>
        <a href="regiviajes.php" class="btn btn-primary mb-4">Agregar Viajes a los Viajeros</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Identificación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['apellido']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['edad']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['direccion']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tel']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['identificacion']) . "</td>";
                        echo "<td>";
                        echo "<a href='editarviajeros.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Editar</a> ";
                        echo "<a href='eliminarviajeros.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\");'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No hay registros encontrados</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
