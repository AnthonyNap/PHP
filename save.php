<?php
// Début du script PHP

// Définir les limites de longueur pour le message
$longueurMin = 10;
$longueurMax = 500;

// Vérification de la méthode de requête et de la présence d'un message
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["message"])) {
    // Récupérer et nettoyer le message
    $message = strip_tags($_POST["message"]);

    // Vérifier la longueur du message
    if(strlen($message) < $longueurMin || strlen($message) > $longueurMax) {
        // Si le message est trop court ou trop long, rediriger vers la page d'erreur ou afficher un message
        header("Location: error.php?error=longueur");
        exit;
    }

    // Ajouter un saut de ligne et écrire le message dans le fichier
    $message .= "\n";
    file_put_contents("messages.txt", $message, FILE_APPEND);

    // Rediriger vers la page principale
    header("Location: index.php");
    exit;
}

// Rediriger vers la page d'erreur si le formulaire n'est pas soumis correctement
header("Location: error.php?error=form");
exit;

?>