<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $imie = $_POST["imie"];
  $email = $_POST["email"];
  $wiadomosc = $_POST["wiadomosc"];

  $adres_odbiorcy = "szymonw.397@gmail.com";
  $temat = "Nowa wiadomość ze strony kontaktowej";
  $tresc = "Imię: $imie\nE-mail: $email\nWiadomość: $wiadomosc";

  $header = "From: $email\r\n";
  $header .= "Reply-To: $email\r\n";

  if (mail($adres_odbiorcy, $temat, $tresc, $header)) {
    echo "Wiadomość została wysłana.";
  } else {
    echo "Wysyłanie wiadomości nie powiodło się.";
  }
}
?>
