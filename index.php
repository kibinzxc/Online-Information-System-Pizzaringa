<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/src/css/home.css">
    <title>Pizzaringa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <nav>
            <a class="navbar-brand" href="index.php">
                <div class="logo-image">
                   <img src="assets/src/images/logo2.png" class="img-fluid">
                </div>
            </a>
            <ul>
                <li><a href="assets/src/pages/product.php">Product</a></li>
                <li><a href="assets/src/pages/promos.php">Promos</a></li>
                <li><a href="assets/src/pages/contact.php">Contact</a></li>
                <li><a href="assets/src/pages/about.php">About</a></li>
            </ul>
            <button class="nav-button" onClick="location.href='assets/src/pages/order.php'">Order Now</button>
        </nav>
        <p class="wrapper-heading">Your family<br>
            <span style="color:	#fab040; font-weight: 700; font-style: italic;">
                healthy pizza</span></p>
        <img class="feature-brand" src = "assets/src/images/Pizza.svg" alt="Pizza Preview"/>
        <p class="brand-title">Hawaiian MB Pizza</p>
    </div>
</body>

    <footer class="footer-distributed">

        <div class="footer-left">

            <div class="logo-image">
                <img src="assets/src/images/Logo5.png">
             </div>

             <p class="footer-links">
                <a href="index.php">Home</a>
                ·
                <a href="assets/src/pages/product.php">Product</a>
                ·
                <a href="assets/src/pages/contact.php">Contact</a>
                ·
                <a href="assets/src/pages/about.php">About</a>
                ·
                <a href="assets/src/pages/order.php">Order</a>
            </p>

            <p class="footer-company-name">Pizzaringa © 2019</p>

            <div class="footer-icons">

                <a href="https://www.facebook.com/PizzaMoringa"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/pizzaringa"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/pizzamoringa"><i class="fa fa-instagram"></i></a>
                <a href="https://t.me/pizzaringa"><i class="fa fa-telegram"></i></a>
            </div>

        </div>

        <div class="footer-right">

            <p>Contact Us</p>

            <form id="myForm" action="assets/back-end/connect-footer.php" method="post">

                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button onclick="myFunction()">Send</button>

            </form>

        </div>

    </footer>
    <script>
        function myFunction() {
        alert("Your Message Has Been Recorded");
        }
    </script>
</html>
