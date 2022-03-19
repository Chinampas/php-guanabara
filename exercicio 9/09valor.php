<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP GUANABARA</title>
</head>
<body>
<div>
    <?php
        $d = isset($_GET["n"])?$_GET["n"]:0;
        switch ($d){
        case 1:
            $nu= "escolheu impar";
            break;
        case 2:
            $nu= "escolheu par";
        }
        echo "Voce $nu"
    ?>
   </br> <a href="09formulario.html"> Voltar</a>
</div>
</body>
</html>