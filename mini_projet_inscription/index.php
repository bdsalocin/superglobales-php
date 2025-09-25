<?php
session_start();
$event = ($_GET['event']) ?? null;

echo 'Vous inscrire <a href="inscription.php?event=phpday">à l\'événement</a>';

if (!$event == null) {
    echo "Vous allez vous inscrire à " . htmlspecialchars($_GET['event']);
}