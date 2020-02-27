
<?php
    if(isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM product WHERE p_name LIKE '%$search%' OR p_price LIKE '%$search%' OR p_description LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){?> 
            <div class="col s12 m3 center">
                <a href="itemview.php?view=<?php echo $row['id']; ?>">
                <input type="text" hidden readonly name="idpost" value="<?php echo $row['id']; ?>">
                    <div class="card small">                   
                        <div class="card-image ">
                        <img alt="Coming soon" class="card-small responsive-img"  src= "uploads/<?php echo $row['imgpath']; ?>">
                        </div>
                        <div class="card-content">
                        <span class="card-title"><?php echo $row['p_name']; ?></span>
                            <b>Ksh</b> <span><?php echo $row['p_price']; ?></span><br>
                        </div>                                            
                    </div> </a>
                </div> 
            <?php }} else {?>
                <div class="container ">
                    <img height="50px" width="50%" class= "card-small responsive-img"  src= "sadsmurf.png">
                    <h5 class='title'>OOPS!! RESULTS NOT FOUND :(</h5>
			    </div>
            <?php ; } 
        } ?>