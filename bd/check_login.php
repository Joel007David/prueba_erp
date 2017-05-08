<?php
include_once(bd/conexion.php);


$conexion = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT Usuario,Contrasenia FROM Persona WHERE Usuario = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    header('Location: ../panel.php');

 } else { 
   	$_SESSION['error'] = true;
   	header('Location: ../index.php');
 }
 mysqli_close($conexion); 
 ?>