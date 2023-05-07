<?php
//comentario de una sola linea

/*Este es un comentario 
multilinea*/


//echo es una funcion que nos permite imprimir en pantalla
echo("Hola Mundo");
echo("<br/>Hola cruel mundo <br/> estoy <h1>aprendiendo PHP</h1>");


//variables
$nombre = "Salvatore";

//concatenación de cadenas y variables

echo("Hola ".$nombre."<br/> Cómo estás?");
echo("<br/>");
$num1=5;
$num2=77;

$suma = $num1 + $num2;
echo($suma);

echo("<br/> La variable \$suma tiene el valor de $suma <br/>");

$modulo = $num2 % 2;

if($modulo == 0){
    echo("El número es par");
}else{
    echo("El número es impar");
}

echo("<br/>");

for($i=0;$i<=10;$i++){
    echo("El valor de i es: $i <br/>");
}
?>