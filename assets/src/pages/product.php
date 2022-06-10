<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/product.css">
    <title>Products | Pizzaringa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <nav>
            <a class="navbar-brand" href="../../../index.php">
                <div class="logo-image">
                   <img src="../images/logo2.png" class="img-fluid">
                </div>
            </a>
            <ul>
                <li><a href="product.php">Product</a></li>
                <li><a href="promos.php">Promos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <button class="nav-button" onClick="location.href='#'">Order Now</button>
        </nav>
        <img class="featured-product" src = "../images/pizza-feature.svg" alt="Pizza Preview"/>
        <div class="product-info">
            <p class="mini-title">All-new </p>
            <p class="head-title">Hawaiian MB Pizza </p>
            <p class="feature-desc">Hawaiian MB Pizza combines pizza sauce, <br>
                cheese, cooked ham and pineapple.</p>
            <p class="pricing">Just for <span style="font-weight:bold;">₱199</span></p>
            <button class="product-button" onClick="location.href='order.php'">Order Now</button>    
        </div>    
    </div>
</body>

    <footer class="footer-distributed">

        <div class="footer-left">

            <div class="logo-image">
                <img src="../images/Logo.png">
             </div>

             <p class="footer-links">
                <a href="../../../index.php">Home</a>
                ·
                <a href="product.php">Product</a>
                ·
                <a href="contact.php">Contact</a>
                ·
                <a href="about.php">About</a>
                ·
                <a href="order.php">Order</a>
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

            <form id="myForm" action="../../back-end/connect-footer.php" method="post">

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