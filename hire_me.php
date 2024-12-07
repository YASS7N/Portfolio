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
        header("Location: hire_me.php?status=success");
        exit();
    } else {
        header("Location: hire_me.php?status=error");
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
<title>YASS7N Portfolio | Hire Me</title>
<link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="icon" href="assets/imgs/logo.ico" type="image/x-icon">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
<div class="container">
<a class="logo" href="index.php">YASS7N</a>
<ul class="nav">
    <li class="item">
        <a class="link" href="index.php">Home</a>
    </li>
    <li class="item">
    <a class="link" href="index.php#about">About</a>
    </li>
    <li class="item">
        <a class="link" href="index.php#portfolio">Portfolio</a>
    </li>
    <li class="item">
        <a class="link" href="index.php#contact">Contact</a>
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
<section class="section" id="contact">
<div class="container text-center py-5 rounded shadow-sm">
    <form action="index.php" class="contact-form col-md-10 col-lg-8 m-auto p-4 bg-white rounded shadow-sm" method="POST">
    <h6 class="section-title mb-5 text-primary">Hire Me</h6>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <input type="text" size="50" class="form-control bg-light" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="email" class="form-control bg-light" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group col-sm-12">
                <textarea name="comment" id="comment" rows="6" class="form-control bg-light" placeholder="Your Service"></textarea>
            </div>
            <div class="form-group col-sm-12 mt-3">
                <input type="submit" value="Send Message" class="btn btn-primary rounded">
            </div>
        </div>
    </form>
</div>



</div>
</section>
</div>
</header>
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