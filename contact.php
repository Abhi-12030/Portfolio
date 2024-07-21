<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Set recipient email address
    $to = "sr25012002@gmail.com";
    
    // Compose email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "success"; // Indicate success
    } else {
        echo "error"; // Indicate failure
    }
} else {
    echo "Method not allowed"; // Request method is not POST
}
?>
