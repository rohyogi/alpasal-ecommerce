<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpasal | Best Online Experice</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="include/font-awesome/css/all.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/v4-shims.css" type="text/css">
    <link rel="stylesheet" href="css/owl-carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>

<div class="top-header bg-grey">
    <div class="container-fluid clearfix">
        <div class="float-right">
            <ul class="top-links list-unstyled side-listing">
                <li><a href="javascript:">Get the App</a></li>
                <li><a href="javascript:">Feature your Business</a></li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">Customer Care</a>

                    <div class="dropdown-pannel">
                        <div class="dropdown-content">
                            <a href="javascript:" class="dropdown-item"><i class="fas fa-user-tie"></i> Help Center</a>
                            <a href="javascript:" class="dropdown-item"><i class="fas fa-box-open"></i> Order</a>
                            <a href="javascript:" class="dropdown-item"><i class="fas fa-shipping-fast"></i> Shipping & Delivery</a>
                            <a href="javascript:" class="dropdown-item"><i class="fas fa-credit-card"></i> Payment</a>
                            <a href="javascript:" class="dropdown-item"><i class="fas fa-hand-holding-usd"></i> Return & Refund</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">Track my Order</a>

                    <div class="dropdown-pannel dropdown-large">
                        <div class="dropdown-content p-4">
                            <p class="drop-title">Track My Order</p>
                            <form action="track-order">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="orderEmail">Pleaes confirm your email:</label>
                                            <input type="email" class="form-control" id="orderEmail" placeholder="abc@happylife.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="orderNumber">Your Order Number:</label>
                                            <input type="text" class="form-control" id="orderNumber" placeholder="000-000-000">
                                        </div>
                                    </div>
                                </div>
                                <label>For any other inquiries, <a href="javascript:">Click Here</a></label>
                                <button type="submit" class="btn-main w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <span> <i class="fas fa-user"></i> <a href="javascript:">Login</a> </span> /
                    <span> <a href="javascript:">Register</a> </span>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="header-main sticky-top">
    
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="LOGO">
                    </a>
                </div>
                <div class="col-lg-7 col-sm-8">
                    <form action="search">
                    <div class="search-bar">
                        <div class="search-addon"><i class="fas fa-search"></i></div>
                        <input type="text" placeholder="Are you looking for something?">
                        <button type="submit">Search</button>
                    </div>
                    </form>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="d-flex justify-content-between align-items-center pt-3">
                        <div class="head-cart">
                            <a href="javascript:">
                                <img src="img/icons/header-cart.png" alt="Cart">
                            </a>
                            <span class="cart-length">0</span>
                        </div>
                        <div class="coupon-code">
                            <a href="javascript:">
                                <img src="img/dummy1.png" alt="Coupon-Code" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav top-nav-menu">
                    <li class="nav-item nav-item-main dropdown dropdown-li">
                        <a class="nav-link nav-first dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" id="dLabel" data-toggle="dropdown" >
                            <i class="fas fa-list"></i> Categories
                        </a>
                        <?php include('head-megamenu.php'); ?>
                    </li>
                    <li class="nav-item nav-item-main">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item nav-item-main">
                        <a class="nav-link" href="#">Sell on Alpasal</a>
                    </li>
                    <li class="nav-item nav-item-main">
                        <a class="nav-link" href="#">Track Order</a>
                    </li>
                    <li class="nav-item nav-item-main">
                        <a class="nav-link" href="#">About Alpasal</a>
                    </li>
                    <li class="nav-item nav-item-main">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>