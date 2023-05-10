<?php
session_start();

//Evaluo que la sesion continue verificando una de las variables creadas en control.php, cuando no coincida con el valor inicial, me redirige a salir.php

if ($_SESSION["autentificado"] != true) {
    header("Location: salir.php");
}
?>