<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to XAMPP</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>
<body>

	<header>
		<img src="img/xampp-logo.svg" width="45">
		<h1>
			<b>XAMPP</b> PROJECT DIRECTORY
		</h1>
	</header>
	<!-- HEADER -->
	<main>
		<div class="container bg-light">
			<div class="content">

				<div class="items">
					<?php include_once('inc/projects.php'); ?>
				</div>

				<div class="items">
					<div class="title">
						<img src="img/tools.png" width="20"> Tools
					</div>
					<ul>
						<li>
							<a href="../phpmyadmin" target="_blank">phpMyAdmin</a>
						</li>
						<li>
							<a href="../dashboard/phpinfo.php" target="_blank">PHPInfo</a>
						</li>
					</ul>
				</div>

				<div class="items">
					<div class="title">
						<img src="img/link.png" width="20"> Links
					</div>
					<ul>
						<li>
							<a href="../applications.html" target="_blank">Applications</a>
						</li>
						<li>
							<a href="../dashboard/faq.html" target="_blank">FAQs</a>
						</li>
						<li>
							<a href="../dashboard/howto.html" target="_blank">HOW-TO Guides</a>
						</li>
					</ul>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="content">
				<h1>Welcome to XAMPP</h1>

				<p>
					You have successfully installed XAMPP on this system! Now you can start using Apache, MariaDB, PHP and other components. You can find more info in the FAQs section or check the HOW-TO Guides for getting started with PHP applications.
				</p>

				<p>
					XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.
				</p>

				<p>Start the XAMPP Control Panel to check the server status.</p>
			</div>
		</div>
	</main>
	<!-- MAIN -->

	<footer id="rodape">
		<p>Copyright (c) 2018, Apache Friends</p>
		<p>&copy; Theme by <a target="_blank" href="//github.com/romulloleal">Romullo Leal</a></p>
	</footer>
</body>
</html>