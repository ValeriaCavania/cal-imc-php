<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
</head>

<body>
    <?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / pow($altura, 2);
    echo "<h1>Resultado: </h2>";
    if ($imc < 18.5) {
        echo "<input type='text' value=" . $imc . ">";
        echo "<h3>Magreza</h3>";
    } elseif ($imc < 24.9) {
        echo "<input type='text' value=" . $imc . ">";
        echo "<h3>Normal</h3>";
    } else if ($imc < 29.9) {
        echo "<input type='text' value=" . $imc . ">";
        echo "<h3>Sobrepeso - Grau I</h3>";
    } else if ($imc < 39.9) {
        echo "<input type='text' value=" . $imc . ">";
        echo "<h3>Obesidade - Grau II</h3>";
    } else {
        echo "<input type='text' value=" . $imc . ">";
        echo "<h3>Obesidade - Grau III</h3>";
    }
    ?>
</body>

</html>