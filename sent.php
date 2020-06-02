<?php
    // Get Data
    $name= $_REQUEST["name"]; // Works for both get and post, as opposed to $_GET["name"] or $_POST["name"];
    $phone= $_REQUEST["phone"];
    $mobile= $_REQUEST["mobile"];
    $email= $_REQUEST["email"];
    $service= $_REQUEST["service"];
    $contph= $_REQUEST["method_0"];
    $contmo= $_REQUEST["method_1"];
    $contem= $_REQUEST["method_2"];
    $enquiry=$_REQUEST["enquiry"];
		foreach($_REQUEST['contact'] as $value) {
			$contact .= "$value, ";
}

    // Send Message
    mail( "john.greydells@gmail.com", "Contact From Website",
    "Name: $name \nPhone number: $phone\nMobile number: $mobile\nEmail Address: $email\n\nService required: $service\nContact: $contact\n\nEnquiry: $enquiry",
    "From: $email" . "\r\n" . "Bcc: steve.g.muir@gmail.com");
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> <!-- Fav Icon -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-language" content="en-gb" />
		<meta name="description" content="The confirmation page for the Greydells Accounting Services contact form." />
		<meta name="keywords" content="greydells, accounting, services, accountant, tax services, stevenage, hertfordshire, herts, bookkeeping, finacial, finance, tax return, paye, mortgage, investment, john jenkins, nicola sutton, ross jones, hitchin, letchworth, graveley" />
		<meta name="author" content="Steve Muir, Alpine Warrior Pigeon" />
		<title>Greydells Accounting Services; Thank you</title>
		<link rel="stylesheet" type="text/css" href="greydells2.css" />
		<!--[if lt IE9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
	<div id="page">
<!-- Header -->
		<header>
			<figure>
				<img src="images/logo.png" alt="Greydells Accounting Services" />
				<figcaption></figcaption>
			</figure>
			<nav>  <!-- Top Navigation Bar -->
				<ul>
					<li><a href="index.html">home</a></li>
					<li><a href="services.html">services</a></li>
					<li><a href="staff.html">staff</a></li>
					<li><a href="contact.html">contact</a></li>
					<li><a href="location.html">location</a></li>
				</ul>
			</nav>
		</header>
<!-- Main content -->
		<div id="content">
			<hgroup>
				<h1> Thank You </h1>
				<h2 class="lift"> Someone will be in touch soon </h2>
			</hgroup>
<!-- Contact Details -->
				<section id="contact">
					<p id="tel">Phone: <a href="tel:+441438210422">01438 210422</a></p>
					<p id="e-address">Email: <a href="mailto:john.greydells@gmail.com">john.greydells&#64;gmail.com</a></p>
					<p id="address">Address: <span class="gas">greydells accounting services, 129b High Street, Stevenage, Herts SG1 3HS</span></p>
				</section>
<!-- End Contact Details -->
		</div>
<!-- Footer -->
		<footer>  <!-- Bottom Navigation Bar -->
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><img src="images/bullet.png" alt="::" /></li>
				<li><a href="services.html">Services</a></li>
				<li><img src="images/bullet.png" alt="::" /></li>
				<li><a href="staff.html">Staff</a></li>
				<li><img src="images/bullet.png" alt="::" /></li>
				<li><a href="contact.html">Contact</a></li>
				<li><img src="images/bullet.png" alt="::" /></li>
				<li><a href="location.html">Location</a></li>
			</ul>
			<address> Copyright &copy; <a href="mailto:alpinewarriorpigeon@gmail.com?subject=Web%20Design">Alpine Warrior Pigeon</a></address>
		</footer>
	</div>
	</body>
</html>
