<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="/wp-content/themes/baker/style.css" />


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

<style type="text/css">


.home #block-01 ul li#block-01-slide-01 {
	background: #eee url(/wp-content/themes/baker/images/home-enjoy-electricity.jpg) center center no-repeat;
}

.home #block-01 ul li#block-01-slide-02 {
	background: #e1cc99 url(/wp-content/themes/baker/images/home-client-reviews.jpg) right top no-repeat;
}

.home #block-01 ul li#block-01-slide-03 {
	background: #eee url(/wp-content/themes/baker/images/solar-benefits-sunshine.jpg) left center no-repeat;
}

.home #block-01 ul li#block-01-slide-04 {
	background: #fece30 url(/wp-content/themes/baker/images/home-solar-smarts.jpg) right center no-repeat;
}



.home #block-03 {
	background: #42b6d1 url(/wp-content/themes/baker/images/home-go-solar.jpg) center center no-repeat;	
}

.home #block-04 {
	background: #fff url(/wp-content/themes/baker/images/home-lease-or-own.jpg) top center no-repeat;
}

.home #block-05 {
	background: #fece30 url(/wp-content/themes/baker/images/home-solar-smarts.jpg) right center no-repeat;
}


.home #block-06 ul li#block-06-slide-01 {
	background: #e1cc99 url(/wp-content/themes/baker/images/home-client-reviews.jpg) center center no-repeat;
}

.home #block-06 ul li#block-06-slide-02 {
	background: #e1cc99 url(/wp-content/themes/baker/images/solar-benefits-sunshine.jpg) right top no-repeat;
}

.home #block-06 ul li#block-06-slide-03 {
	background: #eee url(/wp-content/themes/baker/images/home-client-reviews.jpg) left center no-repeat;
}

.home #block-06 ul li#block-06-slide-04 {
	background: #fece30 url(/wp-content/themes/baker/images/solar-benefits-sunshine.jpg) right center no-repeat;
}


.solar-benefits #block-01 {
	background: #eee url(/wp-content/themes/baker/images/solar-benefits-sunshine.jpg) left center no-repeat;
}

/*.solar-benefits #block-02 {
	background: #fff url(/wp-content/themes/baker/images/solar-benefits-excited.jpg) center top no-repeat;	
}*/

.solar-benefits #block-03 {
	background: #fdb52b url(/wp-content/themes/baker/images/solar-benefits-unplug.jpg) right center no-repeat;
}

/*.solar-benefits #block-04 {
	background: #fff url(/wp-content/themes/baker/images/solar-benefits-savings.jpg) center top no-repeat;
}*/

.solar-benefits #block-05 {
	background: #fdb52b url(/wp-content/themes/baker/images/solar-benefits-incentives.jpg) right center no-repeat;
}

/*.solar-benefits #block-06 {
	background: #fff url(/wp-content/themes/baker/images/solar-benefits-sun.jpg) center top no-repeat;
}*/

.residential-resources #banner {
	background: #fff url(/wp-content/themes/baker/images/banner-residential-resources.jpg) center center no-repeat;
}

.circle {
	background: #fff url(/wp-content/themes/baker/images/circle-calculator.jpg) center center no-repeat;
}

.solar-benefits #block-02 .circle.transparent {
	background: #fff url(/wp-content/themes/baker/images/circle-singing.jpg) center center no-repeat;	
}

.solar-benefits #block-04 .circle.transparent {
	background: #fff url(/wp-content/themes/baker/images/circle-couple.jpg) center center no-repeat;	
}

.solar-benefits #block-06 .circle.transparent {
	background: #fff url(/wp-content/themes/baker/images/circle-solar-panels.jpg) center center no-repeat;	
}

.circle,
.residential-resources #banner,
.home #block-01 ul li#block-01-slide-01,
.home #block-01 ul li#block-01-slide-02,
.home #block-01 ul li#block-01-slide-03,
.home #block-01 ul li#block-01-slide-04,
.home #block-03,
.home #block-05,
.home #block-06 ul li#block-06-slide-01,
.home #block-06 ul li#block-06-slide-02,
.home #block-06 ul li#block-06-slide-03,
.home #block-06 ul li#block-06-slide-04,
.solar-benefits #block-01,
.solar-benefits #block-03,
.solar-benefits #block-05 {
	background-size: cover;
}

</style>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.11/jquery.scrollTo.min.js"></script>
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<script src="/wp-content/themes/baker/js/jquery.fitvids.js"></script>
<script src="/wp-content/themes/baker/js/jquery.flexslider.js"></script>
</head>
<?php if(is_page()) { $page_slug = $post->post_name; } ?>
<body <?php body_class($page_slug); ?>>

<header id="site-header" role="banner">
	
	<nav id="primary-nav" role="navigation">
		<div class="container">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Display the blog name ?></a>
			</h1>
			<ul>
				<li class="nav-solar-benefits"><a href="/solar-benefits"><span>Solar</span> Benefits</a></li>
				<li class="nav-about-baker"><a href="/about-baker"><span>About</span> Baker</a></li>
				<li class="nav-residential-solutions"><a href="/residential-solutions"><span>Residential</span> Solutions</a></li>
				<li class="nav-commercial-solutions"><a href="/commercial-solutions"><span>Commercial</span> Solutions</a></li>
				<li class="nav-contact-us" id="contact-us"><a href="/contact-us">Contact Us</a></li>
			</ul>
		</div>
	</nav>

