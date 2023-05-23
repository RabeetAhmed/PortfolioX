<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<!-- Meta Data -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="author" content="Rabeet Ahmed" />
	<meta name="description" content="Rabeet Ahmed Resume and Portfolio" />

	<!-- Twitter data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@RabeetAhmed7860">
	<meta name="twitter:title" content="Rabeet Ahmed">
	<meta name="twitter:description" content="Rabeet Ahmed Resume and Portfolio">

	<!-- Open Graph data -->
	<meta property="og:title" content="Resume and Website Design" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="your url website" />
	<meta property="og:description" content="Rabeet Ahmed Resume and Portfolio" />
	<meta property="og:site_name" content="Rabeet Ahmed Resume" />

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-touch-icon-57x57.png">
	<link rel="shortcut icon" href="assets/images/favicons/favicon.png" type="image/png">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="assets/styles/vendors/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0HGH07LJVK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0HGH07LJVK');
</script>

</head>

<body>
	<main class="main">
		<div class="container gutter-top gutter-bottom">
			<div class="row sticky-parent">
				<!-- Sidebar -->
				<aside class="col-12 col-md-12 col-xl-3">
					<div class="sidebar box-outer sticky-column">
						<!-- My photo -->
						<div class="sidebar__base-info">
							<figure class="avatar-box">
								<img src="assets/images/my-avatar.jpg" alt="Rabeet Ahmed">
							</figure>

							<div class="text-xl-center">
								<h3 class="title title--h3 sidebar__name">Rabeet Ahmed</h3>
								<div class="badge">Full Stack Designer</div>
							</div>

							<button class="btn btn--small btn--icon-right sidebar__btn js-btn-toggle"><span>Show
									Contacts</span><i class="feathericon-chevron-down"></i></button>
						</div>

						<div class="sidebar__additional-info js-show">
							<div class="separation"></div>
							<ul class="details-info">
								<!-- Email -->
								<li class="details-info__item">
									<span class="box icon-box"><i class="font-icon icon-envelope"></i></span>
									<div class="contacts-block__info">
										<span class="overhead">Email</span>
										<a class="text-overflow" href="mailto:rabeet0846551@gmail.com"
											title="rabeet0846551@gmail.com">rabeet0846551@gmail.com</a>
									</div>
								</li>
								<!-- Phone -->
								<li class="details-info__item">
									<span class="box icon-box"><i class="font-icon icon-phone"></i></span>
									<div class="contacts-block__info">
										<span class="overhead">Phone</span>
										<a class="text-overflow" href="tel:+923110846551" title="+92 311 0846551">+92 311 0846551</a>
									</div>
								</li>
								<!-- Birthday -->
								<li class="details-info__item">
									<span class="box icon-box"><i class="font-icon icon-calendar"></i></span>
									<div class="contacts-block__info">
										<span class="overhead">Birthday</span>
										<span class="text-overflow" title="December 8, 2003">December 8, 2003</span>
									</div>
								</li>
								<!-- Location -->
								<li class="details-info__item">
									<span class="box icon-box"><i class="font-icon icon-location"></i></span>
									<div class="contacts-block__info">
										<span class="overhead">Location</span>
										<span class="text-overflow" title="Korangi, Karachi">Korangi, Karachi</span>
									</div>
								</li>
							</ul>
							<div class="separation d-xl-none"></div>

							<!-- Social -->
							<div class="social">
								<a class="social__link" href="https://www.facebook.com/rabeetahmed786"
									target="_blank"><i class="feathericon-facebook"></i></a>
								<a class="social__link" href="https://www.linkedin.com/rabeetahmed" target="_blank"><i
										class="feathericon-linkedin"></i></a>
								<a class="social__link" href="https://www.instagram.com/rabeetahmed786"
									target="_blank"><i class="feathericon-instagram"></i></a>
							</div>
						</div>
					</div>
				</aside>

				<!-- Content -->
				<div class="col-12 col-md-12 col-xl-9">
					<div class="box-outer">
						<!-- Menu -->
						<div class="nav-container">
							<ul class="nav">
								<li class="nav__item"><a class="<?php if($page=='index'){echo 'active';}?>" href="index.php">About</a></li>
								<li class="nav__item"><a class="<?php if($page=='resume'){echo 'active';}?>" href="resume.php">Resume</a></li>
								<li class="nav__item"><a class="<?php if($page=='portfolio'){echo 'active';}?>" href="portfolio.php">Portfolio</a></li>
								<li class="nav__item"><a class="<?php if($page=='contact'){echo 'active';}?>" href="contact.php">Contact</a></li>
							</ul>
						</div>
