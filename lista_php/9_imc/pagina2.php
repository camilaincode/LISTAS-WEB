<?php
    $nome = $_GET["nome"];
    $email = $_GET["email"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/imagens/icon.png" type="image/x-icon">
    <title>FORMULARIO FISICO</title>
</head>
<body>
    <form action="pagina3.php" method="POST">
    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">

    <label for="peso">peso: </label>
    <input type="number" name="peso" placeholder="70.0">

    <label for="altura">altura: </label>
    <input type="number" step="0.01" name="altura" placeholder="1.60">
    
    <input type="submit" value="calcular imc!">
    </form>
</body>
</html>