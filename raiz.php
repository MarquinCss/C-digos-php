<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
</head>
<body>

<h1>Resultado</h1>
    
<?php 
$nome = $_GET["nome"];
$numero = $_GET["valor"];

echo "Olá $nome, o valor digitado foi o $numero. <br>";

$raizq = sqrt($numero);

echo "A raiz quadrada de $numero é igual a $raizq";

?>
</body>
</html>