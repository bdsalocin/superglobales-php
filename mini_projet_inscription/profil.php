<?php
session_start();


if (isset($_SESSION['nom'])) {
    echo "Bonjour " . htmlspecialchars($_SESSION['nom']) . "<br>" . htmlspecialchars($_SESSION['email']); 
} else {
    echo "Veuillez vous connecter";
    exit();
}

if (isset($_COOKIE['last_visit'])) {
    echo "Dernière visite : " . $_COOKIE['last_visit'];
} else {
    echo " C'est votre première visite";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deconnexion'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}

?>

<form method="POST">
<button type="submit" name="deconnexion">Déconnexion</button>
</form>
