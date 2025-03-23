<?php
// Handling game registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gameName = $_POST['game-name'];
    $platform = $_POST['platform'];
    $genre = $_POST['genre'];

    // Save game data to a file (or connect to a database)
    file_put_contents("games.txt", "Spill: $gameName, Plattform: $platform, Sjanger: $genre" . PHP_EOL, FILE_APPEND);

    echo "Takk for at du registrerte ditt spill!";
}
?>
