<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post" action="">
        Peso (kg): <input type="text" name="peso"><br>
        Altura (m): <input type="text" name="altura"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);

        echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";

        if ($imc < 18.5) {
            echo "Abaixo do peso";
        } elseif ($imc < 24.9) {
            echo "Peso normal";
        } elseif ($imc < 29.9) {
            echo "Sobrepeso";
        } else {
            echo "Obesidade";
        }
    }
    ?>
</body>
</html>
