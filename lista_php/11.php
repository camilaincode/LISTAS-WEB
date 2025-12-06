<?php
function triangulo(){
    if (isset($_POST["lado1"]) && isset($_POST["lado2"]) && isset($_POST["lado3"])) {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
    $lado3 = $_POST["lado3"];
        if (($lado1 < $lado2 + $lado3) && ($lado2 < $lado1 + $lado3) && ($lado3 < $lado1 + $lado2)){
            echo "<h3>os lados são capazes de formar um triangulo!.</h3>";
                if($lado1 == $lado2 && $lado2 == $lado3){
                    echo "<p>um triangulo equilatereo</p>";
                } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
                    echo "<p>um triangulo isosceles</p>";
                } else {
                    echo "<p>um triangulo escaleno</p>";
                }
        } else {echo "<h3>Os lados não formam um triângulo.</h3>";}
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
    <title>EXERCICIO 11</title>
</head>
<body>
    <form action="" method="POST">
        <label for="lado1">Lado 1: </label><br>
        <input type="number" name="lado1" step="0.01"><br>
        <label for="lado2">Lado 2: </label><br>
        <input type="number" name="lado2" step="0.01"><br>
        <label for="lado3">Lado 3: </label><br>
        <input type="number" name="lado3" step="0.01"><br></br>
        <input type="submit" value="Verificar Triângulo">
        <?php triangulo(); ?>
    </form>
</body>
</html>