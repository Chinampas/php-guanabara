<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP GUANABARA</title>
</head>
<body>
<div>
    <?php
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "voce nasceu em $a e tem $i anos de idade,";
    if ($i < 16) {
        $tipoVoto = "voto é pribido";
    } else if (($i >= 16 && $i < 18) || ($i > 65)) {
        $tipoVoto = "voto é opcional";
    } else {
        $tipoVoto = "voto é obrigatorio";
    }
    echo " para essa idadae, o $tipoVoto";
    ?>
    <a href="html5.html">Voltar</a>
</div>
</body>
</html>
