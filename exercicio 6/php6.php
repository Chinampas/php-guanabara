<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP GUANABARA</title>
</head>
<body>
<div>
    <?php
   $n1 = $_GET["nota1"];
   $n2 = $_GET["nota2"];
   $m  = ($n1 + $n2)/2;
   echo "A média da sua nota é $m <br/>" ;
    if ($m < 5){
        $situação= "Reprovado";
    } elseif (($m >= 5) && ($m <= 7)){
        $situação= "Recuperação";
    } else {
        $situação= "Aprovado";
    }
    echo " E a sua situação é $situação!! "
    ?>
    <a href="html6.html">Voltar</a>
</div>
</body>
</html>
