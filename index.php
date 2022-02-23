<!DOCTYPE html>
<html>
<head>
    <!-- Meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all">
    <meta name="language" content="Dutch">
    <meta name="author" content="Saad, Pharell">
    <meta name="description" content="">
    <meta name="keywords" content="AmuseNews, News, Anime, Gaming, Basketball">
    <meta name="copyright" content="copyright">

    <!-- CSS link -->
    <link rel="stylesheet" href="style.css">

    <!-- Hamburger link for small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Website titel -->
    <title>AmuseNews</title>
</head>
<body>
    <div class="topnav">
        <img src="img/" class="responsive">
        <div class="topnav" id="myTopnav">
            <ul>
                <a  href="#home">Home</a>
                <a  href="#anime">Anime</a>
                <a  href="#basketball">Basketbal</a>
                <a  href="#gaming">Gaming</a>
                <a  href="#contact">Contact</a>
                <a  href="login.php">Login</a>
                <a  href="register.php">Abonneer nu</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></a>
            </ul>
        </div>
    </div>
    <main>
        <section id="home">
            <div class="slideshow-container">
                <h2>De laatste nieuws</h2>
                <div class="mySlides fade">
                    <div class="numbertext">Anime</div>
                    <img src="./img/aots4p2.jpeg" style="width:100%">
                    <div class="text">Test</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">Basketbal</div>
                    <img src="./img/" style="width:100%">
                    <div class="text">Test</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">Gaming</div>
                    <img src="./img/" style="width:100%">
                    <div class="text">Test</div>
                </div>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
            <div class="top3news">

            </div>
        </section>
    </main>
<script src="nav.js"></script>
<script src="slideshow.js"></script>
</body>
</html>