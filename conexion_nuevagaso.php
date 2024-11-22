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
$ngasolinera = $_POST['ngasolinera'];
$num_is = $_POST['num_is'];
$direccion_comp = $_POST['direccion_comp'];
$tel_cont = $_POST['tel_cont'];
$tipo_c = $_POST['tipo_c'];
$cap_almacenamiento = $_POST['cap_almacenamiento'];
$num_l_p = $_POST['num_l_p'];
$f_vencimiento = $_POST['f_vencimiento'];
$nom_adm = $_POST['nom_adm'];


// Insertar datos en la base de datos
$sql = "INSERT INTO nueva_gas (ngasolinera, num_is, direccion_comp, tel_cont, tipo_c, cap_almacenamiento, num_l_p, f_vencimiento, nom_adm)
VALUES ('$ngasolinera', '$num_is', '$direccion_comp', '$tel_cont', '$tipo_c', '$cap_almacenamiento', '$num_l_p', '$f_vencimiento', '$nom_adm')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página después de insertar
    header("Location: uno.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>