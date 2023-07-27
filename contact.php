<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $email = $_POST['Subject'];
    $message = $_POST['message'];

    // Add your processing logic here (e.g., send email, store data)
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Email: " . $Subject . "<br>";
    echo "Message: " . $message . "<br>";
    // Redirect the user to a thank you page
    header("Location: thank-you.html");
    exit();
}
?>
