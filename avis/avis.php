<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BGDS Avis</title>
  <link rel="shortcut icon" type="image/png" href="../IMG/logo-min.png" title="BGDS">
  <link rel="stylesheet" href="../CSS/navbar.css">
  <link rel="stylesheet" href="../CSS/avis.css">
  <link rel="stylesheet" href="../CSS/footer.css">
</head>
<body>
  <?php include '../parts/navbar.php'; ?>
<!----->
  <?php
  //on définit notre variable pour pouvoir inclure les fichiers
  define("C2SCRIPT","peut être n'importe quoi ici");
  include("fonctions.php");
  //on se connecte à la base de données 
  $mysqli = mysqli_connect("localhost","frededen","310715","commentary_bdd");
  if(!$mysqli) exit('Connexion MySQL non accomplie!');
  ?>

  <!----------->
  <div class="container">
    <div class="container-present">
      <h1 class="presentation">Bonjour</h1>
      <p class="comm">Bienvenue sur mon site, faites-vous plaisir, postez un commentaire !</p>
      <h2 class="sous-titre">Écrire un commentaire: </h2>

      <?php
        //on affiche le formulaire pour poster un commentaire
        afficherFormulaireCommentaire();// indique la page actuelle et l'id de l'article pour afficher les commentaires de cet article seulement;
      ?>
    </div>
  </div>
  <!----container-commentaires---->
  <div class="container_display_commentary">
    <h2>Commentaires postés</h2>
      <div class="afficher">
        <?php afficherCommentaires();?>
      </div>
  </div>

  <?php include '../parts/footer.php';?>
</body>
</html>