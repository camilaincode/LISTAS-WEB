<?php 
    $numeros = [];
    $soma = 0;
    $maior = 0;
    $menor = 0;
    $mensagem = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['numeros']) && !empty($_POST['numeros'])){
            $entrada = $_POST['numeros'];
            $numerosString = explode(',',$entrada);

            $numeros = array_map(function($valor){
                return floatval(trim($valor));
            },$numerosString);

            $numeros = array_filter($numeros, 'is_numeric');

            if (!empty($numeros)) {
            $soma = array_sum($numeros);
            $maior = max($numeros);
            $menor = min($numeros);
        } else {
            $mensagem = "<p>por favor informe um numero valido!</p>";
        }
        } else {
            $mensagem = "<p>por favor, informe numeros para a plicação funcionar!!</p>";
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
    <title>EXERCICIO 12</title>
</head>
<body>
    <form method="post">
        <label for="numeros">digite numeros e os separe com uma virgula:</label>
        <input type="text" name="numeros" id="numeros" placeholder="1,2,3,4,5"
        value="<?php echo isset($_POST['numeros']) ? htmlspecialchars($_POST['numeros']) : ''; ?>">
        <button type="submit">enviar!</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="resultado">
                <?php if (!empty($mensagem)): ?>
                    <p><?php echo $mensagem; ?></p>
                <?php elseif (!empty($numeros)): ?>
                    <h3>resultado!</h3>
                    <p>os numeros:<?php echo implode(', ', $numeros); ?></p>
                    <p>soma dos numeros:<?php echo $soma; ?></p>
                    <p>maior:<?php echo $maior; ?></p>
                    <p>menor:<?php echo $menor; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>