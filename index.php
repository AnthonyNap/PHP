<!DOCTYPE html>
<html>
<head>
    <title>php</title>
</head>
<body>
    <h1>Messagerie</h1>

    <?php
    // Vérification de la présence d'un paramètre d'erreur dans l'URL
    if(isset($_GET['error'])) {
        $error = $_GET['error'];

        // Affichage du message d'erreur en fonction du type
        if($error == 'longueur') {
            echo '<p style="color: red;">Erreur : Le message doit être entre 10 et 500 caractères.</p>';
        } elseif($error == 'form') {
            echo '<p style="color: red;">Erreur : Formulaire soumis incorrectement.</p>';
        }
        // Ajoutez ici d'autres conditions d'erreur si nécessaire
    }
    ?>

    <form action="save.php" method="post">
        <p>
            <label for="message">Votre Message :</label><br>
            <textarea name="message" id="message" rows="5" cols="30"></textarea>
        </p>
        <p><input type="submit" value="Envoyer"></p>
    </form>

    <h2>Messages :</h2>
    <?php
    // Lire et afficher les messages
    if(file_exists('messages.txt')) {
        $messages = file('messages.txt');
        foreach($messages as $message) {
            echo "<div>" . htmlspecialchars($message) . "</div>";
        }
    }
    ?>
</body>
</html>