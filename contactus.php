<!DOCTYPE html>
<html>
<?php
 include("include/header.php");
?>
<body>
<div class="theme-layout">
<div id="top-bar" class="modern">
	<div class="container">
		<div class="header-social">
			<ul>
				<li><a href="#" title=""><i class="icon-google-plus"></i></a></li>
				<li><a href="#" title=""><i class="icon-facebook"></i></a></li>
				<li><a href="#" title=""><i class="icon-skype"></i></a></li>
				<li><a href="#" title=""><i class="icon-linkedin"></i></a></li>
				<li><a href="#" title=""><i class="icon-twitter"></i></a></li>
			</ul>
		</div>
	</div>
</div><!--top bar-->
<?php 
include("include/nabvar.php");
?>
</div><!--Responsive header-->
<div class="top-image">
	<img src="images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="inner-page">
	<div class="container">
		<div class="page-title">
			<h1>Contact <span>Us</span> +88 0172 0562 866</h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="col-md-6">
				<div class="contact-info">
					<h3 class="sub-head">CONTACT INFORMATION</h3>
					<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=australia&amp;aq=&amp;sll=-25.274398,133.775136&amp;sspn=41.490127,85.166016&amp;ie=UTF8&amp;hq=&amp;hnear=Australia&amp;t=m&amp;z=4&amp;ll=-25.274398,133.775136&amp;output=embed"></iframe>
					<p>Aenean sit a ametlandit a urna. Sed vehicula rhoncus tellus, quis accumsan nunc dicti quiis enean sit amet nibh ut magna malesuada convallis. Quisque pulvinar odio et justo convalis mollis.Aenean elit eros, molestie ac viverra nec, blandit a urna.</p>
					<ul class="contact-details">
						<li>
							<span><i class="icon-home"></i>ADDRESS</span>
							<p>#536 (2nd Floor) Road #07,(New) Mirpur DOHS, Dhaka-1216</p>
						</li>
						<li>
							<span><i class="icon-phone-sign"></i>PHONE NO</span>
							<p>+88 0172 0562 866 / +88 0172 0562 866</p>
						</li>
						<li>
							<span><i class="icon-envelope-alt"></i>EMAIL ID</span>
							<p>jakir.mis@gmail.com</p>
						</li>
						<li>
							<span><i class="icon-link"></i>WEB ADDRESS</span>
							<p>http://www.bpcc.org,bd.com</p>
						</li>
					</ul>
				</div>
			</div>	<!-- Contact Info -->
			<div class="col-md-6">
				<div class="form">
					<h3 class="sub-head">CONTACT US BY MESSAGE</h3>
					<p>Anean sit amet nibh ut magna malesuada <span>*</span></p>
					<div id="message"></div>
					<form method="post"  action="contactus.php" ">
						<label for="name" accesskey="U">Full name <span>*</span></label>
						<input name="name" class="form-control input-field" type="text" id="name" size="30" value="" />
						<label for="email" accesskey="E">Email Address <span>*</span></label>
						
						<input name="email" class="form-control input-field" type="text" id="email" size="30" value="" />
						<label for="comments" accesskey="C">Message <span>*</span></label>
						<textarea name="comments" id="comments" rows="7" class="form-control input-field"></textarea>
						<div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div>
						<input type="submit" class="form-button submit" id="submit" value="SEND MESSAGE" />
					</form>
				</div>
			</div>	<!-- Message Form -->
		</div>	
	</div>	
		
	<div class="social-connect">	
		<div class="container">
			<h3>FIND US ON SOCIAL MEDIA.</h3>
			<ul class="social-bar">
				<li><a title="" href="#"><img alt="" src="images/rss.jpg"></a></li>
				<li><a title="" href="#"><img alt="" src="images/facebook.jpg"></a></li>
				<li><a title="" href="#"><img alt="" src="images/gplus.jpg"></a></li>
				<li><a title="" href="#"><img alt="" src="images/linked-in.jpg"></a></li>
				<li><a title="" href="#"><img alt="" src="images/pinterest.jpg"></a></li>
			</ul>			
		</div>
	</div><!-- Social Media Bar -->
	

</section>
</div>
<footer>
<?php
  include ("include/footer.php");
?>
</footer><!-- Footer -->
<div class="footer-bottom">
	<div class="container">
		<p>Copyright © 2013 Global News. <span>All rights reserved.</span> </p>
		<ul>
			<li><a href="index.html" title="">HOME</a></li>
			<li><a href="about.html" title="">ABOUT</a></li>
			<li><a href="elements.html" title="">ELEMENTS</a></li>
			<li><a href="blog-with-sidebar.html" title="">BLOG</a></li>
			<li><a href="events.html" title="">EVENTS</a></li>
			<li><a href="contact.html" title="">CONTACT</a></li>
		</ul>
	
	</div>
</div><!-- Bottom Footer Strip -->

<!-- Scripts -->
<script src="js/jquery-2.2.2.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
<script src="js/script.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/styleswitcher.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>
<script src="../../www.google.com/recaptcha/api.js"></script>
</body>

<!-- Mirrored from html.webinane.com/lifeline/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2017 11:34:46 GMT -->
</html>
