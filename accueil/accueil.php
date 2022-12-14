<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BGDS Accueil</title>
  <link rel="shortcut icon" type="image/png" href="../IMG/logo-min.png" title="BGDS">
  <link rel="stylesheet" href="./CSS/navbar.css">
  <link rel="stylesheet" href="./CSS/accueil.css">
  <link rel="stylesheet" href="./CSS/footer.css">
</head>

<body>
  <?php include './parts/navbar.php'; ?>
  <!-------------------partie1---------->
  <div class="background">
    <div class="container-top">
      <div class="container-left">
        <div class="logo-3d">
          <h1>BGDS Informatique</h1>
        </div>
        <div class="info-enterprise">
          <p class="siret">Siret: 893 652 750 00017</p>
          <a class="contact-mail" href="../contact/contact.php">Envoyer un mail</a>
        </div>
      </div>

      <div class="container-right">
        <img class="logo-phone" src="./IMG/smartphone.png" alt="Icone d'un téléphone portable">
        <div>
          <a href="tel:0783247489">07 83 24 74 89</a>
          <p>Besoin d'un dépannage informatique</p>
          <div class="appel">
            <span id="call-me"> Appelez-moi!</span>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-------------------------partie2------------->
  <div class="container-middle">
    <div class="rectangle">
      <div class="depannage">
        <h3>Dépannage informatique sur l'Avesnois pour les particuliers / PME / TPE.</h3>

        <p>Basée à Prisches est spécialisé dans le dépannage et la maintenance informatique. J'interviens à domicile et
          en atelier chez les particuliers et les professionnels sur l'Avesnois et ses alentours </p>
      </div>
      <div class="container-cards">
        <div class="container-cards-left">

          <div class="cards">
            <img src="../IMG/soleil-rouge.jpg" alt="">
            <div class="card-text">
              <h3> Dépannage Informatique</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ex, accusamus sequi veniam itaque
                minima
                tenetur iure similique dicta illo non, inventore natus omnis architecto.</p>
            </div>
          </div>

          <div class="cards">
            <img src="../IMG/soleil-rouge.jpg" alt="">
            <div>
              <h3>Divers </h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure magnam dolor rem assumenda fugit numquam
                quam temporibus modi enim. Fugit dolores, repellat numquam quam dolore inventore enim assumenda tempore
              </p>
            </div>
          </div>
        </div>

        <div class="container-cards-right">
          <div class="cards">
            <img src="../IMG/soleil-rouge.jpg" alt="">
            <div>
              <h3>Formation </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In autem illum, sed porro voluptatum, quia,
                dignissimos ducimus dolor hic sit nesciunt nihil corrupti recusandae veniam? </p>
            </div>
          </div>

          <div class="cards">
            <img src="../IMG/soleil-rouge.jpg" alt="">
            <div>
              <h3>3D et réalisation</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iure aliquid possimus dolorem
                dicta eos saepe, enim dolorum, asperiores impedit ipsum aut temporibus hic laudantium. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---------------------partie3-------------->
  <div class="container-bottom">
    <div class="container-job">
      <div class="container-job-left">
        <div class="left-job">
          <p>
            <span>01.Intervention / Prise en charge</span>
            Lorem ipsum dolor sit amet consectetur adipisicing fuga, minima impedit ab assumenda. Ducimus, debitis.
            Dolore dolores eligendi fuga animi vitae enim!
          </p>
        </div>
        <div>
          <p>
            <span>02.Dépannage / Prise en charge</span>
            Lorem ipsum dolor sit amet consectetur adipisicing fuga, minima impedit ab assumenda. Ducimus, debitis.
            Dolore dolores eligendi fuga animi vitae enim!
          </p>
        </div>
      </div>
      <div class="container-job-right">
        <div class="right-job">
          <p>
            <span>03.Diagnostic</span>
            Lorem ipsum dolor sit amet consectetur adipisicing fuga, minima impedit ab assumenda. Ducimus, debitis.
            Dolore dolores eligendi fuga animi vitae enim!
          </p>
        </div>
        <div>
          <p>
            <span>04.Retour</span>
            Lorem ipsum dolor sit amet consectetur adipisicing fuga, minima impedit ab assumenda. Ducimus, debitis.
            Dolore dolores eligendi fuga animi vitae enim!
          </p>
        </div>
      </div>
    </div>
  </div>

  <?php include './parts/footer.php';?>
</body>

</html>