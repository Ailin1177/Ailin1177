<?php
// Definir la contraseña correcta
$contraseña_correcta = "12345"; // Cambia esta contraseña según tu necesidad

// Obtener las contraseñas ingresadas
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // Verificar si ambas contraseñas coinciden y si son correctas
    if ($password1 === $contraseña_correcta && $password2 === $contraseña_correcta) {
        // Redirigir a uno.html si ambas contraseñas son correctas
        header("Location: uno.html");
        exit();
    } else {
        // Mostrar alerta si las contraseñas no coinciden o son incorrectas
        echo "<script>alert('Contraseñas incorrectas'); window.location.href = 'index.html';</script>";
    }
} else {
    // Redirigir al formulario si se intenta acceder directamente
    header("Location: index.html");
    exit();
}
