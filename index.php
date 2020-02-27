<?php
include 'assets/header.php';
?>

<div class="banner animated bounceIn delay-1s pt20 pb20">
<div class="pr20 center big-text animated bounceIn delay-1s">
    Shop with absolute :: 
        <span
            class="txt-rotate"
            data-period="2000"
            data-rotate='[ "Free delivery.", "Money back guarantee.", "Compare prices.", "Win prices.", "Fun!" ]'>
        </span>
    </div>
</div>
<!--Slider-->
<section class="container pt50 ">
    <!--<div class="col s12 m6 z-depth-1 pr10">
      <h1>AbsoluteSales</h1>
      <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, sapiente nemo aliquid odio in, neque eos, voluptatum consequatur quod ullam officia deserunt. Blanditiis placeat architecto fugit expedita voluptatum illo ducimus!</p>

    </div>-->
    <div class="carousel carousel-slider">
    <?php 
     $im = "SELECT * FROM product WHERE id BETWEEN 0 AND 25 ORDER BY RAND() " ;
     $records = mysqli_query($conn,$im);
     while($result = mysqli_fetch_assoc($records)){?>   
        <div class="col s12 m6 pt20">
        <a class="carousel-item" href="#one!"><img alt="Coming soon" class="card-small responsive-img"  src= "uploads/<?php echo $result['imgpath']; ?>"></a>
     </div>
        <?php }?>
    </div>
</section>
<!-- Products-->
<section>
    <div class="divider"></div>
    <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3 flow-text"><a href="#test1">Laptops</a></li>
            <li class="tab col s3 flow-text"><a class="active" href="#test2">Desktops</a></li>
            <li class="tab col s3 flow-text"><a href="#test3">Cameras</a></li>
            <li class="tab col s3 flow-text"><a href="#test4">Accessories</a></li>
          </ul>
        </div>

    <!--tab 1-->
        <div id="test1" class="container col s12">
            <a href="itemview.php">
            <div class="row">
            <?php include 'assets/laptop_fetcher.php' ?>
            </div>
            </a>
        </div>

    <!--tab 2-->
        <div id="test2" class="container col s12">
            <a href="itemview.php">
            <div class="row">
            <?php include 'assets/desktop_fetcher.php' ?>
            </div>
            </a>
        </div>

    <!--tab 3-->
        <div id="test3" class="container col s12">
            <a href="itemview.php">
            <div class="row">
            <?php include 'assets/camera_fetcher.php' ?>
            </div>
            </a>
        </div>
    <!--tab 4-->
        <div id="test4" class="container col s12">
            
            <div class="row">
            <?php include 'assets/accessories_fetcher.php' ?>
            </div>
        </div>
    </div>
</section>

<!--Banner-->
<section>
    <div class="container banner3 animated bounceIn delay-1s pt20 pb20 row">
        <?php 
            $im = "SELECT * FROM product ORDER BY RAND() LIMIT 1" ;
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




















<?php
include 'assets/footer.php';
?>