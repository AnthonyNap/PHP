<?php
// Début du script PHP

// Vérification de la méthode de requête et de la présence d'un message
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["message"])) {
    // Vérifie si la requête est de type POST et si le champ "message" n'est pas vide

    $message = strip_tags($_POST["message"]) . "\n";
    // Récupère le message envoyé via le formulaire.
    // Utilise strip_tags pour enlever les éventuelles balises HTML et JavaScript pour la sécurité.
    // Ajoute un saut de ligne après le message pour séparer les messages dans le fichier.

    file_put_contents("messages.txt", $message, FILE_APPEND);
    // Écrit le message dans le fichier 'messages.txt'.
    // L'option FILE_APPEND permet d'ajouter le texte sans écraser le contenu existant.
}

header("Location: index.php");
// Redirige le navigateur vers 'index.php'. Cela empêche la re-soumission du formulaire si l'utilisateur rafraîchit la page.

exit;
// Termine le script. C'est une bonne pratique après une redirection pour éviter l'exécution de code supplémentaire.
?>
