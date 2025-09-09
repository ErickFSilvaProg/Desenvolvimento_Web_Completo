<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variáveis Constantes</title>
    <link rel="shortcut icon" href="../../imagens/icons8-php-48.ico" type="image/x-icon">
</head>

<body>

    <?php

        // Constantes em PHP: define("NOME_DA_VARIAVEL", valor);
        define("BD_URL", "endereco_bd_dev");
        define("BD_USUARIO", "usuario_dev");
        define("BD_SENHA", "senha_dev");

        // ... lógica ...

        // Redeclarar a constante geraria o erro: Constant BD_URL already defined
        // define("BD_URL", "endereco_bd_prod");

        echo BD_URL . "<br>";
        echo BD_USUARIO . "<br>";
        echo BD_URL;

    ?>

</body>

</html>