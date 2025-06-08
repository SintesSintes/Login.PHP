<?php
include("conexion.php");

// Login
if ($_GET['Pagina'] == '1' ){
    // traigo con el get el contenido del input de la pagina index.php
        $IngresoUsuario = $_GET['Usuario'];
        $IngresoClave   = $_GET['Clave'];
        
    $consulta_sql = "select usuario,password from usuarios where usuario = '$IngresoUsuario' and password = '$IngresoClave'";

       
} // Registrar
if ($_GET['Pagina'] == '2' ){
    // traigo con el get el contenido del input de la pagina registrar.php
    $IngresoUsuarioNuevo = $_GET['Usuario_Nuevo'];
    $IngresoClaveNuevo   = $_GET['Clave_Nueva'];

    $consulta_sql = "select usuario,password from usuarios where usuario = '$IngresoUsuarioNuevo' and password = '$IngresoClaveNuevo'";
}
// Altas Usuarios
if ($_GET['Pagina'] == '3' ){
    // traigo con el get el contenido del input de la pagina registrar.php
    $IngresoUsuarioNuevo = $_GET['Usuario_Nuevo'];
    $IngresoClaveNuevo   = $_GET['Clave_Nueva'];

    $consulta_sql = "select usuario,password from usuarios where usuario = '$IngresoUsuarioNuevo' and password = '$IngresoClaveNuevo'";
}

$resultado = mysqli_query($link, $consulta_sql);

// registrar
if ($_GET['Pagina'] == '2' ){

                // Login 
        if ($resultado && mysqli_num_rows($resultado) > 0  ){
                    header("location: principal.php");
        }else{
                    header("location: index.php");
        }

}else{
                // registrar 
       if ($resultado && mysqli_num_rows($resultado) == 0  ){
                header("location: principal.php");
        }else{
                header("location: index.php");
        }

}


// Altas de usuario 

if ($_GET['Pagina'] == '3' ){

    
if ($resultado && mysqli_num_rows($resultado) == 0  ){
   // $grabar_sql = 
        Echo "grabar";

}else{
        header("location: index.php");
}

}


?>