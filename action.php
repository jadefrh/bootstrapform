<?php 

$firstname_error = $lastname_error = $email_error = $countries_error = $city_error = '';
$firstname = $lastname = $email = $countries = $city = '';
$mail_sent = false;
$mail_error = false;

if (!empty($_POST)) {

    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $has_errors = false;

    if (empty($_POST['firstname'])) {
        $firstname_error = 'Veuillez renseigner votre prénom';
        $has_errors = true;
    } else {
        $firstname = sanitize_input($_POST['firstname']);
    }

    if (empty($_POST['lastname'])) {
        $lastname_error = 'Veuillez renseigner votre nom';
        $has_errors = true;
    } else {
        $lastname = sanitize_input($_POST['lastname']);
    }

    if (empty($_POST['email'])) {
        $email_error = 'Veuillez renseigner votre e-mail';
        $has_errors = true;
    } else {
        $email = sanitize_input($_POST['email']);
    }

    if (empty($_POST['city'])) {
        $city_error = 'Veuillez renseigner votre ville';
        $has_errors = true;
    } else {
        $city = sanitize_input($_POST['city']);
    }

    if (empty($_POST['countries'])) {
        $countries_error = 'Veuillez choisir un pays parmi ceux proposés.';
        $has_errors = true;
    } else {
        $countries = sanitize_input($_POST['countries']);
    }

    if (!$has_errors) {
        $from = 'jadefrh@gmail.com';
        $subject = 'Confirmation d\'envoi de formulaire';
        $message = $firstname . ', merci de votre participation.';

        // Headers
        $headers = 'From: '.$firstname.' <'.$from.">\r\n";
        $headers .= 'Reply-To: '.$email."\r\n";
        $headers .= "MIME-Version: 1.O\r\n";
        $headers .= 'Content-type: text/html; charset-utf-8';

        // Send email
        if (mail($email, $subject, $message, $headers)) {
            $mail_sent = true;
        } else {
            $mail_error = true;
        }
    }
}
