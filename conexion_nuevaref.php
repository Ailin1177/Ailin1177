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
$nom_r = $_POST['nom_r'];
$raz_soc = $_POST['raz_soc'];
$num_id = $_POST['num_id'];
$dir_comp = $_POST['dir_comp'];
$tel_cont = $_POST['tel_cont'];
$cpd = $_POST['cpd'];
$pdp = $_POST['pdp'];
$fmp = $_POST['fmp'];
$c_procesamiento = $_POST['c_procesamiento'];
$c_almacenamiento = $_POST['c_almacenamiento'];
$licencia = $_POST['licencia'];
$fecha_v = $_POST['fecha_v'];
$res_leg = $_POST['res_leg'];
$reg_ambiental = $_POST['reg_ambiental'];
$num_tratamiento = $_POST['num_tratamiento'];

// Insertar datos en la base de datos
$sql = "INSERT INTO nueva_ref (nom_r, raz_soc, num_id, dir_comp, tel_cont, cpd, pdp, fmp, c_procesamiento, c_almacenamiento, licencia, fecha_v, res_leg, reg_ambiental,num_tratamiento)
VALUES ('$nom_r', '$raz_soc', '$num_id', '$dir_comp', '$tel_cont', '$cpd', '$pdp', '$fmp', '$c_procesamiento', '$c_almacenamiento', '$licencia', '$fecha_v', '$res_leg', '$reg_ambiental', '$num_tratamiento')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página después de insertar
    header("Location: uno.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>