<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/img/icon_logo.png" />
  <title>Ets BERTI</title>
  <link rel="stylesheet" href="css/styles.css"> <!-- Inclure votre fichier CSS personnalisé ici -->
  <style>
    @media only screen and (max-width: 600px) {

      /* Styles pour les appareils mobiles avec une largeur maximale de 600px */
      header nav {
        flex-direction: column;
        align-items: center;
      }

      header nav ul li {
        margin-left: 0;
        margin-bottom: 10px;
      }

      header nav ul li:first-child {
        margin-left: 0;
        margin-bottom: 10px;
      }

      .container {
        padding: 5%;
      }

      .hero-image {
        height: 300px;
      }

      footer {
        padding: 10px;
      }
    }
  </style>


</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="assets/img/icon_logo.png" width="80" alt="Logo Ets BERTI">
      </div>
      <h1>Ets BERTI</h1>
      <ul>
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#services">Nos Services</a></li>
        <li><a href="#a-propos">À Propos</a></li>
        <li><a href="#contact">Contact</a></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </nav>
  </header>

  <section id="accueil">
    <div class="hero-image">
      <h1>Bienvenue chez Ets BERTI</h1>
      <p>Votre partenaire de confiance pour tous vos problèmes de plomberie, chauffage et climatisation</p>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <h2>Nos Services</h2>
      <p>Nous proposons une large gamme de services pour répondre à vos besoins :</p>
      <ul>
        <li>Réparation de fuites d'eau</li>
        <li>Réparation et installation de chauffage</li>
        <li>Réparation et installation de climatisation</li>
        <li>Installation de nouveaux équipements sanitaires</li>
        <li>Rénovation de salles de bains</li>
        <li>Entretien de chauffe-eau</li>
        <li>Et bien plus encore...</li>
      </ul>
    </div>
  </section>

  <section id="a-propos">
    <div class="container">
      <h2>À Propos de Ets BERTI</h2>
      <p>Nous sommes une entreprise expérimentée, fournissant des services de haute qualité depuis plus de
        ####### ans. ########## est prête à vous aider avec tous vos problèmes de plomberie, Chauffage et de
        climatisation, que ce
        soit pour les résidences privées ou les locaux commerciaux.</p>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h2>Contactez-nous</h2>
      <p>Pour toute demande de service ou pour obtenir un devis gratuit, veuillez remplir le formulaire ci-dessous :</p>
      <form method="post" action="actions/envoyer_mail.php">
        <fieldset>
          <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
        </fieldset>
        <fieldset>
          <input type="email" id="email" name="email" placeholder="Votre adresse e-mail" required>
        </fieldset>
        <fieldset>
          <textarea id="message" name="message" placeholder="Votre message" required></textarea>
        </fieldset>
        <fieldset>
          <button type="submit">Envoyer</button>
        </fieldset>
      </form>
    </div>
  </section>


  <!-- <h1>Contactez-nous</h1>
    <form method="post">
        <label>Votre email</label>
        <input type="email" name="email" required>
        <label>Message</label>
        <textarea name="message" required></textarea>
        <input type="submit">
    </form>-->
  <?php
  // if (isset($_POST['message'])) {
  //     $entete  = 'MIME-Version: 1.0' . "\r\n";
  //     $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  //     $entete .= 'From: webmaster@monsite.fr' . "\r\n";
  //     $entete .= 'Reply-to: ' . $_POST['email'];
  
  //     $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
  //     <p><b>Email : </b>' . $_POST['email'] . '<br>
  //     <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';
  
  //     $retour = mail('dgatevv@gmail.com', 'Envoi depuis page Contact', $message, $entete);
  //     if($retour)
  //         echo '<p>Votre message a bien été envoyé.</p>';
  // }
  ?>



  <footer>
    <div class="contact-infos">
      <h2>Coordonnées et informations</h2>
      <p>Nom de l'entreprise : Ets BERTI</p>
      <p>Adresse : 401 Rue de la Picholine, 30000 Nîmes</p>
      <p>Téléphone : +33 7 35 27 12 11</p>
      <p>Email : damienberdi@gmail.com</p>
    </div>
    <div class="horaires-infos">
      <h2>Horaires</h2>
      <p>Lundi - Vendredi : 9h00 - 18h00</p>
      <p>Samedi : 9h00 - 13h00</p>
    </div>
    <p class="copyright">&copy; 2023 Ets BERTI. Tous droits réservés.</p>
  </footer>



  <script src="js/script.js"></script>
</body>

</html>