<?php
function sortear(){
    if (isset($_POST["inicioNumero"], $_POST["fimNumero"])) {
        $min = $_POST["inicioNumero"];
        $max = $_POST["fimNumero"];
    if (is_numeric($min) && is_numeric($max)) {
        $sorteado = rand($min, $max);
        echo "<p>numero sorteado:".$sorteado."</p>";
        } else {
        echo "<p>por favor preencher apenas com numeros!</p>";}
    }
} 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/imagens/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>EXERCICIO 5</title>
</head>
<body>
    <form action="" method="POST">
    <label for="inicioNumero">inicio:</label>
    <input type="number" name="inicioNumero">
    <label for="fimNumero">fim:</label>
    <input type="number" name="fimNumero">
    <input type="submit" value="sortear">
    </form>
    <?php sortear(); ?>
</body>
</html>