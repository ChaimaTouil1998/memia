<?php

include 'inc/function.php';

if (!empty($_POST)) {  // button search clicked

    // echo $_POST['search'];
    // $produits = searchProducts($_POST['search']);
} else {
    $produits = getAllProducts();
}
