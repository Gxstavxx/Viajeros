<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de Viajeros</title>

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
    <a class="navbar-brand" href="#"></a>
  </nav>

  <!-- Main content -->
  <div class="container mt-4">
    <h2 class="mb-4">Registro de Viajeros</h2>
    <form action="intregiviajeros.php" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese sus nombres" required>
      </div>
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese sus apellidos" required>
      </div>
      <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" required>
      </div>
      <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su dirección" required>
      </div>
      <div class="form-group">
        <label for="nombreEncargado">Telefono:</label>
        <input type="text" class="form-control" id="nombreEncargado" name="ne" placeholder="Ingrese el nombre del encargado" required>
      </div>
      <div class="form-group">
        <label for="telefonoEncargado">No. de identificacion</label>
        <input type="number" class="form-control" id="telefonoEncargado" name="numero" placeholder="Ingrese el número del encargado" required>
      </div>
      <button type="submit" name="registrar" class="btn btn-custom">Registrar</button>
      <a href="registrodeviajeros.php" class="btn btn-custom">Ver Registros</a>
    </form>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 Registro de Viajeros. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap 4 -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
