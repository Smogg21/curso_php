<?php
    if(isset($_GET["enviar_btn"])){
        echo "Tu nombre es: ".$_GET["nombre_txt"]."<br>";
        echo "Tu password es: ".$_GET["password_txt"]."<br>";
    }
    if(isset($_POST["enviar_btn"])){
        echo "Tu nombre es: ".$_POST["nombre_txt"]."<br>";
        echo "Tu password es: ".$_POST["password_txt"]."<br>";
    }

?>
