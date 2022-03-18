<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP GUANABARA</title>
</head>
<body>
<div>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "voce nasceu em $a e tem $i anos de idade";
        if ($i > 18 ) {
            $v = "ja pode votar";
            $d = "ja pode dirigir";
        }
        else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo " com essa idade voce $v e tambem $d"
    ?>
    <a href="html4.html">Voltar</a>
</div>
</body>
</html>
