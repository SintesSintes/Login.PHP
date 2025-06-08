<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Alta Usuario</title>
  <link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body>
  <nav>
    <div class="active">HOME</div>
    
    <ul>
  
      <li><a href="usuarios.php">Usuarios</a></li>
      <li><a href="#">Productos</a></li>
      <li><a href="#">Contáctanos</a></li>
      <li><a href="#">Cerrar</a></li>
    </ul>
  </nav>

  <div class="hero">
    <div class="login-box">
     
      <h2>Sistema de Gestion</h2>
      <form>
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" placeholder="Usuario" />
        <label for="clave">Contraseña</label>
        <input type="password" id="clave" placeholder="Contraseña" />
        <a href="#">Olvidé mi contraseña</a>
        <button type="submit" href="usuario.php">INICIAR SESIÓN</button>
      </form>
    </div>

    <div class="hero-image">
       <?php
   // $usuario = $_GET['Usuario'];
     ?> 
      <img src="imagenes/Imagen_Crud.jpg" alt="Jacob Aiden" />
    </div>
  </div>
</body>
</html>

