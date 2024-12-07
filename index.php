<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $service = ($_POST['comment']);

    $sql = "INSERT INTO clients (name, email, service) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing the SQL statement: " . $conn->error);
    }

    $stmt->bind_param("sss", $name, $email, $service);

    if ($stmt->execute()) {
        header("Location: index.php?status=success");
        exit();
    } else {
        header("Location: index.php?status=error");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Start your development with Meyawo landing page.">
<meta name="author" content="Devcrud">
<title>YASS7N Portfolio</title>
<link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="icon" href="assets/imgs/logo.ico" type="image/x-icon">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
<div class="container">
<a class="logo" href="#">YASS7N</a>
<ul class="nav">
    <li class="item">
        <a class="link" href="#home">Home</a>
    </li>
    <li class="item">
        <a class="link" href="#about">About</a>
    </li>
    <li class="item">
        <a class="link" href="#portfolio">Portfolio</a>
    </li>
    <li class="item">
        <a class="link" href="#contact">Contact</a>
    </li>
    <li class="item ml-md-3">
        <a href="hire_me.php" class="btn btn-primary">Hire Me</a>
    </li>
</ul>
<a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
    <div class="hamburger-box">
        <div class="hamburger-inner"></div>
    </div>
</a>
</div>
</nav>
<header id="home" class="header">
<div class="overlay"></div>
<div class="header-content container">
<h1 class="header-title">
    <span class="up">HI!</span>
    <span class="down">I am Yassin Fikri</span>
</h1>
<p class="header-subtitle">A Full-Stack Developer & Designer and Video Editor</p>

<button class="btn btn-primary">Visit My Works</button>
</div>
</header>
<section class="section pt-0" id="about">
<div class="container text-center">
<div class="about">
    <div class="about-img-holder">
        <img src="assets/imgs/logo.png" class="about-img">
    </div>
    <div class="about-caption">
        <p class="section-subtitle">Who Am I ?</p>
        <h2 class="section-title mb-3">About Me</h2>
        <p>
            Hi! My name is Yassin, and I'm a 20-year-old student currently pursuing a degree in Software Engineering. 
            Passionate about technology, problem-solving, 
            and innovation, I enjoy building creative and functional software solutions.

            In my free time, I love exploring new programming techniques and working on personal projects to sharpen my skills. 
            My goal is to contribute to impactful tech advancements and make a difference in the digital world.
        </p>
        <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button>
    </div>
</div>
</div>
</section> 
<section class="section" id="service">
<div class="container text-center">
<p class="section-subtitle">What I Do ?</p>
<h6 class="section-title mb-6">Service</h6>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="body">
                <img src="assets/imgs/pencil-case.svg"
                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                    class="icon">
                <h6 class="title">Design</h6>
                <p class="subtitle">I create modern, user-friendly, and responsive designs tailored to your needs.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="body">
                <img src="assets/imgs/code.svg"
                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                    class="icon">
                <h6 class="title">Web Development</h6>
                <p class="subtitle">I create functional and dynamic websites, combining clean design with database and backend</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="body">
                <img src="assets/imgs/toolbox.svg"
                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                    class="icon">
                <h6 class="title">Code Repair</h6>
                <p class="subtitle">I fix issues and optimize existing projects to improve performance and functionality.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="body">
                <img src="assets/imgs/video.svg"
                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                     class="icon">
                <h6 class="title">Video Editing</h6>
                <p class="subtitle">I create engaging and professional video content with seamless edits and effects.</p>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<section class="section" id="portfolio">
<div class="container text-center">
<p class="section-subtitle">What I Did ?</p>
<h6 class="section-title mb-6">Portfolio</h6>
<div class="row">
    <div class="col-md-4">
        <a href="#" class="portfolio-card">
            <img src="assets/imgs/folio1.jpg" class="portfolio-card-img">
            <span class="portfolio-card-overlay">
                <span class="portfolio-card-caption">
                    <h4>Car Repair Website</h5>
                        <p class="font-weight-normal">Category: Web Development</p>
                </span>
            </span>
        </a>
    </div>
    <div class="col-md-4">
        <a href="#" class="portfolio-card">
            <img class="portfolio-card-img" src="assets/imgs/folio-2.jpg" class="img-responsive rounded"
                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
            <span class="portfolio-card-overlay">
                <span class="portfolio-card-caption">
                    <h4>Web Designing</h5>
                        <p class="font-weight-normal">Category: Web Templates</p>
                </span>
            </span>
        </a>
    </div>
    <div class="col-md-4">
        <a href="#" class="portfolio-card">
            <img class="portfolio-card-img" src="assets/imgs/folio-3.jpg" class="img-responsive rounded"
                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
            <span class="portfolio-card-overlay">
                <span class="portfolio-card-caption">
                    <h4>Web Designing</h5>
                        <p class="font-weight-normal">Category: Web Templates</p>
                </span>
            </span>
        </a>
    </div>
</div>
</div>
</section> 
<section class="section" id="pricing">
<div class="container text-center">
<p class="section-subtitle">How Much I Charge ?</p>
<h6 class="section-title mb-6">My Pricing</h6>
<div class="pricing-wrapper">
    <div class="pricing-card">
        <div class="pricing-card-header">
            <img class="pricing-card-icon" src="assets/imgs/scooter.svg"
                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
        </div>
        <div class="pricing-card-body">
            <h6 class="pricing-card-title">Free</h6>
            <div class="pricing-card-list">
                <p>Standard support</p>
                <p>Timely delivery</p>
                <p>Basic features</p>
                <p>Minor revisions</p>
            </div>
        </div>
        <div class="pricing-card-footer">
            <span>$</span>
            <span>0.00</span>
        </div>
        <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
    </div>
    <div class="pricing-card">
        <div class="pricing-card-header">
            <img class="pricing-card-icon" src="assets/imgs/shipped.svg"
                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
        </div>
        <div class="pricing-card-body">
            <h6 class="pricing-card-title">Basic</h6>
            <div class="pricing-card-list">
                <p>Improved support with quick response times</p>
                <p>Reliable delivery</p>
                <p>Advanced features</p>
                <p>Moderate revisions</p>
            </div>
        </div>
        <div class="pricing-card-footer">
            <span>$</span>
            <span>4.99</span>
        </div>
        <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
    </div>
    <div class="pricing-card">
        <div class="pricing-card-header">
            <img class="pricing-card-icon" src="assets/imgs/startup.svg"
                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
        </div>
        <div class="pricing-card-body">
            <h6 class="pricing-card-title">Premium</h6>
            <div class="pricing-card-list">
                <p>Premium support with dedicated assistance</p>
                <p>Fast delivery</p>
                <p>Comprehensive  features</p>
                <p>Unlimited revisions</p>
            </div>
        </div>
        <div class="pricing-card-footer">
            <span>$</span>
            <span>9.99</span>
        </div>
        <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
    </div>
</div>
</div> 
</section>
<section class="section-sm bg-primary">
<div class="container text-center text-sm-left">
<div class="row align-items-center">
    <div class="col-sm offset-md-1 mb-4 mb-md-0">
        <h6 class="title text-light">Want to work with me?</h6>
        <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
    </div>
    <div class="col-sm offset-sm-2 offset-md-3">
    <a href="hire_me.php" class="btn btn-lg my-font btn-light rounded">Hire Me</a>
    </div>
</div> 
</div> 
</section>
<section class="section" id="contact">
<div class="container text-center">
<p class="section-subtitle">How can you communicate?</p>
<h6 class="section-title mb-5">Contact Me</h6>
<form action="index.php" class="contact-form col-md-10 col-lg-8 m-auto" method="POST">
    <div class="form-row">
        <div class="form-group col-sm-6">
            <input type="text" size="50" class="form-control" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group col-sm-6">
            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group col-sm-12">
            <textarea name="comment" id="comment" rows="6" class="form-control" name="service" placeholder="Your Service"></textarea>
        </div>
        <div class="form-group col-sm-12 mt-3">
            <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
        </div>
    </div>
</form>
</div>
</section>
<div class="container">
<footer class="footer">
<p class="mb-0">Copyright<script>document.write(new Date().getFullYear())</script> &copy;YASS7N</a></p>
<div class="social-links text-right m-auto ml-sm-auto">
    <a href="https://github.com/YASS7N" class="link"><i class="ti-github"></i></a>
    <a href="https://www.instagram.com/yass7n_/?next=%2F" class="link"><i class="ti-instagram"></i></a>
    <a href="https://www.youtube.com/@ITSYASS7N" class="link"><i class="ti-youtube"></i></a>
    <a href="https://x.com/ITSYASS7N" class="link"><i class="ti-twitter-alt"></i></a>
</div>
</footer>
</div> 
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
<script src="assets/js/meyawo.js"></script>
<script src="assets/js/alert.js"></script>
</body>

</html>