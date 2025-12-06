<?php
function isPar(){
    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        if ($numero % 2 == 0) {
            echo $numero . "<p>é par.</p>";
            return true;
        } else {
            echo $numero . "<p>é impar.</p>";
            return false;
        }
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
    <title>EXERCICIO 6</title>
</head>
<body>
    <form action="" method="POST">
    <label for="numero">preencha um numero: </label>
    <input type="number" name="numero">
    <input type="submit" value="par ou impar?">
    </form>
    <?php isPar(); ?>
</body>
</html>