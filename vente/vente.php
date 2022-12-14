<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BGDS Vente</title>
  <link rel="shortcut icon" type="image/png" href="../IMG/logo-min.png" title="BGDS">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/vente.css">
  <link rel="stylesheet" href="../CSS/navbar.css">
  <link rel="stylesheet" href="../CSS/footer.css">
</head>

<body>
  <?php include '../parts/navbar.php';?>
  <!-----------------GROUPE1------------------------->
  <div class="container">
    <div class="image-container">
      <div class="img">
        <button class="image-item" data-modal="true" data-gallery="group1" aria-label="Open group1 image gallery">
          <img src="./images/group1/food-1--sm.jpg" alt="Food">
        </button>

        <div class="descrip">
          <h3>Banane</h3>
          <ul class="list hidden">
            <li>Carte mère</li>
            <li>Carte graphique</li>
            <li>RAM</li>
            <li>Disque dur</li>
            <li>Processeur</li>
            <li>Ventilateur</li>
            <li>bloc d'alimentation</li>
            <li>Hdmi 3.0</li>
          </ul>
        </div>
      </div>

      <div class="img">
        <button class="image-item" data-modal="true" data-gallery="group2" aria-label="Open group2 image gallery">
          <img src="./images/group2/mountain-1--sm.jpg" alt="Mountains">
        </button>
        <div class="descrip">
          <h3>Rivière</h3>
          <ul class="list hidden">
            <li>Carte mère</li>
            <li>Carte graphique</li>
            <li>RAM</li>
            <li>Disque dur</li>
            <li>Processeur</li>
            <li>Ventilateur</li>
            <li>bloc d'alimentation</li>
            <li>Hdmi 3.0</li>
          </ul>
        </div>
      </div>

      <div class="img">
        <button class="image-item" data-modal="true" data-gallery="group3" aria-label="Open group3 image gallery">
          <img src="./images/group3/plant-1--sm.jpg" alt="Plant">
        </button>
        <div class="descrip">
          <h3>Plante</h3>
          <ul class="list hidden">
            <li>Carte mère</li>
            <li>Carte graphique</li>
            <li>RAM</li>
            <li>Disque dur</li>
            <li>Processeur</li>
            <li>Ventilateur</li>
            <li>bloc d'alimentation</li>
            <li>Hdmi 3.0</li>
          </ul>
        </div>
      </div>

      <!-------------------GROUPE2----------------->
      <div class="img">
        <button class="image-item" data-modal="true" data-gallery="group1" aria-label="Open group1 image gallery">
          <img src="./images/group1/food-1--sm.jpg" alt="Food">
        </button>
        <div class="descrip">
          <h3>Banane</h3>
          <ul class="list hidden">
            <li>Carte mère</li>
            <li>Carte graphique</li>
            <li>RAM</li>
            <li>Disque dur</li>
            <li>Processeur</li>
            <li>Ventilateur</li>
            <li>bloc d'alimentation</li>
            <li>Hdmi 3.0</li>
          </ul>
        </div>
      </div>

      <div class="img">
        <button class="image-item" data-modal="true" data-gallery="group2" aria-label="Open group2 image gallery">
          <img src="./images/group2/mountain-1--sm.jpg" alt="Mountains">
        </button>
        <div class="descrip">
          <h3>Rivière</h3>
          <ul class="list hidden">
            <li>Carte mère</li>
            <li>Carte graphique</li>
            <li>RAM</li>
            <li>Disque dur</li>
            <li>Processeur</li>
            <li>Ventilateur</li>
            <li>bloc d'alimentation</li>
            <li>Hdmi 3.0</li>
          </ul>
        </div>
      </div>

      <div class="img">
        <button class="image-item" data-modal="true" data-gallery="group3" aria-label="Open group3 image gallery">
          <img src="./images/group3/plant-1--sm.jpg" alt="Plant">
        </button>
        <div class="descrip">
          <h3>Plante</h3>
          <ul class="list hidden">
            <li>Carte mère</li>
            <li>Carte graphique</li>
            <li>RAM</li>
            <li>Disque dur</li>
            <li>Processeur</li>
            <li>Ventilateur</li>
            <li>bloc d'alimentation</li>
            <li>Hdmi 3.0</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
  </div>

  </br></br>
  <?php include '../parts/footer.php';?>

  <script type="module">
  import initGallery from "../JS/js-vente/galleryApp.js";
  initGallery('./data/galleries.json', {
    speed: 600,
  });
  </script>
  *


  <script src="../JS/js-vente/dropdown.js"></script>
</body>

</html>