<?php
include 'assets/header.php';
?>

<!--banner-->
<div class="hide-on-med-and-down banner animated bounceIn delay-1s pt20 pb50">
    <div class="pr20 center big-text animated bounceIn delay-1s">
    Shop with absolute :: 
        <span
            class="txt-rotate"
            data-period="2000"
            data-rotate='[ "Free delivery.", "Money back guarantee.", "Compare prices.", "Win gifts.", "Fun!" ]'>
        </span>
    </div>
</div>

<!--Banner-->
<section>
<div class="hide-on-med-and-up banner2 animated bounceIn delay-1s pt20 pb20">
    <div class="pl20 left animated bounceIn delay-1s tech title">Tech week</div>
    <div class="pr20 right animated bounceIn delay-1s cyan-text text-darken-3">Save up to 50%</div>
    <div class="center animated bounceInDown delay-1s slow amber-text text-lighten-5 tech" id="the-final-countdown"><i></i></div>
  <!--<a href="#" class="">Take me</a>-->
</div>
</section>

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
        <h5 class="title center">Laptops</h5>
        <div class="divider"></div>
        <!--Lpatop fetcher-->     
        <?php include 'assets/laptop_fetcher.php' ?>
    </div>
</section>

<!--Best selling-->
<section class="container pb10 pt10">
    <h6 class="title">Best Selling Laptops</h6>
    <div class="divider"></div>
    <div class="fade pt10 row">
        <?php include 'assets/popular_fetcher.php' ?>
    </div>
</section>

<!--Banner-->
<section>
    <div class="container banner3 animated bounceIn delay-1s pt20 pb20 row">
        <?php 
            $im = "SELECT * FROM product WHERE p_category='DESKTOPS' ORDER BY RAND() LIMIT 1" ;
            if (!$im) {
            echo "sql error";
            }
            $records = mysqli_query($conn,$im);
            while($result = mysqli_fetch_assoc($records)){?>
                <a href="itemview.php?view=<?php echo $result['id']; ?>">  
                <input type="text" hidden readonly name="idpost" value="<?php echo $result['id']; ?>">
                <div class=" col s12 m6 imgse">
                    <img alt="Coming soon" class="card-small imgs responsive-img"  src= "uploads/<?php echo $result['imgpath']; ?>">
                </div>
                </a>
                <div class="col s12 m6">
                    <h5 class="animated bounceIn delay-1s tech title"><?php echo $result['p_name']; ?></h5>
                    <div class="pl20 left animated bounceIn delay-1s tech title">Tech week</div>
                    <div class="pr20 right animated bounceIn delay-1s  orange darken-2 btnw">Save up to 50%</div>
                </div>
        <?php }?>
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




















<?php
include 'assets/footer.php';
?>