  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGDS Galerie</title>
    <link rel="shortcut icon" type="image/png" href="../IMG/logo-min.png" title="BGDS">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/galerie.css">
    <link rel="stylesheet" href="../CSS/footer.css">
  </head>

  <body>
    <?php include '../parts/navbar.php';?>
    <div class="container">
      <ul class="image-gallery">
        <li><img src="./image/un.jpg" alt="group1"></li>
        <li><img src="./image/deux.jpg" alt="group1"></li>
        <li><img src="./image/trois.jpg" alt="group1"></li>

        <li><img src="./image/quatre.jpg" alt="group2"></li>
        <li><img src="./image/cinq.jpg" alt="group2"></li>
        <li><img src="./image/six.jpg" alt="group2"></li>

        <li><img src="./image/sept.jpg" alt="group3"></li>
        <li><img src="./image/huit.jpg" alt="group3"></li>
        <li><img src="./image/neuf.jpg" alt="group3"></li>
      </ul>
    </div>

    <?php include '../parts/footer.php'; ?>
  </body>

  </html>