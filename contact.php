<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Microsoft</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <section id="header">
        <a href="index.php" class="company-name">Microsoft</a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>

                <?php

                if ($_SESSION['aid'] < 0) {
                    echo "   <li><a href='login.php'>login</a></li>
            <li><a href='signup.php'>SignUp</a></li>
            ";
                } else {
                    echo "   <li><a href='profile.php'>profile</a></li>
          ";
                }
                ?>
                <li><a href="admin.php">Admin</a></li>
                <li id="lg-bag">
                    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                </li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#GameTillTheEnd</h2>

        <p>Providing Premium Gaming Experience</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>221B Baker Street, Marylebone, London, NW1 6XE, United Kingdom</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>microsoft.co@gmail.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>+44 2395 3752</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9am to 5pm</p>

                </li>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.424670924679!2d-0.16113062434157616!3d51.523770309508606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761acf33628211%3A0x445d7677a88322e1!2s221B%20Baker%20St%2C%20London%20NW1%206XE%2C%20UK!5e0!3m2!1sen!2sin!4v1748071755817!5m2!1sen!2sin"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <div class="people">
          <div>
            <img src="img/people/a.jpeg" alt="" />
            <p>
              <span>Sarah</span> Founder and CEO <br />
              Phone: +44 7911 123456 <br />
              Email: sarah@microsoft.com
            </p>
          </div>
          <div>
            <img src="img/people/b.jpeg" alt="" />
            <p>
              <span>James</span> Executive Marketing Manager <br />
              Phone: +44 7700 654321 <br />
              Email: james@microsoft.com
            </p>
          </div>
          <div>
            <img src="img/people/c.jpeg" alt="" />
            <p>
              <span>Emma</span> Customer Service Officer <br />
              Phone: +44 7800 987654 <br />
              Email: emma@microsoft.com
            </p>
          </div>
        </div>
    </section>


    <footer class="section-p1">
        <div class="col">
            <h2 class="footer-company-name">Microsoft</h2>
            <h4>Contact</h4>
            <p>
                <strong>Address: </strong> 221B Baker Street, Marylebone, London, NW1 6XE, United Kingdom

            </p>
            <p>
                <strong>Phone: </strong> +44 2395 3752
            </p>
            <p>
                <strong>Hours: </strong> 9am-5pm
            </p>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="cart.php">View Cart</a>
            <a href="wishlist.php">My Wishlist</a>
        </div>
        <div class="col install">
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" />
        </div>
        <div class="copyright">
            <p>&copy; 2025 Microsoft. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>

<script>
window.addEventListener("unload", function() {
  // Call a PHP script to log out the user
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "logout.php", false);
  xhr.send();
});
</script>