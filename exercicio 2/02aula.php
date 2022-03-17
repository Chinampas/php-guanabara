<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP GUANABARA</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"]) ?$_GET["nome"]:"[não informado]";
        $ano  = isset($_GET["ano"])? $_GET["ano"]:0;
        $sexo = isset($_GET["sexo"]) ?$_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome tem $idade anos e é um $sexo";
    ?>
    <a href="02formulario.html">Voltar</a>
</div>
</body>
</html>