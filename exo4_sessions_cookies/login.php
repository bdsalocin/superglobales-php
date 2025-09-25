<?php

session_start();

if (!empty($_POST['user'])) {
    $_SESSION['username'] = $_POST['user'];
    header("Location : profil.php");
    exit();
}
?>

<form method="POST">
    User : <input type="text" name="user">
    <button type="submit">Se connecter</button>
</form>







