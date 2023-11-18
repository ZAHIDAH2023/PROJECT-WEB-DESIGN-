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
                            <h2>Register</h2>
                        </div>

                        <form method="post" action="register.php" >
                        <?php include('errors.php'); ?>
                        <div class="input-group">
                            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                        </div>
                        <div class="input-group">
                            <input type="email" name="email"placeholder="Email" value="<?php echo $email; ?>">
                        </div>
                        <div class="input-group">
                            <input type="password" name="password_1" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <input type="password" name="password_2" placeholder="Confirm Password">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn" name="reg_user">Register</button>
                        </div>   
                            
                    </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>



<!------------Footer---------->
<?php include('partial-front/footer.php'); ?>

</body>
</html>