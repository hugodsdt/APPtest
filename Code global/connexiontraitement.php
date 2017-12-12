<?php
    if (isset($_POST["ID"]) && isset($_POST["MDP"])){
        if($_POST["MDP"]=="Junior Isep"){
            header('Location: http:accueil.php');
            exit();
        }
        if($_POST["MDP"]!="MDP"){
            echo "le mot de passe est faux";
        }
    }    
    ?>