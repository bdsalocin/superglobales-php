<?php

$ville = ($_GET['ville'] ?? "inconnu");
$pays = ($_GET['pays'] ?? "inconnu");

echo "Je vis à " . $ville . " en " . $pays . ". <br>";

echo "Méthode : " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Script : " . $_SERVER['PHP_SELF'] . "<br>";

// http://localhost:8888/superglobales-php/exo1_get_server/exercice.php?ville=Paris&pays=France