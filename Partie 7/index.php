<?php

// if (isset($_GET['error'])) {
//     $error = $_GET['error'];
// } else {
//     $error = false;
// }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement de formulaire</title>
</head>

<body>
    <h1>Tous les exos de la partie 7</h1>

    <!-- -------------- EXO 1 à 4  // juste modifier method get et post = dans variables -------------- -->
    <!-- <form action="./user.php" method="post">
        <label for="firstName"> Prenom :</label>
        <input type="text" name="firstName" id="firstName">

        <label for="lastName"> Nom de famille :</label>
        <input type="text" name="lastName" id="lastName"> -->

    <!-- -------------- EXO 5 à 8 -------------- -->

    <form action="./index.php" method="post">

        <label for="civilite"> Vous êtes :</label>
        <select name="civilite" id="">
            <option value="Madame">Madame</option>
            <option value="Monsieur">Monsieur</option>
        </select>

        <label for="lastName"> Nom de famille :</label>
        <input type="text" name="lastName" id="lastName">

        <label for="firstName"> Prenom :</label>
        <input type="text" name="firstName" id="firstName">

        <label for="file">Choisissez un fichier à envoyer</label>
        <input type="file" id="" name="file" accept=".svg, .pdf" />

        <input type="submit" value="Envoyer">

    </form>

    <?php

    if (isset($_POST['civilite']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['file'])) {
        echo "<br>";
        echo "Civilité : " . $_POST['civilite'] . "<br>";
        echo "Prénom : " . $_POST['firstName'] . "<br>";
        echo "Nom : " . $_POST['lastName'] . "<br>";


        if (str_ends_with($_POST['file'], '.pdf')) {
            echo "Fichier : " . $_POST['file'] . "<br>";
        }
    }
    ?>


</body>

</html>