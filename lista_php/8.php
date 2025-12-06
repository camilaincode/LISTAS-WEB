<?php
    function retorno(){
        if(isset($_POST["string"])){
            $tamanho = strlen($_POST["string"]);
            $invertida = strrev(strtolower($_POST["string"]));
            $vogais = preg_match_all('/[aeiouáéíóúàãõâêîôû]/iu', $_POST["string"]);
            $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/iu', $_POST["string"]);
            
            echo "<p>tamanho: " . $tamanho . "</p><br>";
            if($invertida === strtolower($_POST["string"])){
                $invertida = "sim";
            }else{
                $invertida = "não";
            }
            echo "<p>é um palíndromo? " . $invertida . "</p><br>";
            echo "<p>tem " . $vogais . " vogais </p><br>";
            echo "<p>tem " . $consoantes . " consoantes </p><br>";
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
    <title>EXERCICIO 8</title>
</head>
<body>
    <form action="" method="POST">
        <label for="texto">escreva aqui:</label>
        <input type="text" name="string">
        <input type="submit" value="descobrir">
    </form>
    <?php retorno(); ?>
</body>
</html>