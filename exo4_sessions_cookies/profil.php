<?php
session_start();

setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);

echo "Bonjour " . $_SESSION['username'] . "<br>";
if (isset($_COOKIE['last_visit'])) {
    echo "Dernière visite : " . $_COOKIE['last_visit'];
} else {
    echo " C'est votre première visite";
}