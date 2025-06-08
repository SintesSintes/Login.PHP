<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del agregar.php
    $usuario = trim($_POST["usuario"]);
    $clave = trim($_POST["clave"]);

    // Validar que los campos no estén vacíos con empty
    if (!empty($usuario) && !empty($clave)) {
        // Preparar consulta segura
        $stmt = $conn->prepare("INSERT INTO usuarios (usuario, clave) VALUES (?, ?)");
        $stmt->bind_param("ss", $usuario, $clave);

        if ($stmt->execute()) {
            // Redirigir a la lista de usuarios si se guarda bien
            header("Location: usuarios.php");
            exit();
        } else {
            echo "Error al insertar: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Por favor, completá todos los campos.";
    }

    $conn->close();
} else {
    echo "Acceso no válido.";
}
?>

