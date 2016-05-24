<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include "TitutoSite.php"; ?></title>
<!--// Stylesheets //-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/fullcalendar.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/red.css" title="styles1" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/blue.css" title="styles2" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/gray.css" title="styles3" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/orange.css" title="styles4" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/green.css" title="styles5" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/orange-red.css" title="styles6" media="screen" />
<!--[if IE 8 ]><link href="css/iefix.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--// Javascripts //-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/styleswitch.js"></script>
<script type="text/javascript" src="js/animatedcollapse.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="js/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/gcal.js"></script>
<script type="text/javascript" src="js/jquery.infinite-carousel.js"></script>
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
<script type="text/javascript" src="js/ev-tabs.js"></script>
</head>

<body>
<!-- Styleswitcher Start -->
<?php include "BarraLateralMenu.php"; ?>
<!-- Styleswitcher End -->
<!-- Top Bar Start -->
<?php include "Topo.php"; ?>
<!-- Top Bar End -->
<!-- Header Start -->
<div id="header">
	<div class="inner">
    	<!-- Top Header Section Start -->
        <div class="top-head">
        	<!-- Logo Start -->
        	<div class="logo">
            	<a href="index.php"><img src="images/logo.png" alt="" /></a>
            </div>
            <!-- Logo End -->
            <!-- Right Section Start -->
            <div class="right-sec">
            	<!-- Search Start -->
                <?php include "Pesquisa.php"; ?>
                <!-- Services End -->
            </div>
            <!-- Right Section End -->
        	<div class="clear"></div>
        </div>
        <!-- Top Header Section End -->
        <div class="clear"></div>

        <!-- MENU DE NAVEGAÇÃO -->
        <?php include "Menu.php"; ?>
        <!-- FIM MENU DE NAVEGAÇÃO -->

       <div class="clear"></div>
        <!-- Bread Crumb Start -->
        <div class="breadcrumb">
        	<ul>
            	<li><a href="#">Home</a></li>
                <li><a href="#">Novidades</a></li>
                <li><a href="#">Lista de Novidades</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <!-- Bread Crumb End -->
        <!-- Page Heading Section Start -->
        <div class="pageheading">
        	<div class="textsec">
                <h1 style="color: #1e1e1e"><strong>Novidades</strong></h1>
                <p class="black">(10 Novidades Cadastrada)</p>
            </div>
            <?php include "RedeSociais.php"; ?>
            <div class="clear"></div>
        </div>
        <!-- Page Heading Section End -->
        <div class="clear"></div>
    </div>
</div>
<!-- Header End -->
<!-- Content Section Start -->
<div id="contentsec">
    <div class="inner">
        <!-- Full Width Section Start -->
        <?php include "ListaNovidades.php"; ?>
            <!-- One Third Section Start -->
        <?php include "MenuLateralPortal.php"; ?>
            <!-- One Third Section End -->
            <div class="clear"></div>
        </div>
        <!-- Full Width Section Start -->
    </div>
</div>
<!-- Content Section End -->
<!-- Scroller Section Start -->
<?php include "BarraLogos.php"; ?>
<!-- Scroller Section End -->
<!-- Footer Start -->
<?php include "Rodape.php"; ?>
<!-- Footer End -->
</body>	
</html>