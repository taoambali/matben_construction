<?php

    if (isset($_POST['email'])) {
        // Email information
        // $admin_email = "info@tee-teefarms.com";
        
        
        $first_name = htmlspecialchars($_POST['firstname']);
        $last_name = htmlspecialchars($_POST['lastname']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        // $mailheader = "From: " . $first_name . " " . $last_name . " " . $phone . "<".$email.">\r\n";

        $recipient = "tawpheek@gmail.com";

        // send email
        // mail($recipient, $subject, $message, $mailheader) or die("Error!");
        mail($recipient, "New Registration Submission ", $first_name . ' ' . $last_name . ' - ' . $phone . ' - ' . $subject . ' - ' . $message, "From: " . $email);

        header('Location: https://matbenconstruction.co.uk/success.html');
    }

?>