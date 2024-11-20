<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Načtení dat z formuláře
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Nastavení e-mailu
    $to = "jakubdobransky7@gmail.com"; // Vaše e-mailová adresa
    $subject = "Nová zpráva z kontaktního formuláře";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Obsah zprávy
    $emailBody = "Jméno: $name\n";
    $emailBody .= "E-mail: $email\n\n";
    $emailBody .= "Zpráva:\n$message\n";

    // Odeslání e-mailu
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Zpráva byla úspěšně odeslána.";
    } else {
        echo "Došlo k chybě při odesílání zprávy.";
    }
} else {
    echo "Přístup odepřen.";
}
?>
