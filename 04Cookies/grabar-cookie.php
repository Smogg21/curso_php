<?php
    
    setcookie("idioma_solicitado", $_GET["idioma"], time()+86400, "/");
    //86400 = 24 horas.
    //Para que la cookie se extienda en todo el directorio del sitio, se tiene que poner "/" en el último parámetro.
    //Si no se especifica, solo estará existiendo para este archivo 
    header("Location: usar-cookie.php")

?>