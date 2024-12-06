<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="exo3.php" method="post">

<label for="login"> Votre login :</label>
<input type="text" name="login">

<label for="mdp"> Votre mot de passe :</label>
<input type="text" name="mdp">

<input type="submit" value="Envoyer">
</form>

<?php

if (isset($_POST["login"], $_POST["mdp"])) {
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    setcookie("login", $login);
    setcookie("mdp", $mdp);
    
    echo  "<p> login :" . $_COOKIE["login"] . "<br> mdp :" . $_COOKIE["mdp"] . "</p>" ; 
}

?>
    


</body>
</html>



