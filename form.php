<!DOCTYPE html>
<html>
<title>Changing Gears Music</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.cg-slides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="cg-header">
  <div class="cg-nav cg-black cg-card">
    <a class="cg-nav-item cg-button cg-padding-large cg-hide-medium cg-hide-large cg-right" href="javascript:void(0)" onclick="toggleMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="cg-nav-item cg-button cg-padding-large">HOME</a>
    <a href="#band" class="cg-nav-item cg-button cg-padding-large cg-hide-small">BAND</a>
    <a href="#tour" class="cg-nav-item cg-button cg-padding-large cg-hide-small">TOUR</a>
    <a href="form.php" class="cg-nav-item cg-button cg-padding-large cg-hide-small">CONTACT</a>
<!-- Saturday code -->

    <a href="music.html" class="cg-nav-item cg-button cg-padding-large 
    cg-hide-small">MUSIC</a>
    <a href="video.html" class="cg-nav-item cg-button cg-padding-large cg-hide-small">VIDEO</a>

    <div class="cg-dropdown-hover cg-hide-small">
      <button class="cg-padding-large cg-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="cg-dropdown-content cg-nav-block cg-card-4">
        <a href="#" class="cg-nav-item cg-button">Merchandise</a>
        <a href="#" class="cg-nav-item cg-button">Extras</a>
        <a href="#" class="cg-nav-item cg-button">Media</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="cg-padding-large cg-hover-red cg-hide-small cg-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<!-- Navbar on small screens -->
<!-- Navbar on small screens -->
<div id="smallNav" class="cg-nav-block cg-black cg-hide cg-hide-large cg-hide-medium cg-header" style="margin-top:46px">
  <a href="#band" class="cg-nav-item cg-button cg-padding-large">BAND</a>
  <a href="#tour" class="cg-nav-item cg-button cg-padding-large">TOUR</a>
  <a href="form.php" class="cg-nav-item cg-button cg-padding-large">CONTACT</a>
 <a href="#" class="cg-nav-item cg-button cg-padding-large">MERCH</a>
<!-- Saturday code -->
  <a href="music.html" class="cg-nav-item cg-button cg-padding-large">MUSIC</a>
  <a href="video.html" class="cg-nav-item cg-button cg-padding-large">VIDEO</a>
</div>

<!--php -->

<?php include('form_process.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="container">  
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Contact</h3>
    <h4>Contact us today, !</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>