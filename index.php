<?php 
    session_start();

    if(isset($_GET['administrateur'])){
        $_SESSION["adm"] = $_GET['administrateur'];
    }
    if(isset($_SESSION["adm"]) && $_SESSION["adm"] === "geoffrey"){
        echo "ceci est le côté administrateur";
        echo "<a href='./espace_admin/deconnexion.php'>Déconnexion</a>";
    }else{
        include ('./accueil/accueil.php');
    }
?>