<?php

    $texto= '{

        "Nome": "Gilson Sebastião",
        "Idade": "20 anos de idade",
        "Altura": "1.70 m",
        "Estado Civil": "Casado"
    }';
echo "<pre>$texto</pre>";

$dados=json_decode($texto,true);
//var_dump($dados);
echo "$dados";
echo "<b>Nome:</b> ".$dados["Nome"]."<br>";
echo "<b>Idade:</b> ".$dados["Idade"]."<br>";
echo "<b>Altura:</b> ".$dados["Altura"]."<br>";
echo "<b>Estado:</b> ".$dados["Estado Civil"];

$dado=json_encode($dados, JSON_PRETTY_PRINT);

echo "<pre>$dado</pre>";


?>