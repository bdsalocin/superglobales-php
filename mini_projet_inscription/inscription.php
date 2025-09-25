<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nom = trim($_POST['nom'] ?? "");
    $email = trim($_POST['email'] ?? "");
    $password = trim($_POST['password'] ?? "");

    $erreur = false;

    if (!empty($nom)) {
        echo "Votre nom est : " . htmlspecialchars($nom) . ". ";
    } else {
        echo "Veuillez rentrer un nom";
        $erreur = true;
        
    }
   

    if (empty($email)) {
        echo "Veuillez entrer un email";
        $erreur = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Veuillez entrer un email valide ";
        $erreur = true;
    } else {
        echo "Votre email : " . htmlspecialchars($email) . " est valide.";
    }
    

    if (strlen($password) < 8) {
        echo "Votre mot de passe doit contenir 8 caractères.";
        $erreur = true;
    } else {
        echo "Votre mot de passe est valide";
    }

    if (!empty($nom) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) >= 8) {
        $_SESSION['nom'] = $nom;
        $_SESSION['email'] = $email;
        setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);
        header("Location: profil.php");
        exit();
    } else {
        echo "Veuillez remplir correctement tous les champs";
    }
}

?>

<form method="POST">
    Nom : <input type="text" name="nom" required>
    Email : <input type="email" name="email">
    Password : <input type="password" name="password">
    <button type="submit">Se connecter</button>
</form>

