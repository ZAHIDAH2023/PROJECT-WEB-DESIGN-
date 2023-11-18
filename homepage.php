
<?php include('partial-front/menu.php'); ?>


<?php 
    if(isset($_SESSION['order']))
    {
        echo $_SESSION['order'];
        unset ($_SESSION['order']);
    }
    
?>

<div class="header">
    <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <h1>We Run Together!</h1>
                        <p>Find the best running gear for peak performance <br>
                            ultimate comfort.</p>
                        <a href="products.php"class="btn">Explore Now &#8594;</a>
                    </div>
                    <div class="col-2">
                        <img src="hp-removebg-preview.png">
                    </div>
                </div>
            </div>
    </div>
</div>

        
<!---------------featured categories ----------->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="fp1.png">
            </div>
            <div class="col-3">
                <img src="fp2.png">
            </div>
            <div class="col-3">
                <img src="fp3.png">
            </div>
        </div>
    </div>    
</div>
  
<!---------------video ----------->
<li class="slideVideo">
  <video width="1500" height="320" controls="controls">
    <source src="video.mp4" type="video/mp4">
  </video>
</li><br><br>
<!---------------featured products ----------->
<div class="small-container">
    <h2 class ="title"> Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="products-detailsshoe1.php"><img src="shoe1-1.png" ></a>
            <a href="product-details.php"></a><h4>Cloudroam Waterproof</h4></a>
            <p>RM 959.00</p>
        </div>
        <div class="col-4">
            <a href="product-detailsacc1.php"><img src="acc1-1.png" ></a>
            <h4>Studio Beanie</h4>
            <p>RM 239.00</p>
        </div>
        <div class="col-4">
            <a href="product-detailsc2.php"><img src="c2-1.png" ></a>
            <h4>Trek Pants</h4>
            <p>RM 719.00</p>
        </div>
        <div class="col-4">
            <a href="product-detailsc1.php"><img src="c1-1.png" ></a>
            <h4>Weather Jacket</h4>
            <p>RM 1199.00</p>
        </div>
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