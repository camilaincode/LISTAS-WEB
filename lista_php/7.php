<?php
function tabuada(){
    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];
        echo "<h3>tabuada de ".$numero.":</h3>";
            for($i = 1; $i <= 10; $i++){
                $resultado = $numero * $i;
                echo "<p>".$numero . " x " . $i . " = " . $resultado . "</p><br>";
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
    <title>EXERCICIO 7</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero">preencha com um numero: </label>
        <input type="numerober" name="numero">
        <input type="submit" value="Tabuada">
    </form>
    <?php tabuada(); ?>
</body>
</html>