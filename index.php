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
    <a href="index.php" class="cg-nav-item cg-button cg-padding-large">HOME</a>
    <a href="#band" class="cg-nav-item cg-button cg-padding-large cg-hide-small">BAND</a>
    <a href="#tour" class="cg-nav-item cg-button cg-padding-large cg-hide-small">TOUR</a>
    <a href="form.php" class="cg-nav-item cg-button cg-padding-large cg-hide-small">CONTACT</a>

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
<div id="smallNav" class="cg-nav-block cg-black cg-hide cg-hide-large cg-hide-medium cg-header" style="margin-top:46px">
  <a href="#band" class="cg-nav-item cg-button cg-padding-large">BAND</a>
  <a href="#tour" class="cg-nav-item cg-button cg-padding-large">TOUR</a>
  <a href="form.php" class="cg-nav-item cg-button cg-padding-large">CONTACT</a>
  <a href="#" class="cg-nav-item cg-button cg-padding-large">MERCH</a>
  <!-- Saturday code -->
  <a href="music.html" class="cg-nav-item cg-button cg-padding-large">MUSIC</a>
  <a href="video.html" class="cg-nav-item cg-button cg-padding-large">VIDEO</a>
</div>

<!-- Page content -->
<div class="cg-content" style="margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="cg-slides cg-display-container cg-center">
    <img src="images/bandcg.jpg" style="width:100%">
    <div class="cg-display-bottommiddle cg-container cg-text-white cg-padding-32 cg-hide-small">
      <h3>Changing Gears Music</h3>
      <p><b>Ireland!</b></p>   
    </div>
  </div>
  <div class="cg-slides cg-display-container cg-center">
    <img src="images/eoincg.jpg" style="width:100%">
    <div class="cg-display-bottommiddle cg-container cg-text-white cg-padding-32 cg-hide-small">
      <h3>Changing Gears Music</h3>
      <p><b>Ireland.</b></p>    
    </div>
  </div>
  <div class="cg-slides cg-display-container cg-center">
    <img src="images/cgdrums.jpg" style="width:100%">
    <div class="cg-display-bottommiddle cg-container cg-text-white cg-padding-32 cg-hide-small">
      <h3>Changing Gears Music</h3>
      <p><b>Ireland.</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="cg-container cg-content cg-center cg-padding-64" id="band">
    <h2 class="cg-wide">THE BAND</h2>
    <p class="cg-opacity"><i>About Us</i></p>
    <p class="cg-justify">Changing Gears are an indie-pop-punk concoction engaged in a vainglorious attempt to strip music of its lofty pretensions and just play some good fun music. They feature a blonde one, a tall one, two bald ones and a small one and are here to give you a pleasant musical punch in the gut.
Currently the band reside in dusty old factory on Dublin's east wall, which has been repurposed as a rehearsal studio to assist in their pursuit of making a minor, almost imperceptible, imprint on music culture.
They have played shows in all manner of venues, from salubrious to ramshackle, which has often led to polite applause and even genuine interest. Something the band neither seeks nor desires.
</p>
    <div class="cg-row cg-padding-32">
        <div class="cg-third">
         <p>Eoin</p>
        <img src="images/towercg.jpg" class="cg-circle" alt="Eoin" style="width:60%">
      </div>
        <div class="cg-third">
        <p>Morgan</p>
        <img src="images/morgancg.jpg" class="cg-circle" alt="Morgan" style="width:80%">
      </div>
      <div class="cg-third">
         <p>Colin</p>
        <img src="images/colinlamplightcg.jpg" class="cg-circle cg-margin-bottom" alt="Colin" style="width:60%">
      </div>
      <div class="cg-third">
        <p>Danny</p>
        <img src="images/dannycg.jpg" class="cg-circle cg-margin-bottom" alt="Random Name" style="width:60%">
      </div>
         <div class="cg-third">
        <p>Steve</p>
        <img src="images/stevecg.jpg" class="cg-circle" alt="Steve" style="width:100%">
      </div>
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="cg-black" id="tour">
    <div class="cg-container cg-content cg-padding-64">
      <h2 class="cg-wide cg-center">TOUR DATES</h2>
      <p class="cg-opacity cg-center"><i>Upcoming Shows!</i></p><br>

      <ul class="cg-ul cg-border cg-white cg-text-grey">
        <li class="cg-padding">November <span class="cg-badge cg-right cg-margin-right"> East Side Tavern Dublin 2</span></li>
        <li class="cg-padding">December <span class="cg-badge cg-right cg-margin-right"> No shows scheduled </span></li>
      </ul>

      <div class="cg-row-padding cg-padding-32" style="margin:0 -16px">
        <div class="cg-third cg-margin-bottom">
          <img src="images/eastside.png" alt="East Side Tavern" style="width:100%" class="cg-hover-opacity">
          <div class="cg-container cg-white">
            <p><b>East Side Tavern</b></p>
            <p class="cg-opacity">Thurs 14 Nov 2017</p>
            <p>CHANGING GEARS - 
                Live @ East Side Tavern 
                New Single " Hold on Tight" available now on Spotify.</p>
            <button class="cg-button cg-black cg-margin-bottom" onclick="document.getElementById('modalWindow').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="cg-third cg-margin-bottom">
          <img src="images/workmans.jpg" alt="Workmans" style="width:100%" class="cg-hover-opacity">
          <div class="cg-container cg-white">
            <p><b>Workmans</b></p>
            <p class="cg-opacity">Dec 28 Nov 2017</p>
            <p>Show yet to be announced.</p>
            <button class="cg-button cg-black cg-margin-bottom" onclick="document.getElementById('modalWindow').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="modalWindow" class="cg-modal">
    <div class="cg-modal-content cg-animate-top cg-card-4">
      <header class="cg-container cg-teal cg-center cg-padding-32"> 
        <span onclick="document.getElementById('modalWindow').style.display='none'" 
       class="cg-button cg-teal cg-xlarge cg-display-topright">×</span>
        <h2 class="cg-wide"><i class="fa fa-suitcase cg-margin-right"></i>Tickets</h2>
      </header>
      <div class="cg-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="cg-input cg-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="cg-input cg-border" type="text" placeholder="Enter email">
        <button class="cg-button cg-block cg-teal cg-padding-16 cg-section cg-right">PAY <i class="fa fa-check"></i></button>
        <button class="cg-button cg-red cg-section" onclick="document.getElementById('modalWindow').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="cg-right">Need <a href="#" class="cg-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="cg-container cg-content cg-padding-64" id="contact">
    <h2 class="cg-wide cg-center">CONTACT</h2>
    <p class="cg-opacity cg-center"><i>Please get in touch!</i></p>
    <div class="cg-row cg-padding-32">
      <div class="cg-col m6 cg-large cg-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Dublin,Kerry,Ireland<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +086 3700608<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: management@changinggears.ie<br>
      </div>
      <div class="cg-col m6">
      <?php include('form_process.php'); ?>
      <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
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
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->
<div class="videoWrapper">
<div id="holdontight" style="height:400px;" class="cg-grayscale-max">
    <!-- Copy & Pasted from YouTube -->
<iframe width="560" height="349" src="https://www.youtube.com/embed/U6OzeJTLpCc" frameborder="0" allowfullscreen></iframe>

</div>
</div>

<!-- Footer -->
<footer class="cg-container cg-padding-64 cg-center cg-opacity cg-light-grey cg-xlarge">
  <a href="#" class="cg-button cg-light-grey"><i class="fa fa-arrow-up cg-margin-right"></i>To the top</a>
  <div class="cg-xlarge cg-section">
  <a href="https://www.facebook.com/changinggearsmusic/" class="cg-nav-item cg-button"><i class="fa fa-facebook-official"></i></a>
   <a href="spotify:artist:7KNUiuJlWIFlzAQaanHa4a" class="cg-nav-item cg-button"><i class="fa fa-spotify"></i></a>
  <a href="https://www.youtube.com/channel/UCq9ediInmr2ai7DitqgOALg" class="cg-nav-item cg-button"><i class="fa fa-youtube"></i></a>
  <a href="https://changinggears.bandcamp.com/" class="cg-nav-item cg-button"><i class="fa fa-bandcamp"></i></a>
  <a href="https://twitter.com/changinggears12" class="cg-nav-item cg-button"><i class="fa fa-twitter"></i></a>
  <a href="https://soundcloud.com/changinggearsmusic" class="cg-nav-item cg-button"><i class="fa fa-soundcloud"></i></a>

  <p class="cg-medium"><h2>Follow Us<h2></p>
  
  <script src="scripts/script.js"></script>
</footer>
</body>
</html>
