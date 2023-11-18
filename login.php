<?php include('server.php') ?>
<?php include('partial-front/menu.php'); ?>

<!---------account-page-------->

<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="hp-removebg-preview.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container1">
                        <div class="form-btn">
                            <h2>Login</h2>
                        </div>

                        <form method="post" action="login.php" >
                        <?php include('errors.php'); ?>
                        <div class="input-group">
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn" name="login_user">Login</button>
                        </div>
       
                    </form>  
                    <p>No Account? <a href="register.php">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!------------Footer---------->
<?php include('partial-front/footer.php'); ?>

</body>
</html>