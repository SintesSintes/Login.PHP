<!DOCTYPE html>
<html lang="es">
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar login</title>
    <link href="styles.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="seccion titulo">
    <h1>Bienvenido al nuevo Registro de Usuario</h1>
        </div>
        
                <div class="seccion destacado">
                    <h2>Registro de Usuario</h2>
<br>


                        <form action="altasusuarios.php" method = "GET" id= "FormPrincipal">
                        <input type= "hidden" name= "Pagina" value= "2">
                       
                            <input type="text" name="Usuario_Nuevo" placeholder="Ingrese el usuario" required>
                            <br>
                          
                            <input type="password" name="Clave_Nueva" placeholder="Ingrese su clave" required>
                            <br>
                            <input type="submit">
                        </form>

                </div>

                <a href="index.php">Cerrar seccion</a>
</body>
</html>