<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>

    <?php 
    /*Desenvolver uma aplicação toda ela bonita que 
      permita saber o número de caracteres ou 
      número de palavras existentes numa frase, inverter a frase ou a palavra.*/?>
    <?php 
        $caractere="Gilson Sebastiao";
        $palavra= "Contando o numero de palavras numa frase";
        $inverter="Gilson";
        $troca= "Arroz";

        echo "<h2> A palavra/frase $caractere tem ".strlen($caractere)." caractere(s).</h2>";
        echo "<h2> A frase '$palavra' tem " .str_word_count($palavra)." palavras</h2> ";
        echo "<h2> A frase ou palavra invertida de '$inverter' é " .strrev($inverter).".</h2> ";
        //A função strpos encontra a posição de uma palavra dentro de uma frase
        echo strpos ("Tudo posso naquele que fortalece", "T"). "<br>";

        echo str_replace ( "Arroz", "Massa", $troca);
    ?>
</body>
</html>