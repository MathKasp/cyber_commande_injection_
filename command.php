<?php
if (isset($_GET['ip'])) {
    $ip = $_GET['ip'];
    $commande = shall_exec(command "ping -c 1" .$ip);
    echo "<pre>" . $commande . "</pre>";
} else {
    echo "Veuillez fournir une adresse IP";
}