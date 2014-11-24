<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">

  <title><?php echo $page_title; ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>	
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>
  <!--[if lt IE 9]>
 	 <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script>
  var map;
  function initialize() {
    var mapOptions = {
    zoom: 16,
    scrollwheel: false,
    center: new google.maps.LatLng(56.862863, 60.541184)
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  }
  
  google.maps.event.addDomListener(window, 'load', initialize);

   </script>

  
</head>
<body>
	 <header class="b-header">
     	<div class="container">
        	<div class="row">
            	<div class="col-lg-6 col-md-5">
                	<div class="b-logo"><a href="<?php echo base_url(); ?>"><img src="assets/images/logo.png" alt=""></a></div>
                </div>
                <div class="col-lg-6 col-md-7">
                	<div class="col-md-8">
                		<div class="b-tel"><span>+7 950 </span>20-85245</div>
                	</div>
                   <div class="col-md-4">
                    	<div class="b-mail"><a href="mailto:malishok.ekb@mail.ru">malishok.ekb@mail.ru</a></div>
                    </div>
                </div>
            </div>
        </div>
     </header>
     
     <div class="b-menu">
     	<div class="container">
            <div class="b-nav-hide visible-xs">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                <span class="sr-only">Открыть меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="b-menu-caption">Меню</div>
          </div>
                
                
            <div class="collapse navbar-collapse" id="main-menu">
                <a href="main-page">Главная</a>
                <a href="sale">РАСПРОДАЖА</a>
                <a href="contacts">КОНТАКТЫ</a>
            </div>
        </div>
	</div>
