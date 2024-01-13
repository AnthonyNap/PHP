<!DOCTYPE html>
<html>
<head>
    <title>php</title>
</head>
<body>
    <h1>Messagerie</h1>
    <form action="save.php" method="post">
        <p>
            <label for="message">Votre Message :</label><br>
            <textarea name="message" id="message" rows="5" cols="30"></textarea>
        </p>
        <p><input type="submit" value="Envoyer"></p>
    </form>

    <h2>Messages :</h2>
    <!-- Titre de niveau 2 pour la section d'affichage des messages -->
    <?php
    // Début du script PHP
    // Lire et afficher les messages
    if(file_exists('messages.txt')) {
        // Vérifie si le fichier 'messages.txt' existe
        $messages = file('messages.txt');
        // Lit le fichier 'messages.txt' et stocke chaque ligne dans le tableau $messages
        foreach($messages as $message) {
            // Boucle à travers chaque message
            echo "<div>" . htmlspecialchars($message) . "</div>";
            // Affiche le message dans un élément <div>. Utilise htmlspecialchars pour prévenir l'injection de code HTML
        }
    }
    // Fin du script PHP
    ?>
    
</body>
</html>

