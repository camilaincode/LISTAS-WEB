<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $IMC = $peso / ($altura * $altura);

    if($IMC < 18.5){
        $classificacao = "Abaixo do peso";
    } elseif ($IMC >= 18.5 && $IMC < 24.9){
        $classificacao = "Peso normal";
    } elseif ($IMC >= 25 && $IMC < 29.9){
        $classificacao = "Sobrepeso";
    } elseif ($IMC >= 30 && $IMC < 34.9){
        $classificacao = "Obesidade grau I";
    } elseif ($IMC >= 35 && $IMC < 39.9){
        $classificacao = "Obesidade grau II";
    } else {
        $classificacao = "Obesidade grau III";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/imagens/icon.png" type="image/x-icon">
    <title>RESULTADO!</title>
</head>
<body>
    <?php
    echo "<h2>Resultado do Cálculo de IMC</h2>";
    echo "<p>nome: " . htmlspecialchars($nome) . "</p>";    
    echo "<p>email: " . htmlspecialchars($email) . "</p>"; 
    echo "<p>peso: ". number_format($peso,1) ."kg</p>";
    echo "<p>altura: ". number_format($altura,2) ."cm</p>";
    echo "<p>imc: " . number_format($IMC, 2) . "</p>";
    echo "<p>classficação: " . $classificacao . "</p>";
    ?>
</body>
</html>