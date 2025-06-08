
<?php
   // $usuario = $_GET['Usuario'];
     ?>  
  <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Principal</title>
  <link href="style3.css" rel="stylesheet" type="text/css">
  </head>
<body>
  <nav>
    <div class="logo">HOME</div>
    <ul>
     
      <li><a href="registrar.php">Usuarios</a></li>
      <li><a href="#">Productos</a></li>
      <li><a href="#">Contáctanos</a></li>
      <li><a href="#">Cerrar</a></li>
    </ul>
  </nav>

  <h2 class="titulo-animado">Bienvenido al nuevo registro de usuario</h2>

  <div class="hero">
    <div class="carousel-container">
      <div class="carousel-slide" id="carousel-slide">
        <img src="https://picsum.photos/id/1011/1200/600" alt="Imagen 1" />
        <img src="https://picsum.photos/id/1015/1200/600" alt="Imagen 2" />
        <img src="https://picsum.photos/id/1021/1200/600" alt="Imagen 3" />
        <img src="https://picsum.photos/id/1025/1200/600" alt="Imagen 4" />
      </div>
      <div class="carousel-buttons">
        <button onclick="prevSlide()">&#10094;</button>
        <button onclick="nextSlide()">&#10095;</button>
      </div>
    </div>
  </div>

  <script>
    const slide = document.getElementById('carousel-slide');
    const totalSlides = slide.children.length;
    let currentIndex = 0;

    function showSlide(index) {
      slide.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      showSlide(currentIndex);
    }

    setInterval(nextSlide, 4000);
  </script>
 
</body>
</html>
