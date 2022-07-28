<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$errors = array();
$success = false;
$name = '';
$email = '';
$message = '';
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    array_push($errors, 'Vous devez renseigner votre nom.');
}
if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['email'];
} else {
    array_push($errors, 'Vous devez renseigner un email valide.');
}
if (!empty($_POST['message'])) {
    $message = $_POST['message'];
} else {
    array_push($errors, 'Vous devez renseigner un message.');
}
if (!empty($_POST['maps-on'])) {
    $errors = array('Ce formulaire de contact est réservé aux humains.');
}
if (empty($errors)) {
    $headers = "From: $email\r\nContent-Type: text/plain; charset=UTF-8";
    if (mail('contact@louislegrain.online', 'Formulaire de contact', $message, $headers)) {
        $success = true;
    } else {
        array_push($errors, 'Une erreur est survenue lors de l\'envoi du message.');
    }
}
echo json_encode(array(
    'success' => $success,
    'errors' => $errors
));
?>