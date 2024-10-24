<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/app.css" type="text/css" />
    <title><?=$title?></title>
</head>
<body>
    <div id="container">
    <?include('views/includes/menu.php')?>
        <?include('views/includes/header.php')?>
        <main>
            <?=$maintext?>
        </main>
        <?include('views/includes/footer.php')?>
    </div>
    <script src="scripts/menu.js"></script>
</body>
</html>