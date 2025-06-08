<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Usuario</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header, main, footer {
      padding: 16px;
      transition: padding 0.3s ease;
    }

    header {
      background-color: #1976d2;
      color: white;
    }

    main {
      background-color: #e3f2fd;
      min-height: 300px;
    }

    footer {
      background-color: #0d47a1;
      color: white;
      text-align: center;
    }

    @media (min-width: 600px) {
      header, main, footer {
        padding: 32px;
      }
    }

    @media (min-width: 900px) {
      header, main, footer {
        padding: 48px;
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="usuarios.php">Usuarios</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contactenos</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php">Cerrar</a></li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <h1>Agregar Nuevo Usuario</h1>
</header>

<main>
  <div class="container mt-4">
    <form method="POST" action="insertar.php" class="bg-white p-4 rounded shadow-sm">
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario:</label>
        <input type="text" class="form-control" name="usuario" id="usuario" required>
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Clave:</label>
        <input type="text" class="form-control" name="clave" id="clave" required>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
    </form>
  </div>
</main>

<footer class="mt-5">
  <p>© 2025 - Todos los derechos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
