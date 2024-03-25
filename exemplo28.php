<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
        echo "OPERADOR RELACIONAL INDÊNTICO (===)<br><br>";
        $x=10;
        $y='10';
        /*(==) os valores contidos nas variaveis são comparadas sem levar
        em conta o seu tipo.
        (===)os valores contidos nas variaveis são comparados levando em conta
        o seu tipo, ou seja, são identicos se tiverem
        tanto os valores quanto o tipo iguais.*/

        if($x == $y){
              echo "As variáveis são iguais<br><br>";
        }
        if($x === $y){
             echo "As variáveis são idênticas<br><br>";
        }
    ?>
    </div>
</body>
</html>