<?php if($_SERVER["REQUEST_METHOD"]== "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to_email ="logesh8778@gmail.com";
    $subject = "new message from website";

    $body = "name: $name\nemail: $email\nmessage:\n$message";
    $headers = "From: $email";

    if (mail($to_email,$subject,$body,$headers)){
        echo "email sent successfully sent to ".$to_email."...";
    } else {
        echo "email sending failed";
    }
}
?>