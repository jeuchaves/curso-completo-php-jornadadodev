<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente para Estudo PHP - eXcript</title>
</head>
<body>

    <?php
        # isset verifica se existe um valor na variável
        # Operador ternário: [condicao] ? [true] : [false]
        echo isset($_POST['valor1']) ? $_POST['valor1'] : '';
        echo isset($_POST['valor2']) ? $_POST['valor2'] : '';  
    ?>

    <form method="POST">
        <input type="text" name="valor1">
        <input type="text" name="valor2">
        <input type="submit">
    </form>
</body>
</html>