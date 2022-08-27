<?php
    $numeros=[2,90,3,-20, 10.2];

    $valor= 81.42;
    $tipo_de_dado_alterado= (string) $valor;
    $b= var_dump ($tipo_de_dado_alterado);
    $a= var_dump(is_int($valor));
    $c= var_dump(is_numeric($valor));
    //A função absolute ou abs() tem a função de transformar um nº negativo em positivo 
    //A Função rand gera números aleatórios
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de números</title>
</head>
<body>
    <?php
      echo "<h2>".pi()."</h2>";
      echo var_dump($numeros);
      echo "<h2>  O maior número dessa lista é o nº ".max($numeros)."</h2>";
      echo "<h2>  O menor número dessa lista é o nº ".min($numeros)."</h2>";
      echo "<h2>  A raiz quadrada de $valor é : ".sqrt($valor)."</h2>";
      echo "<h2>  Arredondando o nº $valor, ficaria ". round($valor)."</h2>";
      echo "<h2>".rand(1,9)."</h2>";
      
    ?>
</body>
</html>