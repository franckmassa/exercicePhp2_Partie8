<?php
//On demarre la session start
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice2</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="d-inline-block bg-info m-5 p-5" style="border: 5px double red; font-size: 30px;">
            <p><?= 'Prénom : ' . $_SESSION['firstName']; ?></p><!-- Affichage du contenu de la variable Prénom -->
            <p><?= 'Nom : ' . $_SESSION['lastName']; ?></p><!-- Affichage du contenu de la variable Nom -->
            <p><?= 'Age : ' . $_SESSION['age']; ?></p><!-- Affichage du contenu de la variable Age -->
        </div> 
    </body>
</html>