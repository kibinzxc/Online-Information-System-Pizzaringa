<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <title>Contact Us | Pizzaringa</title>
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
            <button class="nav-button" onClick="location.href='order.php'">Order Now</button>
        </nav>
        <div class="wrapper3"><br><br>
            <h1 class="header1">Contact Us</h1>
            <div class="wrapper2">
                
                <form action="../../back-end/connect-contact.php" class="form" method="post">
                    <label for="fname" class="label">First Name</label>
                    <label for="lname" class="lname">Last Name</label>
                    <br>
                    <input type="text" id="fname" name="fname" placeholder="John" class="input-fname">
                    <input type="text" id="lname" name="lname" placeholder="Doe" class="input-lname"> <br><br>
                    <label for ="email" class="label">Email Address</label>
                    <br>
                    <input type="text" id="address" id="address" name="address" placeholder="Enter email address" class="input-many"><br><br>
                    <label for="contact" class="label">Contact Number</label>
            
                    <br>
                    <input type="number" id="contact" name="contact" placeholder="Phone Number"  maxlength="10" class="input-many"/>
                    <br><br>
                    
                    
                    <label for = "gid" class="label">Message:</label><br>
                    <textarea id="message" name="message" placeholder="Write something.." class="textarea"></textarea><br>
                    <input type="submit" class="btn1" onclick="myFunction()">
                    <input type ="reset" class="btn2">
                </form> 
            </div>

            <div class="gps">
                
                <p>Store Location</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.919162314675!2d120.98553901537353!3d14.603680680915103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9f8a70ce0f5%3A0x769dda82bd8b6eda!2s876%20Nicanor%20Reyes%20St%2C%20Sampaloc%2C%20Manila%2C%201008%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1654749319095!5m2!1sen!2sph" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        
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