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
    <title>Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/page-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header>
        <div class="header-main-div-page">
           <a href="#"><img src="img/logo.svg" alt="logo" class="logo"></a> 
             <nav>
                <ul class="nav-ul">
                    <li><a href="homepage.php">მთავარი</a></li>
                    <li><a href="contactus.php" target="_blank">კონტაქტი</a></li>
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
    <section>
        <div class="first-page-conteiner">
            <div class="first-photo">
                <img src="img/page-photo.svg" alt="" class="section-photo">
            </div>
            <div class="data-div">
                <ul class="first-ul">
                    <li>VIP TOP+</li>
                    <li>დაიპოსტა 1 საათის წინ</li>
                    <li>842 ნახვა</li>
                </ul>
                <h1>2 ოთახი აპარტამენტში, ქირავდება</h1>
                <p class="data-div-first-p">ბინა თბილისში</p>
                <p  class="data-div-second-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam,
                purus sit amet luctus venenatis, lectus magna fringilla urna,
                porttitor rhoncus dolor purus non enim praesent elementum 
                facilisis leo, vel fringilla est ullamcorper eget</p>
                <ul class="second-ul">
                    <li>აპარტამენტი/li>
                    <li>3 ოთახი</li>
                    <li>2 საძინებელი</li>
                    <li>პარკინგი</li>
                </ul>
                <!-- last three ul -->
                <div class="last-three-ul-div">
                    <ul class="last-first-ul">
                        <li><h5>მისამართი</h5>თბილისი,სააკაძის 5</li>
                        <li><h5>დანიშნულება</h5>იყიდება ან ქირავდება</li>
                        <li><h5>მდგომარეობა</h5>ახალი</li>
                    </ul>
                    <!-- second ul -->
                    <ul class="last-second-ul">
                        <h5>საშუალებები</h5>
                        <li>24/24 ელექტროენერგია</li>
                        <li>იტალიური სამზარეულო</li>
                        <li>მაღალი ხარისხის რემონტი</li>
                        <li>ცხელი წყალი</li>
                        <li>დიდი მისაღები</li>
                        <li>ავეჯი</li>
                    </ul>
                    <!-- third ul -->
                    <ul class="last-first-ul">
                        <li><h5>მშენებლობა</h5>ახალი რემონტი</li>
                        <li><h5>ფართი</h5>220 მ/2</li>
                    </ul>
                </div>
                <div class="price-div">
                    <p class="price-p"><span>1450 $</span> / თვეში</p>
                    <div class="button-div">
                        <a href="contactus.html" class="sent-message">მოგვწერეთ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <article class="second-section-article">
            <a href="page.php" target="_blank">
                <div class="second-section-article-div">
                    <img src="img/Rectangle 431.svg" alt="" class="second-section-img">
                    <img src="img/Frame (1).svg" alt="" class="add-favorite">
                    <p>VIP TOP+</p>
                </div>
            <h5>ბინა თბილისში</h5>
            <p class="second-section-description">იყიდება ან ქირავდება</p>
            <p class="second-section-price"><span>1450 $ </span>/ თვეში</p>
            <ul>
                <li>5 ოთახი</li>
                <li>3 საძინებელი</li>
                <li>450 მ/2</li>
            </ul>
        </a>
        </article>
    </section>
    <footer>
        <div class="footer-conteiner-main">
            <div class="footer-conteiner">
            <ul>
                <li><a href="#">მთავარი</a></li>
                <li><a href="#">კონტაქტი</a></li>
                <li><a href="#">შესვლა</a></li>
            </ul>
            <a href="mailtoskhiladze.n@gtu.ge" style="padding-top: 32px; color: white;" class="mail">Created By:skhiladze.n@gtu.ge</a>
    </footer>
</body>
</html>