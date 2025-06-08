<html>
    <header>
        <Title>Sistema de Login</Title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </Header>

    <body>

    <div class="container">
        <div class="seccion">
           
        </div>
        <div class="seccion titulo">
    <h1>Bienvenido a mi sitio web</h1>
        </div>

        <div class="seccion destacado">
            <h2>Login</h2>
                <form action="autenticar.php" method = "GET" id= "FormPrincipal">
                    <input type= "hidden" name= "Pagina" value= "1">
                   
                    <input type="text" name="Usuario" placeholder="Ingrese el usuario" required>
                    <br>
                   
                    <input type="password" name="Clave" placeholder="Ingrese su clave" required>
                    <br>
                    <input type="submit" href="altasusuarios.php">
                </form>
                <a href="registrar.php">Registrar</a>
        </div>
        
        <div class="seccion_pie">
           <p>@Sistemas RetamozoSebastian, IgnacioNacho, PabloSintes  </p>
        </div>
    </div>
       <!-- EN HTML UTILIZAMOS LA ETIQUETA FORM CON EL METODO GET --> 
      
        <?php  /*Palabras reservadas 
        $_GET
        $_POST  */
        ?>
   
    </body>
</html>
