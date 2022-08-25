<?php
    $nome1= strtolower ("CAC");
    $nome2= strrev($nome1);
    
    function capicua(){
        global $nome1, $nome2;

        if($nome1==$nome2){
                echo "<h2> $nome1 é capicua ou palíndromo. E sua inversão é =$nome2=.</h2>";
        }else{
            echo "<h2>$nome1 não é palíndromo. E sua inversão é =$nome2=.</h2>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        capicua();
    
    ?>
</body>
</html>