<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]: "não informado";
        $tam = isset($_GET["tam"])?$_GET["tam"]: "12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <title>Curso PHP GUANABARA</title>
    <style>
        span.texto {
            font-size: <?php echo $tam;
            ?>;
            color: <?php echo $cor;
            ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class= 'texto'> $txt </span";

    ?>
    
</div>
</body>
</html>