<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Result</title>
</head>
<style></style>
<body>
    <section>
    <div class="resultado">

<?php
$menor = ($_POST["valorMenor"]); 
$maior = ($_POST["valorMaior"]);
$soma = 0;

for ($i = $menor; $i <= $maior; $i++) {
    $soma += $i;
}
echo ("A soma de todos os números dos dois valores é $soma") 
?></div></section>
</body>
</html>