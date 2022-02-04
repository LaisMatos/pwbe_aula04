<?php

$valor=(int)0;
$contador =(int)0;
$resultado=(string)null;


if (isset($_POST['btnCal'])) {
    
    $valor =$_POST['txtNumero'];

    //Exemplo usando While
   /* while ($contador <= $valor) {
        echo ($contador.'<br>');    
        $contador+=1;
    }*/


    //Exemplo usando For
    for ($contador=0; $contador<=$valor; $contador++) { 
        echo($contador.'<br>');
        
       

    }
}


 
/*
   //formas de incrementar contador 
--> $contador = $contador+1;
--> $contador++;
--> $contador+=1; --> operador reduzido

    //acumulador de dado
--> $resultado=$resultado.$contador; 
--> $resultado.=$contador;

Evento de cast


*/



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula04-Estrutura de repetição</title>
</head>
<body>
    <form name="formRepeticao" method="post" action="index.php">
        Digite um número: 
        <input type="texto" name="txtNumero">  
        <input type="submit" name="btnCal" value="Calcular">




    </form>
</body>
</html>