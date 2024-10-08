<?php
function connect()
{
    require 'accesstest.php';
    return $conn;
}



function getAllCategories()
{
    //connexion base de données
    require 'accesstest.php';

    // Création de la requete 

    $requete = "SELECT * FROM categories";

    // execution de la requete 
    $resultat = $conn->query($requete);

    //resultat de la requete
    $categories = $resultat->fetchAll();

    //var_dump($categories)
    return $categories;
}
function getAllProducts()
{
    //connexion base de données
    require 'accesstest.php';

    // Création de la requete 

    $requete = "SELECT * FROM produits";

    // execution de la requete 
    $resultat = $conn->query($requete);

    //resultat de la requete
    $produits = $resultat->fetchAll();

    //var_dump($categories)
    return $produits;
}

function AddVisiteur($data)
{

    //connexion base de données
    require 'accesstest.php';

    // Hashage de Mot de passe
    $mphash = md5($data['mp']);

    $requete = "INSERT INTO visiteurs(nom,prenom,email,mp,telephone,adresse) 
    VALUES ('" . $data['nom'] . "','" . $data['prenom'] . "','" . $data['email'] . "',
    '" . $mphash . "','" . $data["telephone"] . "','" . $data["adresse"] . "')";

    $resultat = $conn->query($requete);

    if ($resultat) {
        return true;
    } else {
        return false;
    }
}

function ConnectVisiteur($data)
{

    //connexion base de données
    require 'accesstest.php';

    $email = $data['email'];
    $mp = md5($data['mp']);
    $requete = "SELECT * FROM visiteurs WHERE email= '$email' AND mp ='$mp'";

    $resultat = $conn->query($requete);

    $user = $resultat->fetch();

    return $user;
}

function searchProduits($keywords)
{

    //connexion base de données
    require 'accesstest.php';

    //2-Création de la requête
    $requete = "SELECT * FROM produits WHERE nom LIKE '%$keywords%' ";

    //3- exécution de la requête
    $resultat = $conn->query($requete);

    //4- resultat
    $produits = $resultat->fetchAll();

    return $produits;
}

function ConnectAdmin($data)
{
    require 'accesstest.php';

    $email = $data['email'];
    $mp = md5($data['mp']);
    $requete = "SELECT * FROM administrateur WHERE email= '$email' AND mp ='$mp'";

    $resultat = $conn->query($requete);

    $user = $resultat->fetch();

    return $user;
}
function getProduitById($id)
{
    $conn = connect();

    //1- creation de la requete 
    $requete = "SELECT * FROM produits WHERE id=$id";

    //3- exécution de la requête
    $resultat = $conn->query($requete);

    //4- resultat
    $produit = $resultat->fetch();

    return $produit;
}

function getAllVisiteurs()
{
    //connexion base de données
    require 'accesstest.php';

    // Création de la requete 

    $requete = "SELECT * FROM visiteurs";

    // execution de la requete 
    $resultat = $conn->query($requete);

    //resultat de la requete
    $visiteurs = $resultat->fetchAll();

    //var_dump($visiteurs)
    return $visiteurs;
}

function getuser($id = null)
{
    if (!empty($id)) {

        $sql = "SELECT * From visiteurs WHERE id=?";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute(array($id));

        return $req->fetch();
    } else {

        $sql = "SELECT * From visiteurs";

        $req = $GLOBALS['connexion']->prepare($sql);

        $req->execute();

        return $req->fetchAll();
    }
}

/*
session_start();
//1- recupération des données de la formulaire

$id = $_POST['id'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$mp = $_POST['mp'];

//2- la chaîne de connexion
include "../../inc/function.php";
$conn = connect();

//3- Creation de la requête d'exécution
$requete = "UPDATE visiteurs SET telephone='$telephone', adresse='$adresse', mp='$mp' Where id='$id'";


//4- Execution de la requête
$resultat = $conn->query($requete);
*/
