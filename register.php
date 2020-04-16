<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscribe</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <link rel="stylesheet" href="bootstrap/css/footer.css">
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <!-- Grey with black text -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<form action="register_handler.php"style="border:1px solid #ccc"method="post">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to Subscribe.</p>
        <hr>

        <label><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="user" required>

        <label><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label><b>Phone Number</b></label>
        <input type="number" placeholder="Enter Phone Number" name="number" required>

        <label>
            <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button"  class="cancelbtn">Cancel</button>
            <button type="submit" name="btn_submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

<!--Footer-->
<footer class="footer-distributed">
    <div class="footer-left">
        <img src="image/logo.png">
        <h3>About<span>Raff Cafe</span></h3>

        <p class="footer-links">
            <a href="index.php">Home</a>
            |
            <a href="register.php">Register</a>
            |
            <a href="about_us.php">About</a>

        </p>

        <p class="footer-company-name">©2020 Raff Caffe</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>309 - Westlands Rd,
             Bldg. No. A - 1, Sector - 1</span>
                Westlands, Nairobi Kenya - 400710</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+254 772 800613</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@raffcafe.com">support@raffcaffe.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            Raffs cafe is definitely the place you want to be when in need of a quick, tasty meal, a fun time time with the kids, a meeting
            with colleagues or on special occasions with family or friends.</p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>


</body>
</html>
