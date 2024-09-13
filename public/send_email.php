<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $richiesta = htmlspecialchars($_POST['richiesta']);

    $to = "info@bio-project.it";
    $subject = "Nuovo messaggio dal modulo di contatto su www.bio-project.it";
    $body = "Nome: $name\nEmail: $email\nTelefono: $telefono\n\nRichiesta:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio del messaggio.";
    }
}
?>