<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
* {
    margin: 10%;
}

a {
    font-family: 'Arial', sans-serif; 
    font-size: 16px;
}
</style>

<body>
    <p>
    <?php
echo $_SESSION["lastname"] . "<br>" . $_SESSION["firstname"] . "<br>" . $_SESSION["age"];        
?> </p>

</body>
</html>
