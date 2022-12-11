    <!--header-->
    <header class="header">
        <a href="https://beta.kharis.shop">
            <img src="https://beta.kharis.shop/images/logo.png" alt="ロゴ">            
        </a>
        <nav class="header_nav">
            <ul>
                <li><a href="#">Products</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact</a></li>
                <!--<?php
                if (isset($_SESSION['user_id'])) {
                    echo '<a href="https://beta.kharis.shop/user/logout">
                        <li>Logout</li>';
                }
            ?>-->
            </ul>
        </nav>
        <div class="header_icon">

            <!--search-->
            <div class="icon_items">
                <a href="https://beta.kharis.shop/search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>

            <!--Carts-->
            <div class="icon_items">
                <a href="https://beta.kharis.shop/carts">
                    <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                </a>
            </div>

            <!--icon-->
            <div class="icon_items">
            <?php 
            if(!isset($_SESSION['user_id'])) {
                echo '<a href="http://kharis.shop/user/login">';
            }else{
                echo '<a href="http://kharis.shop/user/settings">';
            }
            
            if (!isset($_SESSION['user_id'])) {
                echo '<i class="fa-solid fa-user"></i>';
            }else{
                echo '<img src="../images/user_icon/'.$_SESSION['user_icon'].' "class="user_icon">';              }
            ?>
            </a>
            </div>
        </div>
    </header>
    <!--header-->
