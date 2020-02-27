<?php
include 'assets/header.php';
?>
<!--product image and brief--> 
<section class="container row z-depth-1 pb20 pt10">
<?php 

    if (isset($_GET['view'])) {
        $idpost = $_GET['view'];
        $record = mysqli_query($conn, "SELECT * FROM product WHERE id=$idpost");
        while($result = mysqli_fetch_assoc($record)) {?>

    <div class="col s12 m6 pt20">
    <span class='zoom' id='ex1'>
    <img alt="Coming soon" class="card-small responsive-img"  src= "uploads/<?php echo $result['imgpath']; ?>">
    </span>
    </div>
    <div class="col s12 m6 pt20">
        <h5><?php echo $result['p_name']; ?></h5>
        <div class="divider"></div>
        <h6>Category: <?php echo $result['p_category']; ?></h6><br>
        <div class="divider"></div>
        <h5><b>Ksh</b> <?php echo $result['p_price']; ?>  <span class="badge white-text orange lighten-1 new">-30%</span></h5><br>
        <!--<h6><strike class="strk">Ksh 45200</strike></h6>-->
        <div class="divider"></div>
        <span><i class="material-icons icon-blue  cyan-text text-darken-3">star_border</i></span> 
        <span><i class="material-icons icon-blue  cyan-text text-darken-3">star_border</i></span> 
        <span><i class="material-icons icon-blue  cyan-text text-darken-3">star_border</i></span>        
        <span><i class="material-icons icon-blue  cyan-text text-darken-3">star_border</i></span>        
        <span><i class="material-icons icon-blue  cyan-text text-darken-3">star_border</i></span><br><br><br>  
        <button class="waves-effect waves-light btn orange darken-2 btnw title"> Add to cart <span><i class="material-icons title pl20">add_shopping_cart</i></span></button><br>
    </div>
   
</section>

<!--product specifications in details-->
<section class="container row z-depth-1 pb10 pt10">
    <h6 class="title">Product Specification</h6>
    <div class="divider"></div><br>
    <p class="pl10"><?php echo $result['p_description']; ?></p>
</section>
<?php } }?>
<!--recommended-->
<section class="container  pb10 pt10">
<h6 class="title">Customers who viewed this also viewed</h6>
<div class="divider"></div>

    <div class="fade pt10 row">
    <?php include 'assets/desktop_fetcher.php' ?>
    </div>
</section>


<section class="container  pb10 pt10">
<h6 class="title">You might like</h6>
<div class="divider"></div>
<div class="fade pt10 row">
<?php include 'assets/all_fetcher.php' ?>
</div>
</section>
   

    


<?php
include 'assets/footer.php';
?>