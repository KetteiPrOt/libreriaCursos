<?php
    declare(strict_types = 1);

    $saludo = "Hola Mundo!";

    $texto = "saludo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>
<body>
    <p>
        <?php
            echo $$texto;
        ?>
    </p>
</body>
</html>