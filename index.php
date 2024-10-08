<?php

session_start();

include "inc/function.php";

$categories = getAllCategories();
$produits = getAllProducts();


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
	<title>Mamia.tn</title>
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

	<!-- Eshop StyleSheet -->
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
								<li>
									<?php

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

						<div class="mobile-nav"></div>
					</div>

					<?php

					//Vérifier si l'utilisateur est faux => redirection vers la page de connexion 

					if (isset($_SESSION['nom'])) {
						print '<div class="col-lg-10 col-md-4 col-12">
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
												<li class="active"><a href="#">Accueil</a></li>

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
												<li><a href="#idPromotionAccueil">Nos Promotions</a></li>
												<li><a href="#idBlogAccueil">Blog</a></li>
												<li><a href="#idAboutAsAccueil">A Propos de nous</a></li>
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
	<!--/ End Header -->

	<!-- Slider Area -->

	<div class="slider">
		<img src="images/slide1.jpg" alt="img1" class="img__slider active" />
		<img src="images/slide2.jpg" alt="img2" class="img__slider" />
		<img src="images/slide3.jpg" alt="img2" class="img__slider" />
		<img src="images/slide4.jpg" alt="img2" class="img__slider" />


		<div class="suivant">

		</div>
		<div class="precedent">

		</div>
	</div>
	<script src="js/slider.js"></script>



	<!-- Start Small Banner  -->

	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="section-title" id="idCategorieAccueil">
						<h2>Catégories</h2>
					</div>
				</div>
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Catégorie1</p>
							<h3>Nom : <br> Catégorie1</h3>
							<a href="#">Voir tout</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Catégorie2</p>
							<h3>Nom: <br> Catégorie2</h3>
							<a href="#">Voir tout</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Catégorie3</p>
							<h3>Nom: <br> Catégorie3</h3>
							<a href="#">Voir tout</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->

	<!-- Start Product Area -->
	<div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title" id="#idProduitAccueil">
						<h2>Nos Produits</h2>
					</div>
				</div>
				<div class="col-12">
					<div class="product-info">

						<div class="tab-content" id="myTabContent">

							<!-- Start Single Tab -->
							<div class="tab-pane fade show active" id="man" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/produit1.jpg" alt="#">
														<img class="hover-img" src="images/produit1.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="produit.php"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
																	Wishlist</span></a>
															<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
																	Compare</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">زيتون</a></h3>
													<div class="product-price">
														<span>0,750dt/100g</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/produit2.jpg" alt="#">
														<img class="hover-img" src="images/produit2.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
																	Wishlist</span></a>
															<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
																	Compare</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">زعتر</a></h3>
													<div class="product-price">
														<span>1dt/100g</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/produit3.jpg" alt="#">
														<img class="hover-img" src="images/produit3.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
																	Wishlist</span></a>
															<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
																	Compare</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">فلفل أحمر مرحي</a></h3>
													<div class="product-price">
														<span>2,5dt/100g</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="images/produit5.jpg" alt="#">
														<img class="hover-img" src="images/produit5.jpg" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
																	Wishlist</span></a>
															<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
																	Compare</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">نعناع مرحي</a></h3>
													<div class="product-price">
														<span>0,350dt/100g</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Product Area -->

	<div class="row">
		<div class="col-12" id="idPromotionAccueil">
			<div class="section-title">
				<h2>Nos Promotions</h2>
			</div>
		</div>
	</div>

	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">

			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/promo1.jpg" alt="#">
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/promo2.jpg" alt="#">

					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	<br>
	<br>
	<br>



	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="col-12" id="idBlogAccueil">
			<div class="section-title">
				<h2>Blog</h2>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="images/Blog1.jpg" alt="#">
						<div class="content">
							<p class="date">22 July , 2020. Monday</p>
							<a href="#" class="title">Ouverture de notre magasin</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="images/Blog2.jpg" alt="#">
						<div class="content">
							<p class="date">22 July, 2020. Monday</p>
							<a href="#" class="title">Photos d'exposition d'EL KRAM</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="images/Blog3.jpg" alt=" #">
						<div class="content">
							<p class="date">22 July, 2020. Monday</p>
							<a href="#" class="title">Dés maintenant,Payez-vous par Carte</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->

	<div class="row">
		<div class="col-12">
			<div class="section-title" id="idAboutAsAccueil">
				<h2>A propos de nous</h2>
			</div>
		</div>
	</div>
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="images/Apropos.jpg" alt="#">
						</div>
					</div>
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">مامية، المونة الزمنية</h3>
								<p class="text">Une épicerie est un commerce de détail de proximité de denrées alimentaires mais distribue également une diversité de produits sans rapport avec l'alimentation. L'épicerie est aussi, depuis l'avènement de la grande distribution, un secteur d'activité lié à l'achat des denrées alimentaires sèches et appertisées et à leurs ventes au sein d'un magasin ou d'une centrale d'achat de la grande distribution.. </p>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2024/02/30"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->





	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<!-- Product Slider -->
							<div class="product-gallery">
								<div class="quickview-slider-active">
									<div class="single-slider">
										<img src="https://via.placeholder.com/569x528" alt="#">
									</div>
									<div class="single-slider">
										<img src="https://via.placeholder.com/569x528" alt="#">
									</div>
									<div class="single-slider">
										<img src="https://via.placeholder.com/569x528" alt="#">
									</div>
									<div class="single-slider">
										<img src="https://via.placeholder.com/569x528" alt="#">
									</div>
								</div>
							</div>
							<!-- End Product slider -->
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="quickview-content">
								<h2>زيتون</h2>
								<div class="quickview-ratting-review">
									<div class="quickview-ratting-wrap">
										<div class="quickview-ratting">
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a href="#"> (1 customer review)</a>
									</div>
									<div class="quickview-stock">
										<span><i class="fa fa-check-circle-o"></i> in stock</span>
									</div>
								</div>
								<h3>0,750/100g</h3>
								<div class="quickview-peragraph">
									<p>من أشهى وصفات الزيتون المخلل هو الزيتون المدقوق أو كما يعرف في تونس بالزيتون (المفشخ) وهو يجهز بطريقة سريعة إذ يمكنكم البدء في تناوله بعد يوم واحد من صنعه.
										.</p>
								</div>
								<div class="quantity">
									<!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</div>
								<div class="add-to-cart">
									<a href="#" class="btn">Add to cart</a>
									<a href="#" class="btn min"><i class="ti-heart"></i></a>
									<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
								</div>
								<div class="default-social">
									<h4 class="share-now">Share:</h4>
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal end -->

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
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
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

</html>