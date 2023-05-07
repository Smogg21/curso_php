<?php
    $nombre="Salvatore";
    $password="Pazzaglia";

    if(isset($_GET["enviar_hdn"]) && $_GET["enviar_hdn"]=="get"){
        if(isset($_GET["nombre_txt"]) && isset($_GET["password_txt"]) && isset($_GET["sexo_rdo"])){
            if($_GET["nombre_txt"]==$nombre && $_GET["password_txt"]==$password){
                echo "<p>Nombre: ".$_GET["nombre_txt"]."</p>";
                echo "<p>Password: ".$_GET["password_txt"]."</p>";
                echo "<p>Sexo: ".$_GET["sexo_rdo"]."</p>";
            }else{
                header("Location: formulario.php?error=si");
                echo "<p>Los datos son incorrectos</p>";
            }
        }
    } elseif (isset($_POST["enviar_hdn"]) && $_POST["enviar_hdn"]=="post") {
        if(isset($_POST["nombre_txt"]) && isset($_POST["password_txt"]) && isset($_POST["sexo_rdo"])){
            if($_POST["nombre_txt"]==$nombre && $_POST["password_txt"]==$password){
                echo "<p>Nombre: ".$_POST["nombre_txt"]."</p>";
                echo "<p>Password: ".$_POST["password_txt"]."</p>";
                echo "<p>Sexo: ".$_POST["sexo_rdo"]."</p>";
            }else{
                header("Location: formulario.php?error=si");
                echo "<p>Los datos son incorrectos</p>";
            }
        }
    }

    
?>