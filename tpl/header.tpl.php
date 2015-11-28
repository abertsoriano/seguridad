<?php
$url = explode('/', $_SERVER['PHP_SELF']);
$path = array_pop($url);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Control Empresarial Group S.A.C.</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
<!--     <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css"> -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">

    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->
	<link rel="stylesheet" href="assets/css/pages/page_contact.css">
    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed">
	<div class="wrapper">
	    <div class="header header-sticky">
	        <div class="container">
	            <a class="logo" href="index.php" style="font-size: 2em;margin-top: 26px;float: left;margin-bottom: 16px">CONTROL EMPRESARIAL GROUP S.A.C.</a>
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="fa fa-bars"></span>
	            </button>
	        </div>

	        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
	            <div class="container">
	                <ul class="nav navbar-nav">
	                    <li class="<?php echo $path == 'index.php' ? 'active' : '' ?>">
	                        <a href="index.php">Inicio</a>
	                    </li>
	                    <li class="<?php echo $path == 'page_about.php' ? 'active' : '' ?>">
	                        <a href="page_about.php">Nosotros</a>
	                    </li>
	                    <li class="<?php echo $path == 'servicios.php' ? 'active' : '' ?>">
	                        <a href="servicios.php">Servicios</a>
	                    </li>
	                    <li class="<?php echo $path == 'galeria.php' ? 'active' : '' ?>">
	                        <a href="galeria.php">Galería</a>
	                    </li>
	                    <li class="<?php echo $path == 'page_contact1.php' ? 'active' : '' ?>">
	                        <a href="page_contact1.php">Contacto</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>