<?php
session_start();

    $lastname = "PELISSE";
    $firstname = "JEREMY";
    $age = "45 ans";

    $_SESSION["lastname"] = $lastname;
    $_SESSION["firstname"] = $firstname;
    $_SESSION["age"] = $age;

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
    padding: 0;
    box-sizing: border-box;
}

a {
    font-family: 'Arial', sans-serif; 
    font-size: 16px; 
    color: #333; 
    background-color: #f9f9f9; 
    padding: 20px; 
    border-radius: 5px; 
    border: 1px solid #ddd; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    transition: all 0.3s ease; 
}

a:hover {
    background-color: #f0f0f0; 
    transform: translateY(-2px); 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}
</style>


<body>
    <a href="compte.php"> Cliquez ! 
<?php

?>
    </a>
</body>
</html>