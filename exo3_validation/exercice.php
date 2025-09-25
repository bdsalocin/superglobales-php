<form method="POST">
    Nom : <input type="name" name="nom">
    Email : <input type="email" name="email">
    Age : <input type="number" name="age">
    <button type="submit">Envoyer</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom']);
    if (empty($nom)) {
        echo "Veuillez rentrez un nom";
    } else {
        echo "Votre nom est : " . htmlspecialchars($nom) . ". ";
    }
    echo "<br>";
    $email = trim($_POST['email']);
    if (empty($email)) {
        echo "Veuillez rentrer un email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email invalide ";
    } else {
        echo "Email valide : " . htmlspecialchars($email) . ". ";
    }
    echo "<br>";
    $age = trim($_POST['age']);
    if ($age <= 0) {
        echo "Age invalide, vous n'existez pas";
    } else {
        echo "Votre age : " . htmlspecialchars($age) . ". ";
    }
} 