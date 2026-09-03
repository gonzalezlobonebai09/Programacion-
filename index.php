<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
        }
        .caja-menu {
            background-color: #ffffff;
            width: 300px;
            padding: 15px;
            margin-bottom: 20px;
            border: 4px solid #1d3557;
            border-radius: 10px;
        }
        .caja-footer {
            background-color: #2b2d42;
            color: #ffffff;
            width: 300px;
            padding: 15px;
            margin-top: 20px;
            border: 4px solid #8d99ae;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="caja-menu">
        <?php include_once "./inc/nav.php"; ?>
    </div>

    <h1>Pagina Principal</h1>
    
    <div class="caja-footer">
        <?php include_once "inc/footer.php"; ?>
    </div>

</body>
</html>