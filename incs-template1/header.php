<!-- headers-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="<?php echo KEY_WORDS; ?>">
    <meta name="description" content="<?php echo PAGE_DESCRIPTION; ?>"">
    <title>
    <?php
    if ( basename($_SERVER['PHP_SELF']) == 'about-us.php') {
        echo 'About Us';
    } elseif (basename($_SERVER['PHP_SELF']) == 'contact-us.php') {
        echo 'Contact Us';
    }
    else {
        echo TITLE;
    } 
    ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color-style.css">
    <link rel="icon" type="image/png" href="img/favicon.png"/>
</head>

<body>
    <header class="header header--1" data-sticky="true">
        <div class="header__top">
            <div class="ps-container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                <li><a href="#.html">Hot Promotions</a>
                                </li>
                                <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Electronic<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="#.html">Home Audio &amp; Theathers</a>
                                                </li>
                                                <li><a href="#.html">TV &amp; Videos</a>
                                                </li>
                                                <li><a href="#.html">Camera, Photos &amp; Videos</a>
                                                </li>
                                                <li><a href="#.html">Cellphones &amp; Accessories</a>
                                                </li>
                                                <li><a href="#.html">Headphones</a>
                                                </li>
                                                <li><a href="#.html">Videosgames</a>
                                                </li>
                                                <li><a href="#.html">Wireless Speakers</a>
                                                </li>
                                                <li><a href="#.html">Office Electronic</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__column">
                                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="#.html">Digital Cables</a>
                                                </li>
                                                <li><a href="#.html">Audio &amp; Video Cables</a>
                                                </li>
                                                <li><a href="#.html">Batteries</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#.html">Clothing &amp; Apparel</a>
                                </li>
                                <li><a href="#.html">Home, Garden &amp; Kitchen</a>
                                </li>
                                <li><a href="#.html">Health &amp; Beauty</a>
                                </li>
                                <li><a href="#.html">Yewelry &amp; Watches</a>
                                </li>
                                <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="#.html">Computer &amp; Tablets</a>
                                                </li>
                                                <li><a href="#.html">Laptop</a>
                                                </li>
                                                <li><a href="#.html">Monitors</a>
                                                </li>
                                                <li><a href="#.html">Networking</a>
                                                </li>
                                                <li><a href="#.html">Drive &amp; Storages</a>
                                                </li>
                                                <li><a href="#.html">Computer Components</a>
                                                </li>
                                                <li><a href="#.html">Security &amp; Protection</a>
                                                </li>
                                                <li><a href="#.html">Gaming Laptop</a>
                                                </li>
                                                <li><a href="#.html">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#.html">Babies &amp; Moms</a>
                                </li>
                                <li><a href="#.html">Sport &amp; Outdoor</a>
                                </li>
                                <li><a href="#.html">Phones &amp; Accessories</a>
                                </li>
                                <li><a href="#.html">Books &amp; Office</a>
                                </li>
                                <li><a href="#.html">Cars &amp; Motocycles</a>
                                </li>
                                <li><a href="#.html">Home Improments</a>
                                </li>
                                <li><a href="#.html">Vouchers &amp; Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="ps-logo" href="index.html"><img src="img/logo.jpg" alt="<?= $LOGO_NAME_TEXT; ?>" /></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="index.html" method="get">
                        <div class="form-group--icon"><i class="icon-chevron-down"></i>
                            <select class="form-control">
                                <option value="0" selected="selected">All</option>
                                <option class="level-0" value="babies-moms">Babies & Moms</option>
                                <option class="level-0" value="books-office">Books & Office</option>
                                <option class="level-0" value="cars-motocycles">Cars & Motocycles</option>
                                <option class="level-0" value="clothing-apparel">Clothing & Apparel</option>
                                <option class="level-1" value="accessories-clothing-apparel">Accessories</option>
                                <option class="level-1" value="bags">Bags</option>
                                <option class="level-1" value="kids-fashion">Kid’s Fashion</option>
                                <option class="level-1" value="mens">Mens</option>
                                <option class="level-1" value="shoes">Shoes</option>
                                <option class="level-1" value="sunglasses">Sunglasses</option>
                                <option class="level-1" value="womens">Womens</option>
                                <option class="level-0" value="computers-technologies">Computers & Technologies</option>
                                <option class="level-1" value="desktop-pc">Desktop PC</option>
                                <option class="level-1" value="laptop">Laptop</option>
                                <option class="level-1" value="smartphones">Smartphones</option>
                                <option class="level-0" value="consumer-electrics">Consumer Electrics</option>
                                <option class="level-1" value="air-conditioners">Air Conditioners</option>
                                <option class="level-2" value="accessories">Accessories</option>
                                <option class="level-2" value="type-hanging-cell">Type Hanging Cell</option>
                                <option class="level-2" value="type-hanging-wall">Type Hanging Wall</option>
                                <option class="level-1" value="audios-theaters">Audios & Theaters</option>
                                <option class="level-2" value="headphone">Headphone</option>
                                <option class="level-2" value="home-theater-system">Home Theater System</option>
                                <option class="level-2" value="speakers">Speakers</option>
                                <option class="level-1" value="car-electronics">Car Electronics</option>
                                <option class="level-2" value="audio-video">Audio & Video</option>
                                <option class="level-2" value="car-security">Car Security</option>
                                <option class="level-2" value="radar-detector">Radar Detector</option>
                                <option class="level-2" value="vehicle-gps">Vehicle GPS</option>
                                <option class="level-1" value="office-electronics">Office Electronics</option>
                                <option class="level-2" value="printers">Printers</option>
                                <option class="level-2" value="projectors">Projectors</option>
                                <option class="level-2" value="scanners">Scanners</option>
                                <option class="level-2" value="store-business">Store & Business</option>
                                <option class="level-1" value="refrigerators">Refrigerators</option>
                                <option class="level-1" value="tv-televisions">TV Televisions</option>
                                <option class="level-2" value="4k-ultra-hd-tvs">4K Ultra HD TVs</option>
                                <option class="level-2" value="led-tvs">LED TVs</option>
                                <option class="level-2" value="oled-tvs">OLED TVs</option>
                                <option class="level-1" value="washing-machines">Washing Machines</option>
                                <option class="level-2" value="type-drying-clothes">Type Drying Clothes</option>
                                <option class="level-2" value="type-horizontal">Type Horizontal</option>
                                <option class="level-2" value="type-vertical">Type Vertical</option>
                                <option class="level-0" value="garden-kitchen">Garden & Kitchen</option>
                                <option class="level-1" value="cookware">Cookware</option>
                                <option class="level-1" value="decoration">Decoration</option>
                                <option class="level-1" value="furniture">Furniture</option>
                                <option class="level-1" value="garden-tools">Garden Tools</option>
                                <option class="level-1" value="home-improvement">Home Improvement</option>
                                <option class="level-1" value="powers-and-hand-tools">Powers And Hand Tools</option>
                                <option class="level-1" value="utensil-gadget">Utensil & Gadget</option>
                                <option class="level-0" value="health-beauty">Health & Beauty</option>
                                <option class="level-1" value="equipments">Equipments</option>
                                <option class="level-1" value="hair-care">Hair Care</option>
                                <option class="level-1" value="perfumer">Perfumer</option>
                                <option class="level-1" value="skin-care">Skin Care</option>
                                <option class="level-0" value="jewelry-watches">Jewelry & Watches</option>
                                <option class="level-1" value="gemstone-jewelry">Gemstone Jewelry</option>
                                <option class="level-1" value="mens-watches">Men’s Watches</option>
                                <option class="level-1" value="womens-watches">Women’s Watches</option>
                                <option class="level-0" value="phones-accessories">Phones & Accessories</option>
                                <option class="level-1" value="iphone-8">Iphone 8</option>
                                <option class="level-1" value="iphone-x">Iphone X</option>
                                <option class="level-1" value="sam-sung-note-8">Sam Sung Note 8</option>
                                <option class="level-1" value="sam-sung-s8">Sam Sung S8</option>
                                <option class="level-0" value="sport-outdoor">Sport & Outdoor</option>
                                <option class="level-1" value="freezer-burn">Freezer Burn</option>
                                <option class="level-1" value="fridge-cooler">Fridge Cooler</option>
                                <option class="level-1" value="wine-cabinets">Wine Cabinets</option>
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="I'm shopping for..." id="input-search" />
                        <button>Search</button>
                        <div class="ps-panel--search-result">
                            <div class="ps-panel__content">
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail">
                                        <a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$990.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail">
                                        <a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$1120.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail">
                                        <a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$1220.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail">
                                        <a href="product-default.html"><img src="img/products/arrivals/2.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$36.78 – $56.99</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail">
                                        <a href="product-default.html"><img src="img/products/arrivals/3.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price">$125.30</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail">
                                        <a href="product-default.html"><img src="img/products/arrivals/4.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price">$55.30</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail">
                                        <a href="product-default.html"><img src="img/products/arrivals/5.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$41.27 <del>$52.99 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail">
                                        <a href="product-default.html"><img src="img/products/arrivals/6.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$41.27 <del>$62.39 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-panel__footer text-center"><a href="shop-default.html">See all results</a></div>
                        </div>
                    </form>
                </div>
                <div class="header__right">
                    <div class="header__actions"><a class="header__extra" href="#"><i class="icon-chart-bars"></i><span><i>0</i></span></a>
                    <!-- <a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a> -->
                        <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items">
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail">
                                            <a href="#"><img src="img/products/clothing/7.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail">
                                            <a href="#"><img src="img/products/clothing/5.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-cart__footer">
                                    <h3>Sub Total:<strong>$59.99</strong></h3>
                                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <?php 
                                if(isset($_SESSION['userid'])){
                                    echo'<div class="ps-block__left"><i class="icon-user"></i></div>
                                    <div class="ps-block__right"><a href="logout.php">Log Out</a></div>';

                                }
                                else {
                                    echo'<div class="ps-block__left"><i class="icon-user"></i></div>
                                    <div class="ps-block__right"><a href="login.php">Login</a></div>';
                                }
                                
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="ps-container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                <li><a href="#.html">Hot Promotions</a>
                                </li>
                                <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Electronic<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="#.html">Home Audio &amp; Theathers</a>
                                                </li>
                                                <li><a href="#.html">TV &amp; Videos</a>
                                                </li>
                                                <li><a href="#.html">Camera, Photos &amp; Videos</a>
                                                </li>
                                                <li><a href="#.html">Cellphones &amp; Accessories</a>
                                                </li>
                                                <li><a href="#.html">Headphones</a>
                                                </li>
                                                <li><a href="#.html">Videosgames</a>
                                                </li>
                                                <li><a href="#.html">Wireless Speakers</a>
                                                </li>
                                                <li><a href="#.html">Office Electronic</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__column">
                                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="#.html">Digital Cables</a>
                                                </li>
                                                <li><a href="#.html">Audio &amp; Video Cables</a>
                                                </li>
                                                <li><a href="#.html">Batteries</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#.html">Clothing &amp; Apparel</a>
                                </li>
                                <li><a href="#.html">Home, Garden &amp; Kitchen</a>
                                </li>
                                <li><a href="#.html">Health &amp; Beauty</a>
                                </li>
                                <li><a href="#.html">Yewelry &amp; Watches</a>
                                </li>
                                <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="#.html">Computer &amp; Tablets</a>
                                                </li>
                                                <li><a href="#.html">Laptop</a>
                                                </li>
                                                <li><a href="#.html">Monitors</a>
                                                </li>
                                                <li><a href="#.html">Networking</a>
                                                </li>
                                                <li><a href="#.html">Drive &amp; Storages</a>
                                                </li>
                                                <li><a href="#.html">Computer Components</a>
                                                </li>
                                                <li><a href="#.html">Security &amp; Protection</a>
                                                </li>
                                                <li><a href="#.html">Gaming Laptop</a>
                                                </li>
                                                <li><a href="#.html">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#.html">Babies &amp; Moms</a>
                                </li>
                                <li><a href="#.html">Sport &amp; Outdoor</a>
                                </li>
                                <li><a href="#.html">Phones &amp; Accessories</a>
                                </li>
                                <li><a href="#.html">Books &amp; Office</a>
                                </li>
                                <li><a href="#.html">Cars &amp; Motocycles</a>
                                </li>
                                <li><a href="#.html">Home Improments</a>
                                </li>
                                <li><a href="#.html">Vouchers &amp; Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation__right">
                    <ul class="menu">
                        <li class="menu-item-has-children"><a href="index">Home</a><span class="sub-toggle"></span>
                            <ul class="sub-menu">
                                <li><a href="index.html">Marketplace Full Width</a>
                                </li>
                                <li><a href="home-autopart.html">Home Auto Parts</a>
                                </li>
                                <li><a href="home-technology.html">Home Technology</a>
                                </li>
                                <li><a href="home-organic.html">Home Organic</a>
                                </li>
                                <li><a href="home-marketplace.html">Home Marketplace V1</a>
                                </li>
                                <li><a href="home-marketplace-2.html">Home Marketplace V2</a>
                                </li>
                                <li><a href="home-marketplace-3.html">Home Marketplace V3</a>
                                </li>
                                <li><a href="home-marketplace-4.html">Home Marketplace V4</a>
                                </li>
                                <li><a href="home-electronic.html">Home Electronic</a>
                                </li>
                                <li><a href="home-furniture.html">Home Furniture</a>
                                </li>
                                <li><a href="home-kid.html">Home Kids</a>
                                </li>
                                <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                                </li>
                                <li><a href="home-medical.html">Home Medical</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="shop-default">Shop</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="shop-default.html">Shop Default</a>
                                        </li>
                                        <li><a href="shop-default.html">Shop Fullwidth</a>
                                        </li>
                                        <li><a href="shop-categories.html">Shop Categories</a>
                                        </li>
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a>
                                        </li>
                                        <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                        </li>
                                        <li><a href="shop-carousel.html">Shop Carousel</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="product-default.html">Default</a>
                                        </li>
                                        <li><a href="product-extend.html">Extended</a>
                                        </li>
                                        <li><a href="product-full-content.html">Full Content</a>
                                        </li>
                                        <li><a href="product-box.html">Boxed</a>
                                        </li>
                                        <li><a href="product-sidebar.html">Sidebar</a>
                                        </li>
                                        <li><a href="product-default.html">Fullwidth</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Types<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="product-default.html">Simple</a>
                                        </li>
                                        <li><a href="product-default.html">Color Swatches</a>
                                        </li>
                                        <li><a href="product-image-swatches.html">Images Swatches</a>
                                        </li>
                                        <li><a href="product-countdown.html">Countdown</a>
                                        </li>
                                        <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                                        </li>
                                        <li><a href="product-instagram.html">Instagram</a>
                                        </li>
                                        <li><a href="product-affiliate.html">Affiliate</a>
                                        </li>
                                        <li><a href="product-on-sale.html">On sale</a>
                                        </li>
                                        <li><a href="product-video.html">Video Featured</a>
                                        </li>
                                        <li><a href="product-groupped.html">Grouped</a>
                                        </li>
                                        <li><a href="product-out-stock.html">Out Of Stock</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="shopping-cart.html">Shopping Cart</a>
                                        </li>
                                        <li><a href="checkout.html">Checkout</a>
                                        </li>
                                        <li><a href="whishlist.html">Whishlist</a>
                                        </li>
                                        <li><a href="compare.html">Compare</a>
                                        </li>
                                        <li><a href="order-tracking.html">Order Tracking</a>
                                        </li>
                                        <li><a href="my-account.html">My Account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Basic Page<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="about-us.html">About Us</a>
                                        </li>
                                        <li><a href="contact-us.html">Contact</a>
                                        </li>
                                        <li><a href="faqs.html">Faqs</a>
                                        </li>
                                        <li><a href="comming-soon.html">Comming Soon</a>
                                        </li>
                                        <li><a href="404-page.html">404 Page</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="become-a-vendor.html">Become a Vendor</a>
                                        </li>
                                        <li><a href="vendor-store.html">Vendor Store</a>
                                        </li>
                                        <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                        </li>
                                        <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="">Blogs</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Blog Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="blog-grid.html">Grid</a>
                                        </li>
                                        <li><a href="blog-list.html">Listing</a>
                                        </li>
                                        <li><a href="blog-small-thumb.html">Small Thumb</a>
                                        </li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Single Blog<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="blog-detail.html">Single 1</a>
                                        </li>
                                        <li><a href="blog-detail-2.html">Single 2</a>
                                        </li>
                                        <li><a href="blog-detail-3.html">Single 3</a>
                                        </li>
                                        <li><a href="blog-detail-4.html">Single 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--  <ul class="navigation__extra">
                        <li><a href="#">Sell on Martfury</a></li>
                        <li><a href="#">Tract your order</a></li>
                        <li>
                           <div class="ps-dropdown"><a href="#">US Dollar</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#">Us Dollar</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </div> 
                        </li>
                        <li>
                            <div class="ps-dropdown language">
                                <a href="#"><img src="img/flag/en.png" alt="" />English</a>
                                <ul class="ps-dropdown-menu">
                                    <li>
                                        <a href="#"><img src="img/flag/germany.png" alt="" /> Germany</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/flag/fr.png" alt="" /> France</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>-->
                </div>
            </div>
        </nav>
    </header>
    <header class="header header--mobile" data-sticky="true">
        <div class="header__top">
            <div class="header__left">
                <p>Welcome to Martfury Online Shopping Store !</p>
            </div>
            <div class="header__right">
                <!--<ul class="navigation__extra">
                    <li><a href="#">Sell on Martfury</a></li>
                    <li><a href="#">Tract your order</a></li>
                    <li>
                          <div class="ps-dropdown"><a href="#">US Dollar</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#">Us Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="ps-dropdown language">
                            <a href="#"><img src="img/flag/en.png" alt="" />English</a>
                            <ul class="ps-dropdown-menu">
                                <li>
                                    <a href="#"><img src="img/flag/germany.png" alt="" /> Germany</a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/flag/fr.png" alt="" /> France</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>-->
            </div>
        </div>
        <div class="navigation--mobile">
            <div class="navigation__left">
                <a class="ps-logo" href="index.html"><img src="img/logo_light.png" alt="" /></a>
            </div>
            <div class="navigation__right">
                <div class="header__actions">
                    <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                        <div class="ps-cart__content">
                            <div class="ps-cart__items">
                                <div class="ps-product--cart-mobile">
                                    <div class="ps-product__thumbnail">
                                        <a href="#"><img src="img/products/clothing/7.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                    </div>
                                </div>
                                <div class="ps-product--cart-mobile">
                                    <div class="ps-product__thumbnail">
                                        <a href="#"><img src="img/products/clothing/5.jpg" alt="" /></a>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-cart__footer">
                                <h3>Sub Total:<strong>$59.99</strong></h3>
                                <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="ps-block--user-header">
                        <div class="ps-block__left"><a href="my-account.html"><i class="icon-user"></i></a></div>
                        <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something..." />
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>
