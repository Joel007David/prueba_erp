<?php
function cerrar_sesion() { 
    $_SESSION['usuario_web'] = NULL;
    $_SESSION[''] = NULL;
    header("location:index.php");
}




















?>
