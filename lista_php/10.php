<?php
    function intervalo() {

        if (isset($_POST["num1"]) && $_POST["num2"]){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            for ($i = $num1; $i <= $num2; $i++){
                echo '<p>' . $i . '</p><br>';
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
    <title>EXERCICIO 10</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Número 1: </label><br>
        <input type="number" name="num1"><br>
        <label for="num2">Número 2: </label><br>    
        <input type="number" name="num2"><br><br>
        <input type="submit" value="Exibir Intervalo"><br><br>
        <?php intervalo(); ?>
    </form>
</body>
</html>