<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"] ?? "Anonymous"));
    $email = htmlspecialchars(trim($_POST["email"] ?? "Not provided"));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));

    if (empty($message)) {
        echo "Message is required.";
        exit;
    }

    $entry = "Name: $name\nEmail: $email\nMessage: $message\n--------------------------\n";

    file_put_contents("feedback.txt", $entry, FILE_APPEND);

    header("Location: index.php");
    exit;
}
?>