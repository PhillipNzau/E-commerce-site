<?php
include 'assets/header.php';
?>
<!--Slider-->
<section class="container pt50 ">
    <!--<div class="col s12 m6 z-depth-1 pr10">
      <h1>AbsoluteSales</h1>
      <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, sapiente nemo aliquid odio in, neque eos, voluptatum consequatur quod ullam officia deserunt. Blanditiis placeat architecto fugit expedita voluptatum illo ducimus!</p>

    </div>-->
    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="logo3.png"></a>
        <a class="carousel-item" href="#two!"><img src="logo3.png"></a>
        <a class="carousel-item" href="#three!"><img src="logo3.png"></a>
        <a class="carousel-item" href="#four!"><img src="logo3.png"></a>
    </div>
</section>
<!-- Products-->
<section>
    <div class="divider"></div>
    <div class="row">
    <h5 class="title center">Results</h5>
    <div class="divider"></div>

    <!--tab 1--> 
    <div class="center">    
    <?php include 'assets/search_fetcher.php' ?>
    </div>
</section>

<!--recommended-->
<section class="container z-depth-1 pb10 pt10">
<h6 class="title">Best Selling Laptops</h6>
<div class="divider"></div>

    <div class="fade pt10 row">
        <?php include 'assets/popular_fetcher.php' ?>
    </div>
</section>

<!-- recommended-->
<section class="container  pb10 pt10">
<h6 class="title">Customers also bought</h6>
<div class="divider"></div>
<div class="fade pt10 row">
<?php include 'assets/recomended_fetcher.php' ?>
</div>
</section>

<section class="banner">
    
</section>
<?php
include 'assets/footer.php';
?>
