<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];

    // Perform actions like sending notifications here

    // Return a response
    echo "Thank you for subscribing, you will be notified on any new update on: " . $email;
} else {
    echo "Form submission is required.";
}
?>

