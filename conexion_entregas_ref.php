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
$nentrega = $_POST['nentrega'];
$idrefineria = $_POST['idrefineria'];
$nom_t_s = $_POST['nom_t_s'];
$imo = $_POST['imo'];
$m_oleoducto = $_POST['m_oleoducto'];
$vol_lit = $_POST['vol_lit'];
$api = $_POST['api'];
$pcarga = $_POST['pcarga'];
$i_lectura = $_POST['i_lectura'];
$f_lectura = $_POST['f_lectura'];
$sello = $_POST['sello'];
$nr = $_POST['nr'];
$nrc = $_POST['nrc'];
$observaciones = $_POST['observaciones'];

// Insertar datos en la base de datos
$sql = "INSERT INTO entregas_ref (nentrega, idrefineria, nom_t_s, imo, m_oleoducto, vol_lit, api, pcarga, i_lectura, f_lectura, sello, nr, nrc, observaciones)
VALUES ('$nentrega', '$idrefineria', '$nom_t_s', '$imo', '$m_oleoducto', '$vol_lit', '$api', '$pcarga', '$i_lectura', '$f_lectura', '$sello', '$nr', '$nrc', '$observaciones')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página después de insertar
    header("Location: uno.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>