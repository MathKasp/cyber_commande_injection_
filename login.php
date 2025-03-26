<?php
$pdo = new PDO("mysql:host=192.168.78.129;dbname=injection", "root", "secret", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$stmt->execute([
    'username' => $username,
    'password' => $passwordt
]);
$resultat = $stmt->fetch();

if ($resultat) {
    echo "Connexion réussie !";
} else {
    echo "Mot de passe incorrect !";
}