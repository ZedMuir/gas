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

    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if(!$res['success']){
      // Error
    }

    function reCaptcha($recaptcha){
      $secret = "6LcssHkaAAAAAPjW8rQ6Uhplr35CzhxIu-eQqAZ0";
      $ip = $_SERVER['REMOTE_ADDR'];

      $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
      $url = "https://www.google.com/recaptcha/api/siteverify";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
      $data = curl_exec($ch);
      curl_close($ch);

      return json_decode($data, true);
    }

    // Send Message
    mail( "john.greydells@gmail.com", "Contact From Website",
    "Name: $name \nPhone number: $phone\nMobile number: $mobile\nEmail Address: $email\n\nService required: $service\nContact: $contact\n\nEnquiry: $enquiry",
    "From: $email" . "\r\n" . "Bcc: steve.g.muir@gmail.com");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> <!-- Fav Icon -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="The confirmation page for the Greydells Accounting Services contact form." />
    <meta name="keywords" content="greydells, accounting, services, accountant, tax services, stevenage, hertfordshire, herts, bookkeeping, finacial, finance, tax return, paye, mortgage, investment, john jenkins, nicola sutton, mathew jervis, hitchin, letchworth, graveley" />
    <meta name="author" content="Steve Muir, Alpine Warrior Pigeon" />
    <title>Greydells Accounting Services; Thank you</title>
    <link rel="stylesheet" type="text/css" href="styles/reset.css" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Header -->
      <header>
        <figure>
          <img src="images/logo.jpg" alt="Greydells Accounting Services" />
          <figcaption></figcaption>
        </figure>
      </header>
      <nav class="menu"><!-- Top Navigation Bar -->
        <button aria-expanded="false" aria-controls="menu-list">
          <span class="open">☰</span>
          <span class="close">×</span>
          Menu
        </button>
        <ul id="menu-list">
          <li>
            <a href="index.html">home</a>
          </li>
          <li>
            <a href="services.html">services</a>
          </li>
          <li>
            <a href="staff.html">staff</a>
          </li>
          <li>
            <a href="contact.html">contact</a>
          </li>
          <li>
            <a href="location.html">location</a>
          </li>
        </ul>
      </nav>
      <!-- Main content -->
      <div class="content">
        <hgroup>
          <h1> Thank You </h1>
          <h2> Someone will be in touch soon </h2>
        </hgroup>
        <!-- Contact Details -->
        <div class="details">
          <section class="contact">
              <p class="tel">Phone: <a href="tel:+441438210422">01438 210422</a></p>
              <p class="e-address">Email: <a href="mailto:john.greydells@gmail.com">john.greydells&#64;gmail.com</a></p>
          </section>
        </div>
        <!-- End Contact Details -->
      </div>
       <!-- Footer -->
      <footer>
        <hr>
        <address>
          Copyright <sup>&copy;</sup> <a href="mailto:alpinewarriorpigeon@gmail.com?subject=Web%20Design">Alpine Warrior Pigeon</a>
        </address>
      </footer>
    </div>
    <!-- Collapsing nav menu function -->
    <script>
      const navButton = document.querySelector('button[aria-expanded]');

      function toggleNav({ target }) {
        const expanded = target.getAttribute('aria-expanded') === 'true' || false;
        navButton.setAttribute('aria-expanded', !expanded);
      }

      navButton.addEventListener('click', toggleNav);
    </script>
    <script> 
      var $buoop = {required:{e:-4,f:-3,o:-3,s:-1,c:-3},insecure:true,api:2020.07 }; 
      function $buo_f(){ 
      var e = document.createElement("script"); 
      e.src = "//browser-update.org/update.min.js"; 
      document.body.appendChild(e);
      };
      try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
      catch(e){window.attachEvent("onload", $buo_f)}
</script>
  </body>
</html>
