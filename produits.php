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

require 'accesstest.php';


// 2 - creation de la requête
$requete = "SELECT * FROM categories";

// 3 - execution de la requête

$resultat = $conn->query($requete);

// 4 - resultat de la requête

$categories = $resultat->fetchAll();

//var_dump($categories);


?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>Mamia</title>
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

	<!-- Mamia StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">



</head>

<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->



	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +216 00 000 000</li>
								<li><i class="ti-email"></i> memia@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i>Nos localisations</li>
								<li>
									<?php
									session_start();

									//Vérifier si l'utilisateur est faux => redirection vers la page de connexion 

									if (!isset($_SESSION['nom'])) {
										print '<li><i class="ti-user"></i> <a href="inscription.php">S inscrire</a></li>
										<li><i class="ti-power-off"></i><a href="connexion.php">Connexion</a></li> ';
									} else {
										print '<li><i class="deconnexion"></i><a href="deconnexion.php">Déconnexion</a></li>';
									}
									?>
								</li>
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
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">All Category</option>
									<option>watch</option>
									<option>mobile</option>
									<option>kid’s item</option>
								</select>
								<form class="d-flex" action="produits.php" method="POST">
									<input name="search" class="form-control" placeholder="Chercher vos produits..." type="search">
									<button class="btnn" type="submit" name="click"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<?php

					//Vérifier si l'utilisateur est faux => redirection vers la page de connexion 

					if (isset($_SESSION['nom'])) {
						print '<class="col-lg-2 col-md-3 col-12"">
					<div class="right-bar">
						<div class="sinlge-bar">
							<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
						</div>
						<div class="sinlge-bar">
							<a href="profile.php" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
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
												<li><a href="index.php">Accueil</a></li>

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
												<li class="active"><a href="produits.php" class="active">Nos Produits </a></li>
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

		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index.php">Accueil<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="produits.php">Produits</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		<div class="row col-12 mt-4">
			<?php
			foreach ($produits as $produit) {
				print '
                    <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/' . $produit['image'] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $produit['nom'] . '</h5>
                            <p class="card-text">' . $produit['description'] . '</p>
                        </div>
                        <ul>
                        <ul>
                        <li class="list-group-item">' . $produit['prix'] . ' DT</li>
                        <li class="list-group-item">' . $produit['categories'] . '</li>

                    </ul>
                    </div>
                    </div>';
			}
			?>

		</div>

		<br>

		<!-- Start Footer Area -->
		<footer class="footer">
			<!-- Footer Top -->
			<div class="footer-top section">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer about">
								<div class="logo">
									<a href="index.php"><img src="images/logo/MAMIA en lettre.png" alt="#"></a>
									<p class="text">Une épicerie est un commerce de détail de proximité de
										denrées alimentaires mais distribue également une diversité de produits sans rapport
										avec l'alimentation.</p>
									<p class="call">Vous avez des questions? Appeler nous <span><a href="tel:0000000">+216 00.000.000</a></span></p>
								</div>

							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer links">
								<h4>Services</h4>
								<ul>
									<li><a href="#idCategorieAccueil">Catégories</a></li>
									<li><a href="#idProduitAccueil">Produits</a></li>
									<li><a href="#idPromotionAccueil">Promotions</a></li>
									<li><a href="#idBlogAccueil">Blog</a></li>
									<li><a href="#idAboutAsAccueil">A Propos de nous</a></li>

								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer social">
								<h4>Contacter nous</h4>
								<!-- Single Widget -->
								<div class="contact">
									<ul>
										<li>Megrine</li>
										<li>012 Adresse Adresse</li>
										<li>Mmia@shop.com</li>
										<li>+216 00.000.000</li>
									</ul>
								</div>
								<!-- End Single Widget -->
								<ul>
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li>
									<li><a href="#"><i class="ti-flickr"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Footer Top -->
			<div class="copyright">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-6 col-12">
								<div class="left">
									<p>Copyright © 2023 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved-MicroSysteme Solutions.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- /End Footer Area -->



		<!-- Jquery -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Owl Carousel JS -->
		<script src="js/owl-carousel.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/magnific-popup.js"></script>
		<!-- Fancybox JS -->
		<script src="js/facnybox.min.js"></script>
		<!-- Waypoints JS -->
		<script src="js/waypoints.min.js"></script>
		<!-- Jquery Counterup JS -->
		<script src="js/jquery-counterup.min.js"></script>
		<!-- Countdown JS -->
		<script src="js/finalcountdown.min.js"></script>
		<!-- Nice Select JS -->
		<script src="js/nicesellect.js"></script>
		<!-- Ytplayer JS -->
		<script src="js/ytplayer.min.js"></script>
		<!-- Flex Slider JS -->
		<script src="js/flex-slider.js"></script>
		<!-- ScrollUp JS -->
		<script src="js/scrollup.js"></script>
		<!-- Onepage Nav JS -->
		<script src="js/onepage-nav.min.js"></script>
		<!-- Easing JS -->
		<script src="js/easing.js"></script>
		<!-- Google Map JS -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
		<script src="js/gmap.min.js"></script>
		<script src="js/map-script.js"></script>
		<!-- Active JS -->
		<script src="js/active.js"></script>
		<!-- Annimation de NavBar -->
		<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('li').on('click', function() {
					$(this).siblings().removeClass('active');
					$(this).addClass('active');
				})
			})
		</script>
</body>
<script>
	"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.11/sweetalert2.all.min.js"
</script>


</html>