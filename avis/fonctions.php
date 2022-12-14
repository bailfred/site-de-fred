<?php if(!defined("C2SCRIPT")) exit;//empêche l'accès direct à cette page, autorisé seulement en include en définissant "C2SCRIPT", juste avant
function htmlent($texte){
    return htmlentities($texte,ENT_QUOTES,"UTF-8");
}
function raf($NomDuBouton, $TexteParDefaut=''){//fonction pour réafficher les champs du formulaire après l'avoir envoyé pour ne pas avoir à les reremplir
    return isset($_POST[$NomDuBouton]) ? htmlent($_POST[$NomDuBouton]) : $TexteParDefaut;
}
function afficherFormulaireCommentaire(){
    global $mysqli;//permet à la variable $mysqli d'être utilisée dans la fonction
    $msg_erreur='';//pour indiquer les erreurs qui empêche la soumission du formulaire
    if(isset($_POST['submit'])){//si le bouton envoyer (name="submit") est cliqué, on traite le formulaire
        if(empty($_POST['username']) OR empty($_POST['mail']) OR empty($_POST['comment'])){
            $msg_erreur.="Un des champs est vide";
        } else {  //les champs sont pas vides, on traite les informations saisies en commençant par l'adresse email
            if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i",$_POST['mail'])){
                $msg_erreur.="Le mail est incorrect<br/>";//on mets un saut de lignes
            }
        }
        if($msg_erreur!=''){ //si il y a des erreurs, on les affichent
            echo '<p style="color:red">Il y a des erreurs:</p>';
            echo $msg_erreur;
        } else { //pas d'erreurs, on sécurise les champs pour les insérer dans la base de données
            $username = htmlent($_POST['username']);//voir la fonction htmlent() dans le fichier fonctions/fonctions.php pour plus de détails
            $mail = htmlent($_POST['mail']);
            $comment = htmlent($_POST['comment']);
            $comment = nl2br($comment);//nl2br nous permet d'ajouter des <br/> quand il y a un saut de ligne, nous permettra de garder les saut quand on 
            //on l'insère dans la bdd 
            if(mysqli_query($mysqli,"INSERT INTO commentary SET username = '$username', mail = '$mail', comment = '$comment', dateandhour = ".time().", autorize=0")){
                echo "<p>Commentaire envoyé avec succès!</p>";
            } else {
                echo "<p>Une erreur s'est produite, merci de réessayer ou contactez le support si le problème persiste.</p>".mysqli_error($mysqli);
            }
        }
    }
?>

<form method="POST" action="./avis.php" class="form-avis">
  <label for="username">Pseudo :</label>
  <input type="text" name="username" id="username" placeholder="Votre pseudo" value="<?php echo raf("username"); ?>"
    required>
  <label for="email">E-Mail :</label>
  <input type="email" name="mail" id="email" placeholder="Votre e-mail" value="<?php echo raf("mail"); ?>" required>
  <label for="message">Message :</label>
  <textarea rows=4 cols="45" id="message" name="comment" required><?php echo raf("comment");?></textarea>
  <button type="submit" name="submit">Envoyer !</button>
</form>

<?php
    }
    function afficherCommentaires(){
    global $mysqli;//permet à la variable $mysqli d'être utilisée dans la fonction
    //on va chercher les commentaires qui correspondent à l'id de l'article (si mentionné)
    $req = mysqli_query($mysqli,"SELECT * FROM commentary WHERE autorize=1 ORDER BY id ASC");
    if(mysqli_num_rows($req)==0) {
        echo "<p>Aucun commentaire pour le moment.</p>";
    } else 
    {
        while($infos = mysqli_fetch_assoc($req)) {
?>

<div class="container_commentary">
  <p class="info_user"><?= $infos['username']; ?> le
    <?= date("d-m-Y",$infos['dateandhour'])." à ".date("H:i",$infos['dateandhour']); ?></p>
  <p class="commentary"><?= $infos['comment']; ?></p>
</div>
<?php
        }
    }
}
?>