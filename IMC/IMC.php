
<?php

$peso = $_POST['peso'] ?? 0;
$altura = $_POST['altura'] ?? 0;

if ($peso > 0 && $altura > 0) {
    $imc = round($peso / ($altura * $altura), 2);

    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classificacao = "Peso normal";
    } elseif ($imc < 30) {
        $classificacao = "Sobrepeso";
    } else {
        $classificacao = "Obesidade";
    }
} else {
    die("Dados inválidos. <a href='index.html'>Voltar</a>");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container">

        <div class="calculadora">

            <h1>Resultado do IMC</h1>

            <p class="descricao">Confira seu resultado abaixo</p>

            <div class="resultado">
                <h2>Seu IMC é:</h2>

                <p><?php echo $imc; ?></p>

                <h3><?php echo $classificacao; ?></h3>
            </div>

            <a href="index.html">
                <button type="button">Voltar</button>
            </a>

        </div>

    </main>

</body>
</html>
