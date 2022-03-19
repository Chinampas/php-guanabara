<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP GUANABARA</title>
</head>
<body>
<div>
    <?php
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Dia de aula";
                break;
            case 7:
            case 8:
                echo "Dia de lol";
                break;
            default:
                echo "Insira um dia da semana valido";

        }
    ?>
   <br/> <a href="javascript:history.go(-1)"> Voltar</a>
</div>
</body>
</html>