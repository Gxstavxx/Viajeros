<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de Viajes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      margin-bottom: 20px;
    }
    .container {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .btn-custom {
      background-color: #007bff;
      color: #fff;
    }
    .btn-custom:hover {
      background-color: #0056b3;
    }
    .footer {
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Registro de Viajes</a>
  </nav>

  <!-- Main content -->
  <div class="container mt-4">
    <h2 class="mb-4">Registro de Viajes</h2>
    <form action="intregiviajes.php" method="post">
      <div class="form-group">
        <label for="viajero_id">ID del Viajero:</label>
        <input type="number" class="form-control" id="viajero_id" name="viajero_id" placeholder="Ingrese el ID del viajero" required>
      </div>
      <div class="form-group">
        <label for="destino">Destino:</label>
        <input type="text" class="form-control" id="destino" name="destino" placeholder="Ingrese el destino del viaje" required>
      </div>
      <div class="form-group">
        <label for="fecha">Fecha del Viaje:</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
      </div>
      <div class="form-group">
        <label for="duracion">Duración:</label>
        <input type="text" class="form-control" id="duracion" name="duracion" placeholder="Ingrese la duración del viaje" required>
      </div>
      <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del viaje" step="0.01" required>
      </div>
      <button type="submit" name="registrar" class="btn btn-custom">Registrar</button>
      <a href="registrodeviajes.php" class="btn btn-custom">Ver Registros</a>
    </form>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 Registro de Viajes. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap 4 -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
