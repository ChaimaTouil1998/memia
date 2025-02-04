<?php
session_start();

//Vérifier si l'utilisateur est faux => redirection vers la page de connexion 

if (isset($_SESSION['nom'])) {
	//header('location:profile.php');
}


include "../inc/function.php";
$user = true;
if (!empty($_POST)) {   //click sur le bouton sauvegarder 

	$user = ConnectAdmin($_POST);
	if (is_array($user) && count($user) > 0) { // si l'admin connecter, 
		session_start();
		$_SESSION['email'] = $user['email'];
		$_SESSION['nom'] = $user['nom'];
		$_SESSION['mp'] = $user['mp'];


		header('location:profile.php'); // redirection vers le profile de user 


	}
}


//connexion base de données
require '../accesstest.php';


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
	<title>Memia - Epicerie.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="../css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="../css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="../css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="../css/slicknav.min.css">

	<!-- Mamia StyleSheet -->
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../css/responsive.css">



</head>

<body class="js">


	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
			<div class="contact-head">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="form-main">
							<div class="titale">
								<h4>Espace Admin : Connexion</h4>

							</div>
							<form class="form" method="post" action="connexion.php">
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Email<span>*</span></label>
											<input name="email" type="email" placeholder="Entrer votre email">
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Mot de passe<span>*</span></label>
											<input name="mp" type="password" placeholder="Entrer votre mot de passe">
										</div>
									</div>

									<div class="col-lg-6 col-12">

									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="btn ">Se connecter</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact -->

	<!-- Map Section -->
	<div class="map-section">
		<div id="myMap"></div>
	</div>
	<!--/ End Map Section -->


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
								<a href="index.php"><img src="images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>Mamia@shop.com</li>
									<li>+032 3456 7890</li>
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
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
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
</body>
<script>
	"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.11/sweetalert2.all.min.js"
</script>
<?php
if (!$user) {
	print "
	<script>
	Swal.fire({
		title: 'Erreur!',
		text : 'Cordonnées non valides.',
		icon : 'error',
		confirmButtonText : 'ok',
		timer : 2000
	})
	</script>
	";
}

?>

</html>