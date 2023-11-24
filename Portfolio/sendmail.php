if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Change the following email address to your own email
    $to = thinhdang112003@gmail.com;
    $subject = "New Message from Portfolio Contact Form";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Phone: $phone\n\n";
    $mailBody .= "Subject: $subject\n";
    $mailBody .= "Message:\n$message";

    // You can customize the headers as needed
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    mail($to, $subject, $mailBody, $headers);

    // You can add a success message or redirect the user to a thank you page
    echo "Message sent successfully!";
} else {
    // Handle invalid requests
    header("HTTP/1.1 400 Bad Request");
    echo "Invalid request";
}