<?php 
if (isset($_GET['ip'])){
    $ip = escapeshellarg($_GET['ip']);
    $commande = shell_exec(command:"ping -c 1 " .$ip);
    echo "<pre>". $commande . "</pre>";
} else {
    echo "Veuillez fournir une IP";
}