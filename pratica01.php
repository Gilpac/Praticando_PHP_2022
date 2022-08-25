<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de condição</title>
</head>
<body>
    <!--Estrutura de condição-->
    <?php $estado = "sim";?>
       <?php if ($estado == "sim") { ?>
           <h1> Sim, Eu Aceito! </h1>
              <?php } else { ?>
                  <h1> Não aceito! </h1>
                      <?php }?>
</body>
</html>