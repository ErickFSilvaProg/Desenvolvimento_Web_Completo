<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Alterando valores de variáveis</title>
    <link rel="shortcut icon" href="../../imagens/icons8-php-48.ico" type="image/x-icon">
</head>

<body>

    <?php

        // string:
        $nome = "Erick Ferreira";

        // int:
        $idade = 38;
        $idade = "39";

        // float:
        $peso = 80.5;

        // boolean:
        $fumante_sn = False;
        
        if ($fumante_sn) {
            $fumante_sn = "Sim";
        }
        else {
            $fumante_sn = "Não";
        }

    ?>

    
    <h1>Ficha cadastral</h1>

    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>

</html>