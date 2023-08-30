
<?php 
include_once('header-page.php');
  ?>
    <!-- This section classes require for whole page sliders -->
    <div id="sequence" style="display:none;">
        <ul class="seq-canvas">
        </ul>
    </div>

    <!-- End Slider -->

    <!-- Main banner -->
    <div class="inner-page-main-banner contact-us">
		<!-- Bootstrap -->
		<div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- H2 heading -->
                    <h2>Contact us</h2>
                    <!-- H1 Heading -->
                    <h1>Get in touch</h1>
                    <!-- Bredcum links -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        	<ul>
                            	<li> <a href="index.php">Home » </a> </li>
                                <li>Contact us</li>
                            </ul>
                            <p>
                               Lorem Ipsum is simply dummy text of the printing and typesetting indus orem Ipsum has been the industry's standard dummy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <!-- End bootstrap -->
    </div>
    <!-- End Main banner -->
    
    <!-- Dont remove this section, it's classes is nececery for swiper slider used in other sections-->
    <div id="team" class="site-team site-white-section" style="display:none;">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-md-10 col-md-push-2">

                    <!-- Swiper slider -->
                    <div class="swiper-container team-section-slider" id="team-section-slider">

                        <!-- Content -->
                        <div class="swiper-wrapper">
                        </div>

                    </div>
                    <!-- End slider -->

                </div>
                <div class="col-xs-12 col-md-2 col-md-pull-10">

                    <!-- Thumbnail -->
                    <div class="swiper-container thumbnail" id="team-thumbnails">
                        <ul class="swiper-wrapper">
                           
                        </ul>
                    </div>
                    <!-- End thumbnail -->

                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End team -->

    <!-- contact box -->
    <div id="contact-us" class="contact-section inner-page-grey-section">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                	
                    <!-- Site box -->
					<div class="site-box">
                    	<!-- H3 Heading -->
	                    <h3>New York Office</h3>
                        <!-- 3 colom -->
						<div class="inner">
                        
                        	<!-- adress -->
                        	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            	<div class="ttl">
	                            	<!-- Icon -->
    	                            <figure><i class="fa fa-map-marker"></i></figure>
        	                        <!-- Location -->
            	                    <h4> Location </h4>
								</div>
                                <a class="adress" target="_blank" href="#">
                                   158 Corporate avenue, South pol New York, USA
                                </a>
                            </div>
                            
                            <!-- phone -->
                        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            	<div class="ttl">
                                    <!-- Icon -->
                                    <figure><i class="fa fa-phone"></i></figure>
                                    <!-- Location -->
                                    <h4> Call us </h4>
                                </div>
                                <div class="clearfix"> </div>
                                <a class="call"  href="tel:19876543213">+1 987 654 3213</a>
                                <div class="clearfix"> </div>
                                <a class="call"  href="tel:19876543213">+1 123 456 7890</a>
                            </div>
                            
                            <!-- email -->
                        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            	<div class="ttl mail">
	                            	<!-- Icon -->
    	                            <figure><i class="fa fa-envelope"></i></figure>
        	                        <!-- Location -->
            	                    <h4> Email us </h4>
								</div>
                                <div class="clearfix"> </div>
                                <a class="email" href="mailto:contact@corbiz.com">contact@corbiz.com</a>
                                <div class="clearfix"> </div>
                                <a class="email" href="mailto:info@corbiz.com">info@corbiz.com</a>
                            </div>
                            
                    	</div>
                        
                        <!-- Form -->
                        <div class="col-xs-12 col-sm-12 col-md-6 no-right-padding">
		                    <div class="inner">
    	                		<div class="form-box">
                                <!-- H3 Heading -->
                                <h4>Drop a message us</h4>
                                <!-- Contact form -->
                                                                    <!-- Contact form -->
                                        <form action="send.php" method="post" id="contactForm" class="site-contact-form">
                                        <!-- Name -->
                                        <label><input type="text" name="yname" placeholder="Name" required="required"></label>
                                        <!-- Email -->
                                        <label><input type="email" name="yemail" placeholder="Email" required="required"></label>
                                        <!-- Phone -->
                                        <label><input type="number" name="yphone" placeholder="Phone" required="required"></label>
                                        <label><input type="text" name="ysubject" placeholder="Subject" required="required"></label>
                                        <!-- Subject -->
                                        <label><textarea name="message" placeholder="Message" required></textarea></label>
                                        <!-- Submit -->
                                        <button type="submit" name="submit">Send request <i class="fa fa-spin fa-spinner"></i></button>
                                    </form>
								</div>
        	            	</div>
						</div>
                        
                        <!-- Google map show using API -->
                        <div class="col-xs-12 col-sm-12 col-md-6 no-left-padding">
		                    <div class="inner">
		                    	<div class="site-google-map" id="site-map"></div>
                            </div>
						</div>
                    </div>
                    
                    

                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End contact box -->

    <?php 
    include_once('footer-page.php');
      ?>