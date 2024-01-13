<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["message"])) {
    $message = strip_tags($_POST["message"]) . "\n";
    file_put_contents("messages.txt", $message, FILE_APPEND);
}

header("Location: index.php");
exit;
?>
