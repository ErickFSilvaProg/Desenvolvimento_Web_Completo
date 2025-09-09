<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Concatenação</title>
    <link rel="shortcut icon" href="../../imagens/icons8-php-48.ico" type="image/x-icon">
</head>

<body>

    <?php

    // Operador de concatenação do PHP: . (ponto).
    
    $nome = "Erick";
    $cor = "azul";
    $idade = 38;
    $atividade_preferida = "programação PHP";

    // Utilizando as aspas simples o operador de concatenação precisa ser utilizado:
    echo 'Olá $nome! Vi que sua cor preferida é '.$cor.', estou vendo também que você possui '.$idade.' anos e gosta de '.$atividade_preferida.'.';
    echo "<br>";

    // Utilizando as aspas duplas o operador de concatenação fica desnecessário:
    echo "Olá $nome! Vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e gosta de $atividade_preferida.";

    ?>

</body>

</html>