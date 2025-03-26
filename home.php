<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['username'])) {
    header( header "Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Bienvenu</title>
    </head>
    <body>
        <div class="container">

            <h2> Bienvenu, <?php echo htmlspecialchars($SESSION['username']); ?>
            <p> Voues etes connecté </p>
            <a href=""> Déconnexion </a>

        </div>
        
    </body>

</html>