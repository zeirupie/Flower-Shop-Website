<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeiru Flower Shop</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    
    <header>
        <i class="fa fa-bars" id="menuBtn"></i>

        <img src="images/logoPngFlowerShop.png" alt="">

        <div class="navigations-cont">
            <nav class="dsktop-nav">
                <ul class="navigations">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about_us">About</a></li>
                    <li><a href="#bouquet_section">Bouquets</a></li>
                    <li><a href="#flower_section">Flowers</a></li>
                    <li><a href="#contact_us">Contact</a></li>
                </ul>
            </nav>

            <i class="fa fa-shopping-cart"></i>

            <div class="loginRegister-cont">
                <button><a href="auth/login_form.php" style="color: black;text-decoration: none;">Login</a></button>
                <button id="signUpBtn"><a href="auth/register_form.php" style="color:white;text-decoration: none;">Sign-Up</a></button>
            </div>
        </div>
    </header>

    <div class="go-to-top clickable" id="goToTopBtn">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <div class="hero-section">
        <div class="hero-text-cont" data-aos="fade-right">
            <h1>Crafting Fresh Starts with Every Flower</h1>
            <p>Our skilled florists carefully craft every arrangement with passion and precision, ensuring that each bloom symbolizes a new chapter and a touch of elegance.</p>
            <button >Shop Now <i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>

    <div class="aboutUs-section" id="about_us" data-aos="fade-up">
        <div class="aboutUs-cont">
            <div class="aboutUs-img">
                <img src="images/florist-2.jpg" alt="">
            </div>

            <div class="aboutUs-text-cont">
                <h2>About</h2>
                <h1>Experience Elegance and Charm at Zeiru Flower Shop</h1>
                <p>Welcome to Zeiru Flower Shop, where elegance meets charm in every bouquet. Our curated selection of fresh, vibrant blooms is designed to elevate any occasion, whether it's a heartfelt celebration or a simple moment of beauty. With a passion for floral artistry, our skilled team crafts unique arrangements that reflect the beauty of nature and the individuality of our customers.</p>
                <button>Read More</button>
            </div>
        </div>
    </div>

    <div class="bouquet-section" id="bouquet_section"  data-aos="fade-up">
        <h2>Bouquets</h2>
        <h1>Perfect Bouquet for Every Special Moment</h1>
        <hr>
        
        <div class="bouquet-category-cont">
            <div class="category-card clickable" data-aos="fade-up" data-aos-delay="0">
                <img src="images/birthday.jpg" alt="">
                <h3>Birthday</h3>
            </div>

            <div class="category-card clickable" data-aos="fade-up" data-aos-delay="100">
                <img src="images/weddingBouquet.jpeg" alt="">
                <h3>Wedding</h3>
            </div>

            <div class="category-card clickable" data-aos="fade-up" data-aos-delay="200">
                <img src="images/aniverssary.jpg" alt="">
                <h3>Anniversary</h3>
            </div>

            <div class="category-card clickable" data-aos="fade-up" data-aos-delay="300">
                <img src="images/sympathy.jpg" alt="">
                <h3>Sympathy</h3>
            </div>
        </div>
    </div>


    <div class="section3"  data-aos="fade-up">
        <h2>Best Seller</h2>
        <h1>Discover Our Best Sellers</h1>
        <hr>
        <div class="section3-cont">

            <div class="product-card clickable" data-aos="fade-up" data-aos-delay="0">
                <img src="images/birthday.jpg" alt="">
                <h4 class="bstSeller-indecator">Best Seller</h4>
                <div class="section3-text-cont">
                    <h3>HDB Cutie</h3>

                    <p class="star-review-cont">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <span>(5.5)</span>
                    </p>

                    <h3>₱<span>999</span></h3>
                </div>
            </div>

            <div class="product-card clickable" data-aos="fade-up" data-aos-delay="200">
                <img src="images/birthday.jpg" alt="">
                <h4 class="bstSeller-indecator">Best Seller</h4>
                <div class="section3-text-cont">
                    <h3>HDB Cutie</h3>

                    <p class="star-review-cont">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <span>(5.5)</span>
                    </p>

                    <h3>₱<span>999</span></h3>
                </div>
            </div>


            <div class="product-card clickable"  data-aos="fade-up" data-aos-delay="300" >
                <img src="images/birthday.jpg" alt="">
                <h4 class="bstSeller-indecator">Best Seller</h4>
                <div class="section3-text-cont">
                    <h3>HDB Cutie</h3>

                    <p class="star-review-cont">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <span>(5.5)</span>
                    </p>

                    <h3>₱<span>999</span></h3>
                </div>
            </div>

            <div class="product-card clickable"  data-aos="fade-up" data-aos-delay="400">
                <img src="images/birthday.jpg" alt="">
                <h4 class="bstSeller-indecator">Best Seller</h4>
                <div class="section3-text-cont">
                    <h3>HDB Cutie</h3>

                    <p class="star-review-cont">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <span>(5.5)</span>
                    </p>

                    <h3>₱<span>999</span></h3>
                </div>
            </div>
        </div>
    </div>



    <!--Flower Section-->

    <div class="section3" id="flower_section"  data-aos="fade-up">
        <div class="title-a">
            <div class="title-cont">
                <h2>Flowers</h2>
                <h1>Flower per Dozen</h1>
            </div>

            <a href="#">See More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <hr>
        <div class="section3-cont">

            <div class="product-card clickable"  data-aos="fade-up" data-aos-delay="0">
                <img src="images/birthday.jpg" alt="">
                <div class="section3-text-cont">
                    <h3>HDB Cutie</h3>

                    <p class="star-review-cont">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <span>(5.5)</span>
                    </p>

                    <h3>₱<span>999</span></h3>
                </div>
            </div>

            <div class="product-card clickable"  data-aos="fade-up" data-aos-delay="100">
                <img src="images/birthday.jpg" alt="">
                <div class="section3-text-cont">
                    <h3>HDB Cutie</h3>

                    <p class="star-review-cont">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <span>(5.5)</span>
                    </p>

                    <h3>₱<span>999</span></h3>
                </div>
            </div>


            <div class="product-card clickable"  data-aos="fade-up" data-aos-delay="200">
                <img src="images/birthday.jpg" alt="">
                <div class="section3-text-cont">
                    <h3>HDB Cutie</h3>

                    <p class="star-review-cont">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <span>(5.5)</span>
                    </p>

                    <h3>₱<span>999</span></h3>
                </div>
            </div>

            <div class="product-card clickable"  data-aos="fade-up" data-aos-delay="300">
                <img src="images/birthday.jpg" alt="">
                <div class="section3-text-cont">
                    <h3>HDB Cutie</h3>

                    <p class="star-review-cont">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <span>(5.5)</span>
                    </p>

                    <h3>₱<span>999</span></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section" id="contact_us"  data-aos="fade-up" >

        <div class="contact-cont">
            <div class="contact-binary contact-info">
                <h2>Contact Us</h2>
                <h1>Our Contact Informations</h1>
                <p><i class="fa-solid fa-phone"></i> Tell:  09xxxxxxxxx</p>
                <p><i class="fa fa-envelope"></i> Email: zeirufs@gmail.com</p>
                <p><i class="fa-solid fa-location-crosshairs"></i> Location: Dumaguite City</p>
            </div>
    
            <div class="contact-binary contact-form">
                <form action="">

                    <p>
                        Full name
                        <div><i class="fa-solid fa-user"></i><input type="text" placeholder="Juan Dela Cruz"></div>
                    </p>

                    <p>
                        Email
                        <div><i class="fa fa-envelope"></i><input type="email" placeholder="juandelacruz@gmail.com"></div>
                    </p>

                    <p>
                        Message or request
                    </p>
                    <textarea name="" id=""></textarea>

                    <div  class="Contact-submit-btn"><button type="submit">Submit</button></div>

                </form>
            </div>
        </div>
    </div>
    

    <div class="footer">

        <div class="footer-cont">
            <div class="footer-binary">
                <img src="images/logoPngFlowerShop.png" alt="">
                <p>Follow us on our social media for the latest floral trends, exclusive offers, and more!</p>
                <p>
                    <a href="#" class="ftr-socials"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="ftr-socials"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="ftr-socials"><i class="fab fa-pinterest"></i></a>
                </p>
            </div>
    
            <div class="footer-binary">
                <h2>Navigation</h2>

                <p class="footer-nav">
                    <a href="#"><i class="fa-solid fa-chevron-right"></i>Home</a>
                    <a href="#about_us"><i class="fa-solid fa-chevron-right"></i>About</a>
                    <a href="#bouquet_section"><i class="fa-solid fa-chevron-right"></i>Bouquets</a>
                    <a href="#flower_section"><i class="fa-solid fa-chevron-right"></i>Flowers</a>
                    <a href="#contact_us"><i class="fa-solid fa-chevron-right"></i>Contact</a>
                </p>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2024 Zeiru Flower Shop. All rights reserved.</p>
            <p>This website is intended for educational purposes. Some resources are credited to their respective owners.</p>
        </div>
    </div>

    <script>
        AOS.init(
            {
                once:true
            }
        );
      </script>
      <script src="script.js" defer></script>

</body>
</html>