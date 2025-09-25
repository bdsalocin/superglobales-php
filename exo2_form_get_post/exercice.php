<!-- <form method="get">
    Nom : <input type="name" name="nom">
    email : <input type="email" name="email">
    <button type="submit">Envoyer</button>
</form> -->

<form method="post">
    Nom : <input type="name" name="nom">
    email : <input type="email" name="email">
    <button type="submit">Envoyer</button>
</form>

<?php 
// if (!empty($_GET['nom']) && !empty($_GET['email'])) {
//     echo "Ton nom est " . htmlspecialchars($_GET['nom'] 
//                         . " et ton mail est " 
//                         . htmlspecialchars($_GET['email'])); 
// }


if (!empty($_POST['nom']) && !empty($_POST['email'])) {
    echo "Ton nom est " . htmlspecialchars($_POST['nom'] 
                        . " et ton mail est " 
                        . htmlspecialchars($_POST['email'])); 
}

// La différence est que la méthode GET affiche directement les valeurs dans l'url.
// Alors que la methode POST n'affiche pas dans l'url les valeurs