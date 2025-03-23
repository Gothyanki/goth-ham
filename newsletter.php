<?php
// Handling newsletter subscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Here you can save the email to a database or send it to an email
    // For simplicity, we'll save it to a file
    file_put_contents("subscribers.txt", $email . PHP_EOL, FILE_APPEND);

    echo "Takk for at du registrerte deg for nyhetsbrevet!";
}
?>
