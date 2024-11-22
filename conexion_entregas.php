<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemex";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$npedido = $_POST['npedido'];
$idgasolinera = $_POST['idgasolinera'];
$res_recepcion = $_POST['res_recepcion'];
$litrosg = $_POST['litrosg'];
$tipo_com = $_POST['tipo_com'];
$transporte = $_POST['transporte'];
$litrop = $_POST['litrop'];

// Insertar datos en la base de datos
$sql = "INSERT INTO entregas (npedido, idgasolinera, res_recepcion, litrosg, tipo_com, transporte, litrop)
VALUES ('$npedido', '$idgasolinera', '$res_recepcion', '$litrosg', '$tipo_com', '$transporte', '$litrop')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página después de insertar
    header("Location: uno.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>