<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['username'])) {
    header("Location: index.html"); // Redirige vers la page de connexion
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
<div class="container">
    <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
    <p>Vous êtes connecté.</p>
    <a href="logout.php">Déconnexion</a>
</div>
</body>
</html>