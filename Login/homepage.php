<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="https://nikaskh.github.io/Lesson12/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="lesson 12">
    <meta property="og:description" content="website for house">
    <meta property="og:image" content="https://raw.githubusercontent.com/nikaskh/Lesson12/main/img/meta-logo.png">
    <title>Lesson12</title>
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
    <header>
        <div class="header-main-div">
           <a href="homepage.php"><img src="img/logo.svg" alt="logo" class="logo"></a> 
             <nav>
                <ul class="nav-ul">
                    <li><a href="#">მთავარი</a></li>
                    <li><a href="contactus.php">კონტაქტი</a></li>
                    <li><a href="#">ბინები</a></li>
                </ul>
             </nav>
             <div style="text-align:center;">
      <p >
         <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
      </p>
      <a href="logout.php" class="logout">Logout</a>
    </div>
        </div>  
    </header>
    <section class="first-section-slide">
        <div class="slider">
            <div class="slide">
                <img src="img/pexels-photo-186077.jpeg" class="slide-img" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="img/Rectangle 425.svg" class="slide-img" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="img/Rectangle 431.svg" class="slide-img" alt="Slide 3">
            </div>
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </section>

    <!-- start second section -->
    <section>
        <div class="second-section-div">
            <h2 style="width: 22%;margin-top: 32px; margin-bottom: 20px;    font-family: poppins-regular;">პოპულარული ბინები</h2>
            <div class="article-main-div">
            <article class="second-section-article">
                <a href="page.php" target="_blank">
                    <div class="second-section-article-div">
                        <img src="img/Rectangle 425.svg" alt="" class="second-section-img">
                        <img src="img/Frame (1).svg" alt="" class="add-favorite">
                        <p>VIP TOP+</p>
                    </div>
                <h5>ბინა თბილისში</h5>
                <p class="second-section-description">თბილისი , სააკაძე</p>
                <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
                <ul>
                    <li>5 საძინებელი</li>
                    <li>3 ოთახი</li>
                    <li>200 მ/2</li>
                </ul>
            </a>
            </article>
            <article class="second-section-article">
                <a href="page.php" target="_blank">
                    <div class="second-section-article-div">
                        <img src="img/Rectangle 431.svg" alt="" class="second-section-img">
                        <img src="img/Frame (1).svg" alt="" class="add-favorite">
                        <p>VIP TOP+</p>
                    </div>
                    <h5>ბინა თბილისში</h5>
                <p class="second-section-description">თბილისი , სააკაძე</p>
                <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
                <ul>
                    <li>5 საძინებელი</li>
                    <li>3 ოთახი</li>
                    <li>200 მ/2</li>
                </ul>
            </a>
            </article>
            <article class="second-section-article">
                <a href="page.php" target="_blank">
                    <div class="second-section-article-div">
                        <img src="img/Rectangle 541.svg" alt="" class="second-section-img">
                        <img src="img/Frame (1).svg" alt="" class="add-favorite">
                        <p>VIP TOP+</p>
                    </div>
                    <h5>ბინა თბილისში</h5>
                <p class="second-section-description">თბილისი , სააკაძე</p>
                <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
                <ul>
                    <li>5 საძინებელი</li>
                    <li>3 ოთახი</li>
                    <li>200 მ/2</li>
                </ul>
            </a>
            </article>
            <article class="second-section-article">
                <a href="page.php" target="_blank">
                    <div class="second-section-article-div">
                        <img src="img/Rectangle 425.svg" alt="" class="second-section-img">
                        <img src="img/Frame (1).svg" alt="" class="add-favorite">
                        <p>VIP TOP+</p>
                    </div>
                    <h5>ბინა თბილისში</h5>
                <p class="second-section-description">თბილისი , სააკაძე</p>
                <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
                <ul>
                    <li>5 საძინებელი</li>
                    <li>3 ოთახი</li>
                    <li>200 მ/2</li>
                </ul>
                </ul>
            </a>
            </article>
            <article class="second-section-article">
                <a href="page.php" target="_blank">
                    <div class="second-section-article-div">
                        <img src="img/Rectangle 431.svg" alt="" class="second-section-img">
                        <img src="img/Frame (1).svg" alt="" class="add-favorite">
                        <p>VIP TOP+</p>
                    </div>
                    <h5>ბინა თბილისში</h5>
                <p class="second-section-description">თბილისი , სააკაძე</p>
                <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
                <ul>
                    <li>5 საძინებელი</li>
                    <li>3 ოთახი</li>
                    <li>200 მ/2</li>
                </ul>
                </ul>
            </a>
            </article>
            <article class="second-section-article">
                <a href="page.php" target="_blank">
                    <div class="second-section-article-div">
                        <img src="img/Rectangle 541.svg" alt="" class="second-section-img">
                        <img src="img/Frame (1).svg" alt="" class="add-favorite">
                        <p>VIP TOP+</p>
                    </div>
                    <h5>ბინა თბილისში</h5>
                <p class="second-section-description">თბილისი , სააკაძე</p>
                <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
                <ul>
                    <li>5 საძინებელი</li>
                    <li>3 ოთახი</li>
                    <li>200 მ/2</li>
                </ul>
                </ul>
            </a>
            </article>
            <article class="second-section-article">
                <a href="page.php" target="_blank">
                    <div class="second-section-article-div">
                        <img src="img/Rectangle 431.svg" alt="" class="second-section-img">
                        <img src="img/Frame (1).svg" alt="" class="add-favorite">
                        <p>VIP TOP+</p>
                    </div>
                    <h5>ბინა თბილისში</h5>
                <p class="second-section-description">თბილისი , სააკაძე</p>
                <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
                <ul>
                    <li>5 საძინებელი</li>
                    <li>3 ოთახი</li>
                    <li>200 მ/2</li>
                </ul>
                </ul>
            </a>
            </article>
            <article class="second-section-article">
                <a href="page.php" target="_blank">
                    <div class="second-section-article-div">
                        <img src="img/Rectangle 425.svg" alt="" class="second-section-img">
                        <img src="img/Frame (1).svg" alt="" class="add-favorite">
                        <p>VIP TOP+</p>
                    </div>
                    <h5>ბინა თბილისში</h5>
                <p class="second-section-description">თბილისი , სააკაძე</p>
                <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
                <ul>
                    <li>5 საძინებელი</li>
                    <li>3 ოთახი</li>
                    <li>200 მ/2</li>
                </ul>
                </ul>
                </a>
            </article>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-conteiner-main">
            <div class="footer-conteiner">
            <ul>
                <li><a href="index.html">მთავარი</a></li>
                <li><a href="#">ჩვენს შესახებ</a></li>
                <li><a href="contactus.html">კონტაქტი</a></li>
                <li><a href="/logout.php">შესვლა</a></li>
            </ul>
            <a href="mailtoSupport@Roberts.com" style="padding-top: 32px; color: white;" class="mail">Created by:skhiladze.n@gtu.ge</a>
            <ul class="footer-ul">
            </ul>
    </footer>
    <script src="JS/slider.js"></script>
</body>
</html>