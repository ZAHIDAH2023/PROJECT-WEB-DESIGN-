<?php include('config/constant.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - ON| E-Commerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo on.png" width="60px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="<?php echo SITEURL; ?>homepage.php">Home</a></li>
                    <li><a href="<?php echo SITEURL; ?>products.php">Products</a></li>
                    <li><a href="<?php echo SITEURL; ?>products.php">Order</a></li>
                    <li><a href="<?php echo SITEURL; ?>contact.php">Contact</a></li>
                    <li><a href="<?php echo SITEURL; ?>login.php">Account</a></li>
                    <li><a href="<?php echo SITEURL; ?>admin/manageadmin.php">Admin</a></li>
                </ul>
            </nav>
            <img src="cart.png" width="30px" height="30px">
            <img src="menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>    
</div>