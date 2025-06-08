<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Gestión</title>
  <link href="styles.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

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

    .crud-btn {
      background-color: orange;
      color: white;
      border: none;
      padding: 8px 12px;
      margin-bottom: 10px;
      text-decoration: none;
    }

    .table td, .table th {
      vertical-align: middle;
    }

    .icono {
      font-size: 18px;
      margin-right: 8px;
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
        <li class="nav-item"><a class="nav-link active" href="#">Usuarios</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contactenos</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php">Cerrar</a></li>
      </ul>
    </div>
  </div>
</nav>


<header>
  <h1>Usuarios</h1>
</header>


<main>
  <a href="agregar.php" class="crud-btn">+ Agregar Nuevo Usuario</a>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="table-primary">
        <tr>
          <th>#</th>
          <th>ID</th>
          <th>Nombre</th>
          <th>Clave</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM usuarios";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
          while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["usuario"] . "</td>";
            echo "<td>" . $fila["clave"] . "</td>";
            echo "<td>
              <a href='editar.php?id=" . $fila["id"] . "' title='Editar'><span class='icono'>✏️</span></a>
              <a href='eliminar.php?id=" . $fila["id"] . "' onclick='return confirm(\"¿Seguro que deseas eliminar este usuario?\")' title='Eliminar'><span class='icono'>🗑️</span></a>
            </td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='4'>No hay usuarios registrados.</td></tr>";
        }

        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</main>


<footer>
  <p>© 2025 - Todos los derechos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

