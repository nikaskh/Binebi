<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="https://nikaskh.github.io/Lesson12/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contact Us - Lesson12">
    <meta property="og:description" content="Get in touch with us for any inquiries or feedback.">
    <meta property="og:image" content="https://raw.githubusercontent.com/nikaskh/Lesson12/main/img/meta-logo.png">
    <title>Contact Us </title>
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-main-div">
            <a href="homepage.php"><img src="img/logo.svg" alt="logo" class="logo"></a> 
              <nav>
                 <ul class="nav-ul">
                     <li><a href="homepage.php">მთავარი</a></li>
                     <li><a href="contactus.php">კონტაქტი</a></li>
                     <li><a href="#">ჩვენს შესახებ</a></li>
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
      <a href="logout.php">Logout</a>
    </div>
         </div>
    </header>
    <section class="contact-section">
        <div class="contact-container">
            <h1>კონტაქტი</h1>
            <p>გააქვთ კითხვები?მოგვმართეთ და ჩვენ დაგიკავშირდებით</p>
            <form action="#" class="contact-form">
                <label for="name">სახელი:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">იმეილი:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">შეტყობინება:(მიუთითეთ რომელ ბინაზე გსურთ დეტალები.)</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">გაგზავნა</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer-conteiner-main">
            <div class="footer-conteiner">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Discover</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Sign in</a></li>
            </ul>
            <a href="mailtoSupport@Roberts.com" style="padding-top: 32px; color: white;" class="mail">Support@Roberts.com</a>
            <ul class="footer-ul">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
        <p style="text-align: center;padding-top: 32px; padding-bottom: 40px;color: white;">© 2022 Robert.co.ke Gibraltar</p>
        </div>
        <div class="footer-nav">
            <ul>
                <li><img src="mobile-img/Discover.svg" alt="">Home</li>
                <li><img src="mobile-img/3dcube.svg" alt="">Discover</li>
                <li><img src="mobile-img/Frame (2).svg" alt="">Sale</li>
                <li style="margin-left: 80px;"><img src="mobile-img/message.svg" alt="">Message</li>
                <li><img src="mobile-img/user.svg" alt="">Profile</li>
            </ul>
        </div>
    </footer>
</body>
</html>