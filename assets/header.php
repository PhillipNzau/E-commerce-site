<?php   include 'config.php'; ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import custom css-->
      <link type="text/css" rel="stylesheet" href="styles/css/main.css"  media="screen,projection"/>
      <!--Animate css-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">        
      <!--Let browser know website is optimized for mobile-->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <style>
    nav .badges{
        position:relative;
        top:20px;
        right:10px;
    }
    </style>
    <div class="preloader-background">
	<div class="preloader-wrapper big active">
		<div class="spinner-layer spinner-blue-only">
			<div class="circle-clipper left">
				<div class="circle"></div>
			</div>
			<div class="gap-patch">
				<div class="circle"></div>
			</div>
			<div class="circle-clipper right">
				<div class="circle"></div>
			</div>
		</div>
	</div>
</div>

    <!--navbar-->
    <nav class=" blue-grey darken-4">
        <div class="container nav-wrapper">
        <a href="index.php" class="brand-logo">Absolute</a>
        <span class="right badge badges white-text pink new">5</span>
        <a href="sass.html" class="right"><i class="material-icons icon-blue  cyan-text text-darken-3">add_shopping_cart</i></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        
        <ul class="right hide-on-med-and-down">

            <li><a href="laptops.php">Laptops</a></li>
            <li><a href="desktops.php">Desktops</a></li>
            <li><a href="cameras.php">Cameras</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="aboutus.php">About us</a></li>

             <!-- Modal Trigger -->
            <li> <a class="waves-effect waves-light btn orange accent-2 modal-trigger" href="#modal1">Login</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
    <li><a href="laptops.php">Laptops</a></li>
        <li><a href="desktops.php">Desktops</a></li>
        <li><a href="cameras.php">Cameras</a></li>
        <li><a href="accessories.php">Accessories</a></li>
        <li><a href="aboutus.php">About us</a></li>
       <li>
            <form action="search.php" method="POST">
                <div class="input-field">
                     <input id="search" name="search"type="search" required>
                     <button class="waves-effect waves-light btn light-blue lighten-1" type="submit" for="search" name="submit-search"><i class="material-icons">search</i></button>
                </div>
            </form>
        </li>
        <!-- Modal Trigger -->
        <li> <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Login</a></li>
    </ul>
    <body>
   <div class="container hide-on-small-only">
        <form action="search.php" method="POST">
            <div class="input-field">
                <input id="search" name="search" type="search" class="search" required>
                <label for="password">Serach here</label>
                <button class="waves-effect waves-light btn light-blue lighten-1" type="submit" for="search" name="submit-search"><i class="material-icons">search</i></button>
            </div>
        </form>
   </div>
    