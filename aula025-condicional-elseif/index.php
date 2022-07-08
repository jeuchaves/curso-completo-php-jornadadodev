<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['altura']) && isset($_POST['peso'])) {
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];
            $imc = $peso / ($altura * $altura);
            echo 'Seu IMC eh ' . $imc;
            echo '<br>';
            if($imc >= 18.5 && $imc <= 24.9) echo 'Peso normal';
            elseif($imc >= 25 && $imc <= 29.9) echo 'Sobrepeso';
            elseif($imc >= 30 && $imc <= 39.9) echo 'Obesidade';
            else echo 'Obesidade grave';
        }
    ?>
    <form method="post">
        <input type="number" placeholder="Altura" step="0.01" name="altura">
        <input type="number" placeholder="Peso" step="0.01" name="peso">
        <input type="submit">
    </form>
</body>
</html>