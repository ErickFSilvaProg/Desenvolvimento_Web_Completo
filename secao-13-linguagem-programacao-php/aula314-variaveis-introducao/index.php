<?php
    $variavel1 = "&#36;nome";
    $variavel2 = "&#36;fone1";
    $variavel3 = "&#36;endereco_2";
    $variavel4 = "&#36; idade";
    $variavel5 = "&#36;1fone";
    $variavel6 = "&#36;número";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Introdução à variáveis</title>
    <link rel="shortcut icon" href="../../imagens/icons8-php-48.ico" type="image/x-icon">
</head>
<body>

<h1>Introdução à Variáveis.</h1>

<h2>Tipos de variáveis em PHP:</h2>
<ul>
    <li>string, int, float, boolean, array.</li>
</ul>

<h2>Regras para declaração de variáveis em PHP:</h2>
<ul>
    <li>Devem obrigatóriamente iniciar com o caracter "$".</li>
    <li>Não pode conter espaços ou caracteres especiais, com exceção do underline (_).</li>
</ul>

<h2>Não requer a definição explicita de tipo.</h2>

<h2>Case sensitive:</h2>
<ul>
    <li>$nome</li>
    <li>$Nome</li>
    <li>$NOME</li>
</ul>

<h2>Exemplo de variáveis válidas x inválidas:</h2>
<dl>
    <dt>Variáveis válidas:</dt>
        <dd><?= $variavel1 ?></dd>
        <dd><?= $variavel2 ?></dd>
        <dd><?= $variavel3 ?></dd>

    <dt>Variáveis inválidas:</dt>
        <dd><?= $variavel4 ?></dd>
        <dd><?= $variavel5 ?></dd>
        <dd><?= $variavel6 ?></dd>
</dl>
    
</body>
</html>