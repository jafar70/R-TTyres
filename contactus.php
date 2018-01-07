<?php include 'partials/header.php';?>

	<div class="nav">
		<div class="grid">
			<div class="nav-header">
				<div class="nav-title">
					<a href="/"><img src="assets/img/R&TTyresltd(2).png" class="logo" alt="Frali Logo"></img></a>
				</div>
			</div>
			<div class="nav-btn">
				<label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
			</div>
			<input type="checkbox" id="nav-check">
			<div class="nav-links">
				<a href="/">Home</a>
				<a href="services.php">Sevices</a>
				<a href="news.php">News</a>
				<a href="products.php">Products</a>
                <a href="contactus.php" class="active">Contact Us</a>
			</div>
		</div>
	</div>

    <div class="container">
    <div class="slide-wrapper">
        <div class="slide one"></div>
        <div class="slide two"></div>
        <div class="slide three"></div>
        <div class="slide four"></div>
        <div class="slide five"></div>
    </div>
    <ul class="slide-bullets">
        <li class="selected"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="arrow prev">
        <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i>
    </div>
    <div class="arrow next">
        <i class="fa fa-arrow-right fa-3x" aria-hidden="true"></i>
    </div>
</div>


	<div class="more-features">
		<div class="grid grid-pad">
			<div class='col-7-12'>
			    <form id="contact" action="" method="post">
                    <h3>Quick Contact</h3>
                    <h4>Contact us today, and get reply with in 24 hours!</h4>
                    <fieldset>
                      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Your Email Address" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                  </form>
			</div>
			<div class='col-5-12'>
                <h3>Contact Information</h3>
                <div class="item reasons">
						<div class="list-info contact-detail-nopadding">
							<span class="icon"><span class="fa-stack fa-lg">
				  <i class="fa fa-square fa-stack-2x"></i>
				  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
				</span></span>
							<h4 class="aboutus-text">Our Address</h4>
							<p>29 Whitehorse Lane,<br>
                            Thornton,<br>
                            London<br>
                            SE25 6RD</p>
						</div>
					</div>
					<div class="item reasons">
						<div class="list-info">
							<span class="icon"><span class="fa-stack fa-lg">
				  <i class="fa fa-square fa-stack-2x"></i>
				  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
				</span></span>
							<h4 class="aboutus-text">Phone Number</h4>
							<p>020 8653 1117</p>
						</div>
					</div>
					<br>
					<div class="item reasons">
						<div class="list-info">
							<span class="icon"><span class="fa-stack fa-lg">
				  <i class="fa fa-square fa-stack-2x"></i>
				  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
				</span></span>
							<h4 class="aboutus-text">E-mail Address</h4>
							<p>info@ezeefittyres.co.uk</p>
						</div>
					</div>
			</div>
		</div>
	</div>


    

	
	<?php include 'partials/footer.php'; ?>

