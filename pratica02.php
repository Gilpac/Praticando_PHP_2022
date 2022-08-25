<?php
    $nota1=17;
    $nota2=13;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
       
    <?php 
       // Cáculo da média usando uma função
        function media (){
            global $nota1, $nota2, $resultado, $aluno;
            $aluno = "Gilson Sebastião";
            
            $resultado= ($nota1 + $nota2)/2;
            echo "<h2>A Média do aluno $aluno é de: $resultado </h2>";
            
        }    
        media();
    ?>

    
</body>
</html>