<?php
if(isset($_POST['email'])) {

  // Adresse e-mail où vous souhaitez recevoir les messages
  $destinataire = "dgatevv@gmail.com";

  // Sujet de l'e-mail
  $sujet = "Nouveau message depuis le formulaire de contact";

  // Informations provenant du formulaire
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Corps de l'e-mail
  $contenu = "Nom: $nom\n";
  $contenu .= "Email: $email\n\n";
  $contenu .= "Message:\n$message";

  // En-têtes de l'e-mail
  $headers = "De: $nom <$email>";

  // Envoi de l'e-mail
  mail($destinataire, $sujet, $contenu, $headers);

  // Redirection après l'envoi du message (vers une page de confirmation par exemple)
  header("Location: ../index.php");
}
?>
