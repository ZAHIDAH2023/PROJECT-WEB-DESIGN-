<?php include('partial-front/menu.php'); ?>
   

<div class="small-container">
    

    <div class="row row-2">
        <h2>All Products</h2>
        <form action="">
        <select>
            <option>Default Shorting</option>
            <a href="product-detailsc1.php"></a><option>Short by Price</option></a>
            <option>Short by Popularity</option>
            <option>Short by Sale</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
        </form>
    </div>
      
    <?php 
    
        //Getting items from database
        //SQL query 
        $sql2 = "SELECT * FROM items ";

        //Execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //count rows
        $count2 = mysqli_num_rows($res2);

        //Check whether food available or not
        if($count2>0)
        {
            //Items Available
            while($row=mysqli_fetch_assoc($res2))
            {
                //Get all the values
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $image_name = $row['image_name'];
                ?>
                    <div class="row">
                        <div class="col-4">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not Available</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                        <img src="<?php echo SITEURL; ?>pic/items/<?php echo $image_name ?>" ></a>
                                    <?php
                                }
                            
                            ?>
                            
                            <h4><?php echo $title; ?></h4>
                            <p>RM<?php echo $price; ?></p>
                            <p><?php echo $description; ?></p>
                            <br>
                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                <?php
            }
        }
        else
        {
            //Items not Avaiable
            echo "<div class='error'>Items not Available</div>";
        }
    
    
    ?>
    

      
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div>
</div>
<!------------Footer---------->
<?php include('partial-front/footer.php'); ?>
<!--------js for toggle menu------------>
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight == "200px";
        }
        else
        {
            MenuItems.style.maxHeight == "0px";
        }

    }
</script>
</body>
</html>