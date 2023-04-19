<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>

<h1>Resultado</h1>
    
<?php 
$nome = $_GET["nome"];
$numero1 = $_GET["valor1"];
$numero2 = $_GET["valor2"];
$numero3 = $_GET["valor3"];


echo "Olá $nome, suas notas foram $numero1,$numero2,$numero3. <br>";

$resultado = ($numero1+$numero2+$numero3)/3;

echo "Sua média é $resultado";

?>
</body>
</html>