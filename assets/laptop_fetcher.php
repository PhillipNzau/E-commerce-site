<?php
            $im = "SELECT * FROM product WHERE id BETWEEN 0 AND 25 ORDER BY RAND() " ;
            if (!$im) {
            echo "sql error";
            }
            $records = mysqli_query($conn,$im);
            

              while($result = mysqli_fetch_assoc($records)){?>            
                
               
                <div class="col s12 m3">
                <a href="itemview.php?view=<?php echo $result['id']; ?>">
                <input type="text" hidden readonly name="idpost" value="<?php echo $result['id']; ?>">
                    <div class="card small">                   
                        <div class="card-image ">
                        <img alt="Coming soon" class="card-small responsive-img"  src= "uploads/<?php echo $result['imgpath']; ?>">
                        </div>
                        <div class="card-content">
                        <span class="card-title"><?php echo $result['p_name']; ?></span>
                            <b>Ksh</b> <span><?php echo $result['p_price']; ?></span><br>
                        </div>                                            
                    </div> </a>
                </div>
               

<?php } ?>