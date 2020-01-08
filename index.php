<?php 
define('MAIL_DESTINATAIRE','contact@presentation-matters.com');
define('MAIL_SUJET','Contact Form - Website');

if(!empty($_POST)){
extract($_POST);
	$valid = true;

if($valid){
$mail_entete = "MIME-Version: 1.0\r\n";
$mail_entete .= "From: {$_POST['nom']} "
             ."<{$_POST['email']}>\r\n";
$mail_entete .= 'Reply-To: '.$_POST['email']."\r\n";
$mail_entete .= 'Content-Type: text/plain; charset="utf-8"';
$mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
$mail_entete .= 'X-Mailer:PHP/' . phpversion()."\r\n";

// préparation du corps du mail
$mail_corps = "Nom : $nom\n";
$mail_corps .= "Company : $company\n";
$mail_corps .= "Phone : $phone\n";
$mail_corps .= "Email : $email\n";
$mail_corps .= "Message : $message\n";


// envoi du mail
if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {

  //Le mail est bien expédié
  $erreur = "<h2>Thank you!</h2>";
  		unset($nom);
		unset($company);
		unset($phone);
		unset($email);
		unset($message);
		}
		else{
			$erreur = "Sorry, an error has occurred";
		}
	}	
}

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Presentation Matters</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Presentation Matters - Can good design be fast and inexpensive?">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" type="text/css" href="css/contact-form.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-62969432-1', 'auto');
			ga('send', 'pageview');
		</script>

	</head>
	<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

		<div class="body">
			<header id="header" class="header-narrow">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo">
									<a href="#">
										<img alt="Porto" width="150" height="134" src="img/logo-default.svg">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main" id="home">
				<section class="section-video">
					<div class="row" >
						<video autoplay muted loop id="videopm">
						  	<source src="img/pm-video.mp4" type="video/mp4">
						</video>
					</div>
				</section>
				
				<section class="section intro">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2><font style="font-family: 'Raleway', sans-serif; font-size: 0.8em">Good Design.</font> Fast and inexpensive.</h2>
								<p>That’s what we do.<br/>For 10 years, <strong>PresentationMatters</strong> has been successfully fulfilling its mission to genuinely support Marketing &amp; Communication departments in producing <button class="accordion" style="font-weight: bold; text-decoration: underline; color: #f04e5e;">high volumes of digital and print collaterals</button></p>

								<div id="content">
									<div class="card card-default">
										<div class="card-body">
											<div class="featured-boxes featured-boxes-style-7">
												<div class="row">
													<div class="col-md-3">
														<div class="featured-box featured-box-primary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-globe"></i>
																<h4>Web Banners</h4>
																<p>Adroll/Adwords, Facebook, LinkedIn, HTML5, GIF, Static</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-secondary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-map"></i>
																<h4>Booth Design</h4>
																<p>We provide print-ready files for your local builder</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-tertiary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-object-group"></i>
																<h4>Presentations</h4>
																<p>Keynotes, PPT, Prezi</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-quaternary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-envelope-open"></i>
																<h4>eBlasts</h4>
																<p>Coding of HTML emails, testing and optimization</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="featured-box featured-box-primary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-code"></i>
																<h4>Landing Pages</h4>
																<p>We provide optimized HTML landing pages for your campaigns</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-secondary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-file-image"></i>
																<h4>Posters/Roll-Ups</h4>
																<p>Print-ready optimized and debugged files for your local printer</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-tertiary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-file"></i>
																<h4>Flyers/Brochures</h4>
																<p>Print-ready files brand-compliant files</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-quaternary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-video"></i>
																<h4>Video</h4>
																<p>Filming, sound recording, editing and post-production</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="featured-box featured-box-primary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-indent"></i>
																<h4>Desktop Publishing</h4>
																<p>Print-ready and brand-compliant files (catalogs, white papers, reports, ...)</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-secondary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-film"></i>
																<h4>Motion Design</h4>
																<p>Scripting, design, production and post-production of explainer videos</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-tertiary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-chart-pie"></i>
																<h4>Infographics</h4>
																<p>Clear and creative infographics in which format enhances the message</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="featured-box featured-box-quaternary featured-box-effect-7">
															<div class="box-content">
																<i class="icon-featured fa fa-graduation-cap"></i>
																<h4>eLearning</h4>
																<p>SCORM-compliant eLearning files ready for your LMS</p>
															</div>
														</div>
													</div>
												</div>
											</div>                                            
										</div>
									</div>
								</div>

								<p>Inspired by manufacturing and air traffic control, PresentationMatters develops and delivers collaterals efficiently, from quote to source files, thanks to <strong>specific workflows and processes</strong>, an agency culture in which graphic design unequivocally serves the business need - <strong>speed, relevance, and economy</strong>.</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section dna-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h2 class="mb-sm" style="font-family: 'mega_freshregular'; color: #ffffff; font-size: 3.2em; font-weight: lighter">Our <font style="font-family: 'Raleway', sans-serif; font-size: 0.8em">DNA</font></h2>
								<hr class="separator">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-sm-5">
								<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300" style="margin: 45px 0 10px;">
									<div class="feature-box-icon">
										<img src="img/dot.png">
									</div>
									<div class="feature-box-info">
										<p>Initially founded to provide graphic support to strategy consulting firms</p>
									</div>
								</div>
								<div class="feature-box feature-box-style-2 reverse mt-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600" style="margin-bottom: 30px">
									<div class="feature-box-icon">
										<img src="img/dot.png">
									</div>
									<div class="feature-box-info">
										<p>Speed and accuracy</p>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-sm-2 disappear" style="height: 237px;">
								<div id="one" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="onex" style="font-size: 30px;">&bull;</div>
								<div id="two" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="twox" style="font-size: 30px;">&bull;</div>
								<div id="three" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="four" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="five" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="six" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="threex" style="font-size: 30px;">&bull;</div>
								<div id="fourx" style="font-size: 30px;">&bull;</div>
								<div id="fivex" style="font-size: 30px;">&bull;</div>
								<div id="sixx" style="font-size: 30px;">&bull;</div>
								<div id="seven" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="sevenx" style="font-size: 30px;">&bull;</div>
								<div id="eight" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="eightx" style="font-size: 30px;">&bull;</div>
								<div id="nine" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="ninex" style="font-size: 30px;">&bull;</div>
								<div id="ten" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="tenx" style="font-size: 30px;">&bull;</div>
								<div id="eleven" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="elevenx" style="font-size: 30px;">&bull;</div>
								<div id="twelve" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="twelvex" style="font-size: 30px;">&bull;</div>
								<div id="thirt" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="thirtx" style="font-size: 30px;">&bull;</div>
								<div id="fourt" style="font-size: 30px;color: #ffffff;">&bull;</div>
								<div id="fourtx" style="font-size: 30px;">&bull;</div>
							</div>
							<div class="col-lg-5 col-sm-5" style="text-align: left">
								<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="300" style="margin: 45px 0 30px;">
									<div class="feature-box-icon">
										<img src="img/dot.png">
									</div>
									<div class="feature-box-info">
										<p>Creative, yet rigourous</p>
									</div>
								</div>
								<div class="feature-box feature-box-style-2 mt-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="600" style="margin-bottom: 30px">
									<div class="feature-box-icon">
										<img src="img/dot.png">
									</div>
									<div class="feature-box-info">
										<p>25 years of experience</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section samples">
					<div class="container">
						<h2>A few <font style="font-family: 'Raleway', sans-serif; font-size: 0.8em">samples</font> of our work...</h2>
						<ul class="nav nav-pills sort-source">
							<li class="nav-item"><button class="accordion-online">Online</button></li>
							<li class="nav-item"><button class="accordion-print">Print</button></li>
							<li class="nav-item"><button class="accordion-video">Video</button></li>
						</ul>

						<div id="content-online">
							<div class="row products product-thumb-info-list mt-4 pt-2">
								<div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_03.jpg">
										<img class="img-fluid" src="img/Projets/Proj_03.jpg" width="180" height="180" alt="Direct Data Solution">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_05.jpg">
										<img class="img-fluid" src="img/Projets/Proj_05.jpg" width="180" height="180" alt="IATA - Agent Experience">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_06.jpg">
										<img class="img-fluid" src="img/Projets/Proj_06.jpg" width="180" height="180" alt="Veolia">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_17.jpg">
										<img class="img-fluid" src="img/Projets/Proj_17.jpg" width="180" height="180" alt="Amadeus">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_18.jpg">
										<img class="img-fluid" src="img/Projets/Proj_18.jpg" width="180" height="180" alt="ACI">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_19.jpg">
										<img class="img-fluid" src="img/Projets/Proj_19.jpg" width="180" height="180" alt="IATA - Business Intelligence Services">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_20.jpg">
										<img class="img-fluid" src="img/Projets/Proj_20.jpg" width="180" height="180" alt="IATA Financial Gateway">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_21.jpg">
										<img class="img-fluid" src="img/Projets/Proj_21.jpg" width="180" height="180" alt="IATA Training">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_22.jpg">
										<img class="img-fluid" src="img/Projets/Proj_22.jpg" width="180" height="180" alt="ACI">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_23.jpg">
										<img class="img-fluid" src="img/Projets/Proj_23.jpg" width="180" height="180" alt="IATA Training">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_24.jpg">
										<img class="img-fluid" src="img/Projets/Proj_24.jpg" width="180" height="180" alt="IATA">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_25.jpg">
										<img class="img-fluid" src="img/Projets/Proj_25.jpg" width="180" height="180" alt="IATA Training">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_26.jpg">
										<img class="img-fluid" src="img/Projets/Proj_26.jpg" width="180" height="180" alt="IATA Training">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_27.jpg">
										<img class="img-fluid" src="img/Projets/Proj_27.jpg" width="180" height="180" alt="IATA Global Training Partner Conference">
									</a>
								</div>
							</div>
						</div>

						<div id="content-print">
							<div class="row products product-thumb-info-list mt-4 pt-2">
								<div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_01.jpg">
										<img class="img-fluid" src="img/Projets/Proj_01.jpg" width="180" height="180" alt="NDC">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_02.jpg">
										<img class="img-fluid" src="img/Projets/Proj_02.jpg" width="180" height="180" alt="Global Green Growth Institute">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_04.jpg">
										<img class="img-fluid" src="img/Projets/Proj_04.jpg" width="180" height="180" alt="IATA">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_07.jpg">
										<img class="img-fluid" src="img/Projets/Proj_07.jpg" width="180" height="180" alt="">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_08.jpg">
										<img class="img-fluid" src="img/Projets/Proj_08.jpg" width="180" height="180" alt="ACI">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_09.jpg">
										<img class="img-fluid" src="img/Projets/Proj_09.jpg" width="180" height="180" alt="Amadeus">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_10.jpg">
										<img class="img-fluid" src="img/Projets/Proj_10.jpg" width="180" height="180" alt="IATA Global Training Partner Conference">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_11.jpg">
										<img class="img-fluid" src="img/Projets/Proj_11.jpg" width="180" height="180" alt="Amadeus Master Price">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_12.jpg">
										<img class="img-fluid" src="img/Projets/Proj_12.jpg" width="180" height="180" alt="Initiative Intrapreneuriale">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_13.jpg">
										<img class="img-fluid" src="img/Projets/Proj_13.jpg" width="180" height="180" alt="ACI Global Training">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_14.jpg">
										<img class="img-fluid" src="img/Projets/Proj_14.jpg" width="180" height="180" alt="ACI ASQ">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_15.jpg">
										<img class="img-fluid" src="img/Projets/Proj_15.jpg" width="180" height="180" alt="ACI">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_16.jpg">
										<img class="img-fluid" src="img/Projets/Proj_16.jpg" width="180" height="180" alt="NDC">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_28.jpg">
										<img class="img-fluid" src="img/Projets/Proj_28.jpg" width="180" height="180" alt="IATA">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_29.jpg">
										<img class="img-fluid" src="img/Projets/Proj_29.jpg" width="180" height="180" alt="IATA Training">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_30.jpg">
										<img class="img-fluid" src="img/Projets/Proj_30.jpg" width="180" height="180" alt="IATA">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_31.jpg">
										<img class="img-fluid" src="img/Projets/Proj_31.jpg" width="180" height="180" alt="IATA">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_32.jpg">
										<img class="img-fluid" src="img/Projets/Proj_32.jpg" width="180" height="180" alt="IATA">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_33.jpg">
										<img class="img-fluid" src="img/Projets/Proj_33.jpg" width="180" height="180" alt="IATA">
									</a>
									<a class="img-thumbnail d-inline-block mb-1 mr-1" href="img/Projets/Proj_35.jpg">
										<img class="img-fluid" src="img/Projets/Proj_35.jpg" width="180" height="180" alt="Global Green Growth Institute">
									</a>
								</div>
							</div>
						</div>

						<div id="content-video" class="mt-4 pt-2">
							<div class="row">
								<div >
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/GFcXzd7MlYE?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/JtJw65j6r_8?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/nXn8GNdQFn4?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/I8UhD4ooQt0?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/bK8_IQoAyK4?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/KAee2udlB2I?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/-BzOxhwNkp8?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/--jBLQdX9n0?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/3mAOi67bONE?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/J5lpv7q4WJI?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/yUHWTBvuITM?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/SKZf3K4iP3U?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/4YStYPsBDJo?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/cPFaeyHzbJ0?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/6BPWaqfR8b4?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/O2kjWO1_KzU?showinfo=0&amp;wmode=opaque"></iframe>
									</div>
									<div class="img-thumbnail d-inline-block mb-1 mr-1">
										<iframe frameborder="1" allowfullscreen="" src="http://www.youtube.com/embed/T7wR4_tGQic?showinfo=0&amp;wmode=opaque"></iframe>
									</div>                                                                        

								</div> 
							</div>
						</div>

					</div>
				</section>

				<section class="section features">
					<div class="container">
						<h2 class="mb-sm" style="font-family: 'mega_freshregular'; color: #ffffff; font-size: 3.2em; font-weight: lighter">Design with a <font style="font-family: 'Raleway', sans-serif; font-size: 0.8em">fixed price</font> model</h2>
						<hr class="separator">
						<div class="featured-boxes featured-boxes-style-3">
							<div class="row">
								<div class="col-lg-4">
									<div class="featured-box featured-box-primary">
										<div class="box-content">
											<i class="icon-featured fas fa-eye"></i>
											<p>Gives you<br/>visibility and stability</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="featured-box featured-box-secondary">
										<div class="box-content">
											<i class="icon-featured fas fa-cogs"></i>
											<p>Makes hourly<br/>billing a thing of the past</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="featured-box featured-box-tertiary">
										<div class="box-content">
											<i class="icon-featured fas fa-search"></i>
											<p>Transparency,<br/>no overruns, no surprises</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="featured-box featured-box-primary">
										<div class="box-content">
											<i class="icon-featured fas fa-battery-full"></i>
											<p>You buy<br/>efficiency</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="featured-box featured-box-secondary">
										<div class="box-content">
											<i class="icon-featured fas fa-check"></i>
											<p>We get it<br/>right the first time</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="featured-box featured-box-tertiary">
										<div class="box-content">
											<i class="icon-featured fas fa-dollar-sign"></i>
											<p>Predictable cost,<br/>accurate budget allocation</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="section references">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="mb-sm" style="font-family: 'mega_freshregular'; color: #6A6B6B; font-size: 3.2em; font-weight: lighter">Some of our <font style="font-family: 'Raleway', sans-serif; font-size: 0.8em">references</font></h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-1.png" alt="Veolia">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-2.png" alt="IATA">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-3.png" alt="ACI">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-4.png" alt="World Trade Centers Association">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-5.png" alt="SteriPro">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-6.png" alt="Rise Conseil">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-7.png" alt="Net's Five">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-8.png" alt="Lafarge">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-9.png" alt="Euro RSCG Worldwide">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-10.png" alt="Dalkia">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-11.png" alt="Atout France">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-12.png" alt="Allergan">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-13.png" alt="Air Transat">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-14.png" alt="Astrium">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-15.png" alt="CCUM">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-16.png" alt="Equant">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-17.png" alt="Grant Thornton">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-18.png" alt="Mobile Simple">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-19.png" alt="Roland Berger">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-20.png" alt="Smurfit Kappa">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-21.png" alt="Trévéon Téléphone">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-22.png" alt="Travelport">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-23.png" alt="SITA">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-24.png" alt="PS Soft">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-25.png" alt="Marriott">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-26.png" alt="Galderma">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-27.png" alt="DTI">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-28.png" alt="Canal +">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-29.png" alt="Ariane">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-30.png" alt="Air France">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-31.png" alt="Addax Petroleum">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-32.png" alt="Amadeus">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-33.png" alt="Banque Transatlantique">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-34.png" alt="Diamond Aircraft">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-35.png" alt="ETSI">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-36.png" alt="Les Petits Chaperons Rouges">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-37.png" alt="Orange">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-38.png" alt="Sea Sat Com">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-39.png" alt="The Hive">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-40.png" alt="Thales">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-41.png" alt="Rivoyre Ingenierie">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-42.png" alt="Nortel Networks">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-43.png" alt="La Poste">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-44.png" alt="European Society of Cardiology">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-45.png" alt="Desjardins">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-46.png" alt="Bain & Company">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-47.png" alt="Allot">
							</div>
							<div class="col-sm-2">
								<img class="img-fluid" src="img/logos/logo-48.png" alt="Accenture">
							</div>
						</div>
					</div>
				</section>

				<section class="section contact-form">
					<div class="container-contact100">
						<div class="contact100-map" id="google_map" data-map-x="45.51494" data-map-y="-73.56267" data-pin="img/logo_marker_maps.png" data-scrollwhell="0" data-draggable="1"></div>

						<!--<div class="wrap-contact100">

							<span class="contact100-form-title">
								<h2 class="mb-sm" style="font-family: 'mega_freshregular'; color: #f04e5e; font-size: 2em; font-weight: lighter">Contact <font style="font-family: 'Raleway', sans-serif; font-size: 0.5em">Us</font></h2>
							</span>

						    <form class="contact100-form validate-form" action="#google_map" method="POST">
								<div class="wrap-input100 validate-input" data-validate="Name is required">
									<span class="label-input100">Name</span>
										<input class="input100" required type="text" name="name" placeholder="">
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Company is required">
									<span class="label-input100">Company</span>
										<input class="input100" required type="text" name="company" placeholder="">
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<span class="label-input100">Email</span>
										<input class="input100" required type="text" name="email" placeholder="">
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100">
									<span class="label-input100">Phone</span>
										<input class="input100" type="text" name="phone" placeholder="">
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input message" data-validate = "Message is required">
									<span class="label-input100">Message</span>
										<textarea class="input100" required name="message" placeholder=""></textarea>
									<span class="focus-input100"></span>
								</div>

								<div class="container-contact100-form-btn">
									<div class="wrap-contact100-form-btn">
										<div class="contact100-form-bgbtn">
											<input type="submit" name="submit" value="Send" class="contact100-form-btn">
										</div>
									</div>
								</div>
							</form>
							<?php if(isset($erreur)){ echo "<p>$erreur</p>"; }?>
						</div>-->
					</div>
				</section>
			</div>

			<footer class="short" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-lg-offset-1">
							<h5 class="mb-2">Social Media</h5>
							<ul class="social-icons">
								<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/5071856/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-4">
							<a href="#" class="logo">
								<img alt="Presentation Matters" src="img/logo-footer.svg" height="68">
							</a>
						</div>
						<div class="col-lg-4">
							<p><br/>© Copyright 2018. All Rights Reserved.</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.portfolio.js"></script>
		<script src="js/examples/examples.carousels.js"></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
		<script src="js/map-custom.js"></script>

	</body>
</html>
