<?php
require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
}
//Redirect user on first login if haven't reset password
if($user->data()->first_login_pass_reset == 0) {
  Redirect::to($us_url_root.'usersc/user_settings.php');
}

?>

	<!-- Hero Banner Welcome Section -->
	<header id="hero-section"class="jumbotron jumbotron-fluid hero">
	  <div class="container-fluid text-center">
	   <h3>WELCOME TO</h3>
	   <h1>CERTIFICATION TRAINING</h1>
	   <h3 class="lead pb-4">By CPPS University</h3>
	   <a href="#" id="link_about" class="btn btn-md" role="button">About Us</a>
	   <a href="#" id="tier2_link" class="btn btn-md" role="button">Tier 2 Courses</a>
	   <a href="#" id="tier3_link" class="btn btn-md" role="button">Tier 3 Courses</a>
	  </div>
	</header>

	<!-- About Us Section -->
	<div id="aboutus" class="row">
	  <div class="col-xl custom-col">
	    <div class="container">
	      <h2 class="display-4 text-center mt-5 mb-3">Who We Are?</h2>
	      <hr>
	      <p class="sec-description">CPPS is the leading developer and provider of scalable training and consulting solutions in the U.S. for Workplace Violence Prevention, Active Shooter Response, and International Travel Safety. CPPS has worked together with thousands of organizations large and small.</p>
	    </div>
	    <div class="wrapper">
	      <div class="aboutcard">
	          <input type="checkbox" class="more" aria-hidden="true">
	          <div class="content">
	              <div class="front" style="background-image: url('/usersc/images/company.png')">
	                  <div class="inner">
	                      <h4>50% of Fortune 100 corporations</h4>
	                  </div>
	              </div>
	          </div>
	      </div>
	      <div class="aboutcard">
	          <input type="checkbox" class="more" aria-hidden="true">
	          <div class="content">
	              <div class="front" style="background-image: url('/usersc/images/university.png')">
	                  <div class="inner">
	                      <h4>1600 colleges and universities</h4>
	                  </div>
	              </div>
	          </div>
	      </div>
	      <div class="aboutcard">
	          <input type="checkbox" class="more" aria-hidden="true">
	          <div class="content">
	              <div class="front" style="background-image: url('/usersc/images/hospital.png')">
	                  <div class="inner">
	                      <h4>2000 hospitals & many non-profit organizations</h4>
	                  </div>
	              </div>
	          </div>
	      </div>
	    </div>
	    <div class="text-center">
	      <a href="#" id="sec_tier2_link" class="sec-btn btn-md" role="button"><i class="fa fa-arrow-down"></i></a>
	    </div>
	  </div>
	</div>

	<!-- Tier 2 Course Modules -->
	<div id="t2course" class="row">
	  <div class="col-xl custom-col">
	    <div class="container">
	      <h2 class="display-4 text-center mt-5 mb-3">TIER 2 MODULES</h2>
	      <hr>
	      <p class="sec-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	    </div>
	    <div class="wrapper">
	      <?php
	          // -- card_flip
	          //Include the Tier 2 Module 1
	          include $abs_us_root.$us_url_root.'courses/Tier2/cards/T2M1_Card.php';

	          //Include the Tier 2 Module 2
	          include $abs_us_root.$us_url_root.'courses/Tier2/cards/T2M2_Card.php';

	          //Include the Tier 2 Module 3
	          include $abs_us_root.$us_url_root.'courses/Tier2/cards/T2M3_Card.php';

	          //Include the Tier 2 Module 4
	          include $abs_us_root.$us_url_root.'courses/Tier2/cards/T2M4_Card.php';

	          //Include the Tier 2 Module 5
	          include $abs_us_root.$us_url_root.'courses/Tier2/cards/T2M5_Card.php';

            include $abs_us_root.$us_url_root.'courses/Tier2/cards/T2Quiz_card.php';

            // if($t2quiz){ include $abs_us_root.$us_url_root.'courses/Tier2/cards/T2Quiz_card.php'; }
	       ?>
	    </div>
	    <div class="text-center">
	      <a href="#" id="sec_tier3_link" class="sec-btn btn-md" role="button"><i class="fa fa-arrow-down"></i></a>
	    </div>
	  </div>
	</div>


	<!-- Tier 3 Course Modules -->
	<div id="t3course" class="row">
	  <div class="col-xl custom-col">
	    <div class="container">
	      <h2 class="display-4 text-center mt-5 mb-3">TIER 3 MODULES</h2>
	      <hr>
	      <p class="sec-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	    </div>
	    <div class="wrapper">
	      <?php
	          // -- card_flip
	          //Include the Tier 3 Module 1
	          include $abs_us_root.$us_url_root.'courses/Tier3/cards/T3M1_Card.php';

	          //Include the Tier 3 Module 2
	          include $abs_us_root.$us_url_root.'courses/Tier3/cards/T3M2_Card.php';

	          //Include the Tier 3 Module 3
	          include $abs_us_root.$us_url_root.'courses/Tier3/cards/T3M3_Card.php';

	          //Include the Tier 3 Module 4
	          include $abs_us_root.$us_url_root.'courses/Tier3/cards/T3M4_Card.php';

	          //Include the Tier 3 Module 5
	          include $abs_us_root.$us_url_root.'courses/Tier3/cards/T3M5_Card.php';

            include $abs_us_root.$us_url_root.'courses/Tier3/cards/T3Quiz_Card.php';

            // if($t3quiz){ include $abs_us_root.$us_url_root.'courses/Tier3/cards/T3Quiz_Card.php'; }

	       ?>
	    </div>
	    <div class="text-center">
	      <a href="#" id="to_top_link" class="sec-btn btn-md" role="button"><i class="fa fa-arrow-up"></i></a>
	    </div>
	  </div>
	</div>


<?php  languageSwitcher();?>
<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
