<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "mtyszecki@gmail.com";  // Podaj swój adres e-mail
    $subject = "Nowa wiadomość od $name";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $mailBody = "Imię: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Wiadomość:\n$message\n";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Błąd podczas wysyłania wiadomości.";
    }
} else {
    echo "Niepoprawne zapytanie.";
}
?>
