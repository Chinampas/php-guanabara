<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP GUANABARA</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"] :0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n);
        }
        echo "O resultado da operação solicitada foi <b>$r</b> "
    ?>
    <a href="07formulario.html"> Voltar</a>
</div>
</body>
</html>