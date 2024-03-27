<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>




<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'style.css'; ?></style> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>MkM</title>
</head>
<body>


  <!----navbar--->
  <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Offering
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#services">Services</a></li>
            <li><a class="dropdown-item" href="#bundles">Bundles</a></li>
            <li><a class="dropdown-item" href="#products">Products</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        
            <?php   
            if(isset($_SESSION['username'])) {
                echo '</ul>';
                echo'<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
                echo'<li class="nav-item dropdown">';
                echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"> '. $username.'</i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">View Cart</a></li>
                  <li><a class="dropdown-item" href="logOut.php">Log Out</a></li>
                </ul>
              </li>';
            } else {
                echo '<li class="nav-item"><a class="nav-link" href="signup.php">SignUp/Login</a></li>';
            } 
?>  
      </ul>
    </div>
  </div>
</nav>

      <!-- background -->

    <section class="backg" id="backg">
   

        <div class="background">
            <div class="background__center container">
                <div class="background__left">
                    <h1 style="color:#708cfa">MK Digital Marketing</h1>
                    <p>
                        Our mission is to craft strategic and innovative digital marketing solutions that elevate brand presence, drive measurable growth, and foster meaningful connections with target audiences.
                    </p>
                    <a href="#products" class="button background__btn" style="background-color:darkblue">Shop Now</a>
                </div>

                <div class="background__right">

                </div>
            </div>

            <a href="#services" class="go-down flex__center">
                <svg>
                    <use xlink:href="./images/it.jpeg"></use>
                </svg>
            </a>
        </div>
    </section>
<br>
<br>
    
 

     <!-- Category service -->
    


   
    
        <div class="service-section">
            <h1>Our Services</h1>
            <p>‎ </p>
            <p>Transform your online presence with our expert digital marketing services.</p>
            <p>Let us amplify your brand's online reach and deliver measurable results for your business.</p>
          </div>
          <br><br>
          <section id="services">

        <div class="category__center container">
        
            <div class="category__left">
             
                <div class="content">
                    <h1>Graphic Designer</h1>
                    <h3>Creative and Pro UX &amp; UI </h3>
                 
                </div>
                <img src="./images/graphic des.jpg">
            </div>

            <div class="category__left">
                <div class="content">
                    <h1>Web Developer</h1>
                    <h3>Customize your website</h3>
                 
                </div>
                <img src="./images/webdeveloper.jpeg" alt="">
            </div>
            <div class="category__left">
                <div class="content">
                    <h1>Social Media Expert</h1>
                    <h3>Search engine experts</h3>
                    <h3> &amp; managers</h3>
                  
                </div>
                
                <img src="./images/marketing.jpg" alt="">
            </div>
            <div class="category__right">
                <div class="content">
                    <h1>Technical Issues</h1>
                    <h3> 24/7 Ready To Support</h3>
                 
                </div>
                <img src="./images/issues.png" alt="">
            </div>
        </div>
       <br>   
      
    </section>

    <!----bundles-->
<br>


<div class="bundle">
    <h1>Bundles  Offered</h1>
    <p>Take your business to a new level and add our features to your marketing plan.</p>
    
  </div>
   
<section id="bundles">

<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">$ 299.9 / month</li>
    <li>8 Posts</li>
    <li>10 Emails</li>
    <li>1 Ad Promotion</li>
    <li>1 Video</li>
    <li class="grey"><a class="button" href="/signup">Buy Now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#708cfa">Pro</li>
    <li class="grey">$ 599.9 / month</li>
    <li>12 Posts</li>
    <li>25 Emails</li>
    <li>3 Ads Promotion</li>
    <li>2 Videos</li>
    <li class="grey"><a class="button" href="/signup">Buy Now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:darkblue">Premium</li>
    <li class="grey">$ 799.9 / month</li>
    <li>25 Posts</li>
    <li> 35 Emails /Create Logo </li>
    <li>5 ads Promotion</li>
    <li>3 Videos</li>
    
    <li class="grey"><a class="button" href="/signup">Buy Now</a></li>
  </ul>
</div>
</section>

    <!-- New Products -->


    <div class="section new" id="new">
        <div class="new__center container">
            <div class="title">
                <h1>New Products</h1>
            </div>

            <section id="products"></section>
            <div class="product__center">
                <div class="product">
                    <div class="product__header">
                        <img src="/images/product1.webp" alt="">
                      
                    </div>
                    <div class="product__footer">
                        <h2> Customize  Creative Logo</h2>
                        <p>Professional &amp; Creative team.</p>
                        <h4 class="price"> Starting $100</h4>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="./images/product4.webp" alt="">
                    
                    </div>
                    <div class="product__footer">
                        <h2>Media influences Promo</h2>
                        <p>Boost your product with media presence.</p>
                        <h4 class="price">$200</h4>
                    </div>
                </div>
                
                
                <div class="product">
                    <div class="product__header">
                        <img src="./images/product3.webp" alt="">
                    
                    </div>
                    <div class="product__footer">
                        <h2>Search Engine Master</h2>
                     <p>Learn how to navigate algorithm.</p>
                        <h4 class="price">$500</h4>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="images/product5.webp" alt="">
                    
                    </div>
                    <div class="product__footer">
                        <h2>Creative Post</h2>
                     <p>Learn how to navigate algorithm.</p>
                        <h4 class="price">$30</h4>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="images/product6.webp" alt="">
                    
                    </div>
                    <div class="product__footer">
                        <h2>Increase Followers</h2>
                     <p>More views on social media apps.</p>
                        <h4 class="price"> Starting $25</h4>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="./images/product2.webp" alt="">
                        
                    </div>
                    <div class="product__footer">
                        <h2>Social Media Management</h2>
                        <p>Manage your Profits and account.</p>                        
                        <h4 class="price">$700</h4>
                    </div>

                    
                    
                </div>
            </div>
        </div>
    </div>
   


<!---team-->

<section id="team">
<div class="new__center container">
    <div class="title">
        <h2>Our Team Members</h2>
        <span>Expert Members with High Experience !!</span>
      </div>


    <div class="slider-container">
        <div class="slide">
            <img src="images/member1.avif" alt="Customer " class="customer-image">
            <h2>Karim harzallah</h2>
            <h3>IT Support</h3>
           
        </div>
        <div class="slide">
            <img src="images/member2.webp" alt="Customer " class="customer-image">
            <h2>Mostafa Jomaa</h2>
            <h3>UX/UI Designer</h3>
           
        </div>
        <div class="slide">
            <img src="images/member3.jpg" alt="Customer " class="customer-image">
            <h2>Majdi Al Ali</h2>
            <h3>Web Developer</h3>
          
        </div>
        <div class="slide">
            <img src="images/member4.jpg" alt="Customer " class="customer-image">
            <h2>Reem L</h2>
            <h3>Social Media Management</h3>
          
        </div>
        <div class="slide">
            <img src="images/member5.avif" alt="Customer " class="customer-image">
            <h2>Lynn S</h2>
            <h3>Customer Service &amp; Support</h3>
        </div>
        <div class="slide">
            <img src="images/member6.webp" alt="Customer " class="customer-image">
            <h2>Support Team</h2>
            <h3>Customer Service &amp; Support</h3>
          
        </div>
    </div>
    
    <div class="customernumber">Team Members: <span id="customerIndex">1</span></div>
   
</div></section>

<br>
<br>

<!---feedbacks-->

<br>
<br>

<!---footer-->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="aboutus">about us</a></li>
                    <li><a href="#Services">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
               
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Digital marektig</h4>
                <ul>
                    <li><a href="#">ADS</a></li>
                    <li><a href="#">Boost</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Logos</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  
                </div>
            
            </div>
        </div>
    </div>
</footer>
    



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="main.js"></script>
<script><?php include 'main.js'; ?></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> 
</body>
</html>