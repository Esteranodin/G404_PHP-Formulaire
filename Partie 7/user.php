<?php

if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
        echo "Prénom : " . $_POST['firstName'] . "<br>" ;
        echo "Nom : " . $_POST['lastName'] . "<br>" ;
}
?>

