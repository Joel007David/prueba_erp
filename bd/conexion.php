<?php
session_start();


define('DB_HOST', 'localhost');
define('DB_DATABASE', 'prueba');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

/*

if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}





*/










?>