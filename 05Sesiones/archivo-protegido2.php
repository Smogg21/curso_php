<?php 
include("sesión.php"); 
?>

Bienvenido:
<?php  
echo $_SESSION["usuario"];
 ?>
<br><br>
Estás en otra página segura con sesiones en PHP	
<br><br>
<a href="archivo-protegido.php">Ir a la primera página segura</a>
<br><br>
<a href="salir.php">Cerrar Sesión</a>
