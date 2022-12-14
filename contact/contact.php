  <?php session_start();?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGDS Contact</title>
    <link rel="shortcut icon" type="image/png" href="../IMG/logo-min.png" title="BGDS">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../CSS/footer.css">
  </head>

  <body>
    <?php include '../parts/navbar.php';?>
    <div class="container">
        <?php if(array_key_exists('errors', $_SESSION)): ?>
            <div class="alert-danger"><p><?= implode('</p>', $_SESSION['errors']); ?></div>
        <?php  endif; ?>

        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="alert-success">Votre email a bien été envoyé</div>
        <?php  endif; ?>

        <form action="post_contact.php" method='POST'>
            <label for="inputname">Votre Nom:</label>
            <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name']:''; ?>">

            <label for="inputemail">Votre email:</label>
            <input type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email']:''; ?>">

            <label for="inputmessage">Votre message: </label>
            <textarea name="message" id="inputmessage" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message']:''; ?></textarea>

            <button type="submit" class="btn">Envoyer</button>
        </form>
    </div>
    <?php
        unset($_SESSION['inputs']);
        unset($_SESSION['success']);
        unset($_SESSION['errors']);
        include '../parts/footer.php';
    ?>
    <script src="../JS/contact.js"></script>
</body>
</html>