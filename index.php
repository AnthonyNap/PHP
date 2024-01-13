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

