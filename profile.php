<?php


include "inc/function.php";

$categories = getAllCategories();

if (!empty($_POST)) { //button search clicked
    //echo "button search clicked";
    //echo $_POST['search'];
    $produits = searchProduits($_POST['search']);
} else {
    $produits = getAllProducts();
}
session_start();

$visiteurs = getAllVisiteurs();

//Vérifier si l'utilisateur est faux => redirection vers la page de connexion 

if (!isset($_SESSION['nom'])) {
    header('location:connexion.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Profile</title>
    <!-- Btn slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/logo_ic .jpg">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">

    <!-- mamia StyleSheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">



</head>

<body>
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> +216 00.000.000</li>
                                <li><i class="ti-email"></i> Memia@shop.com</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> Réseau Commercial</li>
                                <li><a href="deconnexion.php">Déconnexion</a></li>
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="images/logo/logo horizontal.png" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->

                        <div class="mobile-nav"></div>
                    </div>

                    <?php

                    //Vérifier si l'utilisateur est faux => redirection vers la page de connexion 

                    if (isset($_SESSION['nom'])) {
                        print '<div class="col-lg-10 col-md-6 col-12">
										<div class="right-bar">
											<div class="sinlge-bar">
												<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											</div>
											<div class="sinlge-bar">
												<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
											</div>
											<div class="sinlge-bar shopping">
												<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
												<!-- Shopping Item -->
												<div class="shopping-item">
													<div class="dropdown-cart-header">
														<span>2 Items</span>
														<a href="#">View Cart</a>
													</div>
													<ul class="shopping-list">
														<li>
															<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
															<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
															<h4><a href="#">Woman Ring</a></h4>
															<p class="quantity">1x - <span class="amount">$99.00</span></p>
														</li>
														<li>
															<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
															<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
															<h4><a href="#">Woman Necklace</a></h4>
															<p class="quantity">1x - <span class="amount">$35.00</span></p>
														</li>
													</ul>
													<div class="bottom">
														<div class="total">
															<span>Total</span>
															<span class="total-amount">$134.00</span>
														</div>
														<a href="checkout.html" class="btn animate">Checkout</a>
													</div>
												</div>
												<!--/ End Shopping Item -->
											</div>
										</div>
									</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">

                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li><a href="index.php">Acceuil</a></li>

                                                <!--Importation des categories de la bd-->
                                                <li><a href="#">Catégories<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <?php
                                                        foreach ($categories as $categorie) {
                                                            print '<li><a href="#">' . $categorie['nom'] . '</a></li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li><a href="produits.php">Nos Produits </a></li>
                                                <li><a href="index.php">Nos Promotions</a></li>
                                                <li><a href="index.php">Blog</a></li>
                                                <li><a href="index.php">A Propos de nous</a></li>
                                                <li><a href="contact.php">Contact </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <br>
    <br>




    <div class="container">
        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">

                <form action="update.php" method="post">
                    <h3 class="mb-4">Profil</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" value="<?php echo $visiteur['id']; ?>" name="id" />
                            <div class="form-group">
                                <label>
                                    <h4>Nom</h4>
                                </label>
                                <input type="text" class="form-control" disabled value="<?php echo $_SESSION['nom']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <h4>Prénom</h4>
                                </label>
                                <input type="text" class="form-control" disabled value="<?php echo $_SESSION['prenom']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <h4>Email</h4>
                                </label>
                                <input type="text" disabled class="form-control" value="<?php echo $_SESSION['email']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <h4>Téléphone</h4>
                                </label>
                                <input type="text" name="telephone" disabled class="form-control" value="<?php echo $_SESSION['telephone']; ?>">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>