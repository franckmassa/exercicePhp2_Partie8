<?php
//On demarre la session start
session_start();
//Déclaration des variables utilisateur.La $_session c'est une super global et un tableau associatif
$_SESSION['firstName'] = 'Pierre';
$_SESSION['lastName'] = 'Dupont';
$_SESSION['age'] = 20;
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
            <!-- Lien vers la page2 -->
            <a class="text-white" href="page2.php">Page2</a>
        </div>
    </body>
</html>
