<?php
    //ajout de la vue
    include('vue_article.php');

    //connexion à la BDD
    include('connect_db.php');

    //test existence des champs nom_article et contenu article
    if(isset($_POST['nom_article']) and $_POST['nom_article'] !=''
    and isset($_POST['prix_article']) and $_POST['prix_article'] !='')
    {

        //création des 2 variables qui vont récupérer le contenu des super globales POST
        $nom_article = $_POST['nom_article'];
        $prix_article = $_POST['prix_article'];
        
        //ajout du model qui va faire la requête d'enregistrement
        include('model.php');

    }
    else{
    //affichage dans la page html de ce que l'on a enregistré en bdd
    echo '<p>veuillez remplir les champs de formulaire</p>';
    }
?>