// compte_creer.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>votre à été crée</h1>

    <?php

    if (isset($_GET['lastName'], $_GET['firstName'])) {
        echo "<p>bienvenue {$_GET['firstName']}  {$_GET['lastName']} </p>";
    }


    ?>

</body>

</html>