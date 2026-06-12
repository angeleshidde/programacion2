<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
            text-align: center;
            padding: 60px;
            font-family: Arial, sans-serif;
        }

        h1{
            color: #333;
            font-size: 40px;
        }

        p{
            color. #666;
            font-size: 18px;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <?php include_once 'header.php'; ?>
        <main>
        <h1>Bienvenido a mi pagina </h1>

        <p>
            Aca vas a encontrar nuestros productos y toda la informacion.
        </p>
</main>
    <?php include_once 'footer.php'; ?>
</body>
</html>
