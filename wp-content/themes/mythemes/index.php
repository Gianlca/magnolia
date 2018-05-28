<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hotel, bed and breakfast, accommodations, travel, motel">
    <meta name="description" content="Villa Magnolia - Residence">
    <meta name="author" content="Chiaras">
    <title>Villa Magnolia - Residence</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/base.css" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/DateTimePicker.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.2.min.js"></script>

</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    
     <!-- Header ================================================== -->
    <header>
    <div class="container">

        <div class="row">
            <div class="col--md-3 col-sm-3 col-xs-3 log-slo-ctn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo.jpg" width="190" height="23" alt="" data-retina="true">
                </a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="slogan">
                    <img src="<?php bloginfo('template_url'); ?>/img/slogan.png" width="190" height="23" alt="" data-retina="true">
                </a>
            </div>
            <nav class="col--md-9 col-sm-9 col-xs-9">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
<!--             <ul id="lang_top">
                <li><a href="#" class="active">EN</a></li>
                <li><a href="#">FR</a></li>
                <li><a href="#">ES</a></li>
            </ul> -->
            <div class="main-menu">

                <div id="header_menu">
                     <img src="<?php bloginfo('template_url'); ?>/img/logo_m.png" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                <?php wp_nav_menu( array( 'container_class' => 'main-menu', 'theme_location' => 'primary' ) ); ?>
<!--                  <ul>
                    <li>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    </li>
                    <li class="submenu"> 
                        <a href="javascript:void(0);" class="show-submenu">Rooms <i class="icon-down-open-mini"></i></a>
                        <ul>
                            <li><a href="<?php bloginfo('template_url'); ?>/room_detail.html">Magnolia bianca</a></li>
                            <li><a href="<?php bloginfo('template_url'); ?>/room_detail_2.html">Magnolia blu</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php bloginfo('template_url'); ?>/contacts.html">Contacts</a></li>
                     
                </ul> -->
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->
    <?php   
    while ( have_posts() ) : the_post(); 
        the_content();
        endwhile; 
    ?>
    
	<!-- SubHeader =============================================== -->
  
     <footer >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/Villa Vacanze Magnolia.png" alt="" id="logo_footer" data-retina="true">
					<ul id="contact_details_footer">
          				<li>Route de Sablet 1023, Trappeto<br>Italia</li>
                        <li><a href="tel://004542344599">+45 423 445 99</a> / <a href="#0">info@villamagnolia.com</a></li>
                    </ul>  
                </div>

                <div class="col-md-6 col-sm-4"  id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
					<div id="message-newsletter_2"></div>
						<form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
                          </div>
                            <input type="submit" value="Subscribe" class="btn_1 white" id="submit-newsletter_2">
                    	</form>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
<!--                             <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li> -->
                        </ul>
                        <!-- <p>© Albert 2016</p> -->
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->
        
<!-- COMMON SCRIPTS -->
<script src="<?php bloginfo('template_url'); ?>/js/common_scripts_min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/validate.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/DateTimePicker.js"></script>
<script type="text/javascript">$("#dtBox").DateTimePicker();</script>
</body>
</html>