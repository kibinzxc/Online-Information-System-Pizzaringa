<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/order.css">
    <title>Order | Pizzaringa</title>
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
        <br><br><br><br>
        <div class="wrapper2">
            <form action="../../back-end/connect-orders.php" class="form" method="post">
                <label for="pizza" class="pizza">Flavor of Pizza</label>
                <label for="quantity" class="qty">Quantity</label>
                <br>
                <select id="pizza" name="pizza" class="input-pizza">
                    <option value="hawaiian">Hawaiian MB Pizza</option>
                </select>
                <select id="quantity" name="quantity" class="input-qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <br><br>
                <label for ="address" class="address">Address</label>
                <br>
                <input type="text" id="address" id="address" name="address" placeholder="House No., Street, Village / Building, City, Town" class="input-address"><br><br>
                <label for="contact" class="contact">Contact Number</label>
                <br>
                <input type="number" id="contact" name="contact" placeholder="Phone Number"  maxlength="11" class="input-many"/>
                <br><br>
                <label for="mop" class="contact">Mode of Payment</label><br>
                <input type="radio" id="mop" name="mop" value="cod" class="circle">
                <label for="mop" class="circle1">Cash on Delivery </label>
                <br><br><br>
                <label for = "remarks" class="remarks">Remarks</label><br>
                <textarea id="remarks" name="remarks" placeholder="Send a message..." class="textarea"></textarea><br>
                <input type="submit" class="btn1" value="Submit Order" onclick="myFunction1()">
                <input type ="reset" class="btn2" value="Cancel">
            </form> 
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
        function myFunction1() {
        alert("Your order has been submitted.\nKindly wait for our text message for confirmation");
        }
    </script>
</html>