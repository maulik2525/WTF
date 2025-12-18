<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Home || .... </title>
</head>
<body>
    <main>
        <!--  -->  
        <header>
            <div class="wrapper">
                <div class="flex">
                    <a href="index.html">
                        <h1 class="nav_logo">SHOP.CO</h1>
                    </a>
                    <ul class="menu_list">
                        <li class="menu_itms"><a href="{{route('home')}}">Home</a></li>
                        <li class="menu_itms"><a href="{{route('blog')}}">Product</a></li>
                        <li class="menu_itms"><a href="{{route('about')}}">About</a></li>
                        <li class="menu_itms"><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <form class="form-container">
                        <label for="search" class="search-label">Search</label>
                        <div class="relative">
                            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                            <input type="search" id="search" class="search-input" placeholder="Search" required />
                            <button type="button" class="search-button">Search</button>
                        </div>
                    </form>
                    <div class="icon">
                        <span>
                            <svg class="nav_icon" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 450.391 450.391" style="" xml:space="preserve" class=""><g><path d="M143.673 350.322c-25.969 0-47.02 21.052-47.02 47.02 0 25.969 21.052 47.02 47.02 47.02 25.969 0 47.02-21.052 47.02-47.02.001-25.968-21.051-47.02-47.02-47.02zm0 73.143c-14.427 0-26.122-11.695-26.122-26.122s11.695-26.122 26.122-26.122 26.122 11.695 26.122 26.122c.001 14.427-11.695 26.122-26.122 26.122zM342.204 350.322c-25.969 0-47.02 21.052-47.02 47.02 0 25.969 21.052 47.02 47.02 47.02s47.02-21.052 47.02-47.02c0-25.968-21.051-47.02-47.02-47.02zm0 73.143c-14.427 0-26.122-11.695-26.122-26.122s11.695-26.122 26.122-26.122 26.122 11.695 26.122 26.122c.001 14.427-11.695 26.122-26.122 26.122zM448.261 76.037a13.064 13.064 0 0 0-8.359-4.18L99.788 67.155 90.384 38.42C83.759 19.211 65.771 6.243 45.453 6.028H10.449C4.678 6.028 0 10.706 0 16.477s4.678 10.449 10.449 10.449h35.004a27.17 27.17 0 0 1 25.078 18.286l66.351 200.098-5.224 12.016a50.154 50.154 0 0 0 4.702 45.453 48.588 48.588 0 0 0 39.184 21.943h203.233c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449H175.543a26.646 26.646 0 0 1-21.943-12.539 28.733 28.733 0 0 1-2.612-25.078l4.18-9.404 219.951-22.988c24.16-2.661 44.034-20.233 49.633-43.886L449.83 84.917a8.882 8.882 0 0 0-1.569-8.88zm-43.885 109.191c-3.392 15.226-16.319 26.457-31.869 27.69l-217.339 22.465-48.588-147.33 320.261 4.702-22.465 92.473z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                        </span>
                        <span onclick="openRegister()">
                            <svg class="nav_icon" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M437.02 74.98C388.668 26.63 324.379 0 256 0S123.332 26.629 74.98 74.98C26.63 123.332 0 187.621 0 256s26.629 132.668 74.98 181.02C123.332 485.37 187.621 512 256 512s132.668-26.629 181.02-74.98C485.37 388.668 512 324.379 512 256s-26.629-132.668-74.98-181.02zM111.105 429.297c8.454-72.735 70.989-128.89 144.895-128.89 38.96 0 75.598 15.179 103.156 42.734 23.281 23.285 37.965 53.687 41.742 86.152C361.641 462.172 311.094 482 256 482s-105.637-19.824-144.895-52.703zM256 269.507c-42.871 0-77.754-34.882-77.754-77.753C178.246 148.879 213.13 114 256 114s77.754 34.879 77.754 77.754c0 42.871-34.883 77.754-77.754 77.754zm170.719 134.427a175.9 175.9 0 0 0-46.352-82.004c-18.437-18.438-40.25-32.27-64.039-40.938 28.598-19.394 47.426-52.16 47.426-89.238C363.754 132.34 315.414 84 256 84s-107.754 48.34-107.754 107.754c0 37.098 18.844 69.875 47.465 89.266-21.887 7.976-42.14 20.308-59.566 36.542-25.235 23.5-42.758 53.465-50.883 86.348C50.852 364.242 30 312.512 30 256 30 131.383 131.383 30 256 30s226 101.383 226 226c0 56.523-20.86 108.266-55.281 147.934zm0 0" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                        </span>
                    </div>
                </div>
                <div class="overlay_reg">
                    <div class="overlay" id="registerPopup">
                        <div class="card">
                            <div class="reg_close">
                                <h3>Register</h3>
                                <a href="{{route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M21 12.46 17.41 16 21 19.54A1 1 0 0 1 21 21a1 1 0 0 1-.71.29 1 1 0 0 1-.7-.29L16 17.41 12.46 21a1 1 0 0 1-.7.29 1 1 0 0 1-.71-.29 1 1 0 0 1 0-1.41L14.59 16l-3.54-3.54a1 1 0 0 1 1.41-1.41L16 14.59l3.54-3.54A1 1 0 0 1 21 12.46zm4.9 13.44a14 14 0 1 1 0-19.8 14 14 0 0 1 0 19.8zM24.49 7.51a12 12 0 1 0 0 17 12 12 0 0 0 0-17z" data-name="Layer 22" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg></a>
                            </div>
                            <input type="text" placeholder="Name" />
                            <input type="email" placeholder="Email" />
                            <input type="password" placeholder="Password" />
                            <a href="#loginPopup"><button class="btn_card" onclick="switchToLogin()">Register</button></a>
                            <p>Already have an account? <span onclick="switchToLogin()">Login</span></p>
                        </div>
                    </div>
                    <div class="overlay" id="loginPopup">
                        <div class="card">
                        <div class="reg_close">
                                <h3>Login</h3>
                                <a href="{{route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M21 12.46 17.41 16 21 19.54A1 1 0 0 1 21 21a1 1 0 0 1-.71.29 1 1 0 0 1-.7-.29L16 17.41 12.46 21a1 1 0 0 1-.7.29 1 1 0 0 1-.71-.29 1 1 0 0 1 0-1.41L14.59 16l-3.54-3.54a1 1 0 0 1 1.41-1.41L16 14.59l3.54-3.54A1 1 0 0 1 21 12.46zm4.9 13.44a14 14 0 1 1 0-19.8 14 14 0 0 1 0 19.8zM24.49 7.51a12 12 0 1 0 0 17 12 12 0 0 0 0-17z" data-name="Layer 22" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg></a>
                            </div>
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <a href="{{route('home')}}"><button class="btn_card">Login</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--  -->
        <section>
            <div class="wrapper relative">
                <div class="hero">
                    <h1 class="hero_h1">FIND CLOTHES THAT MATCHES YOUR STYLE</h1>
                    <p class="hero_p">Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality and cater to your sense of style.</p>
                    <button type="button" class="hero_btn">Shop Now</button>
                    <div class="stats-container">
                        <div class="stat-item">
                            <div class="number">200 +</div>
                            <div class="label">International Brands</div>
                        </div>
                        <div class="stat-item1">
                            <div class="number">2,000 +</div>
                            <div class="label">High-Quality Products</div>
                        </div>
                        <div class="stat-item1">
                            <div class="number">30,000 +</div>
                            <div class="label">Happy Customers</div>
                        </div>
                    </div>
                </div>
                <img src="/imgs/hero.jpg" alt="" class="hero_img">
            </div>
        </section>
        <!--  -->
        <section class="sec_brand">
            <div class="wrapper">
                <div class="swiper brand">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/imgs/versace.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/imgs/ZARA.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/imgs/GUCCI.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/imgs/PRADA.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/imgs/Calvin.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/imgs/versace.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="arrvals_sec">
            <div class="wrapper">
                <h2>NEW ARRIVALS</h2>
                <div class="product-grid">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="/imgs/ARRIVALS1.jpg" alt="Black T-shirt with Tape Details"> 
                        </div>
                        <div class="product-name">T-shirt with Tape Details</div>
                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="rating-value">4.5/5</span>
                        </div>
                        <div class="price-info">
                            <span class="current-price">$120</span>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="/imgs/ARRIVALS2.jpg" alt="Skinny Fit Jeans">
                        </div>
                        <div class="product-name">Skinny Fit Jeans</div>
                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9734;&#9734;</span><span class="rating-value">3.5/5</span>
                        </div>
                        <div class="price-info">
                            <span class="current-price">$240</span>
                            <span class="original-price">$260</span>
                            <span class="discount-tag">-20%</span>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="/imgs/ARRIVALS3.jpg" alt="Checkered Shirt">
                        </div>
                        <div class="product-name">Checkered Shirt</div>
                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span><span class="rating-value">4.5/5</span>
                        </div>
                        <div class="price-info">
                            <span class="current-price">$180</span>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="/imgs/ARRIVALS4.jpg" alt="Sleeve Striped T-shirt">
                        </div>
                        <div class="product-name">Sleeve Striped T-shirt</div>
                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span><span class="rating-value">4.5/5</span>
                        </div>
                        <div class="price-info">
                            <span class="current-price">$130</span>
                            <span class="original-price">$160</span>
                            <span class="discount-tag">-30%</span>
                        </div>
                    </div>
                </div>
                <button type="button" class="product_btn">View All</button>
                <hr>
            </div>
        </section>
        <!--  -->
        <section class="arrvals_sec">
            <div class="wrapper">
                <h2>top selling</h2>
                <div class="product-grid">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="/imgs/topselling1.jpg" alt="Skinny Fit Jeans">
                        </div>
                        <div class="product-name">VERTICAL STRIPED SHIRT</div>
                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9734;&#9734;</span><span class="rating-value">3.5/5</span>
                        </div>
                        <div class="price-info">
                            <span class="current-price">$212</span>
                            <span class="original-price">$232</span>
                            <span class="discount-tag">-20%</span>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="/imgs/topselling2.jpg" alt="Black T-shirt with Tape Details"> 
                        </div>
                        <div class="product-name">COURAGE GRAPHIC T-SHIRT</div>
                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="rating-value">4.5/5</span>
                        </div>
                        <div class="price-info">
                            <span class="current-price">$145</span>
                        </div>
                    </div>

                    

                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="/imgs/topselling3.jpg" alt="Checkered Shirt">
                        </div>
                        <div class="product-name">LOOSE FIT BERMUDA SHORTS</div>
                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span><span class="rating-value">4.5/5</span>
                        </div>
                        <div class="price-info">
                            <span class="current-price">$80</span>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="/imgs/topselling4.jpg" alt="Sleeve Striped T-shirt">
                        </div>
                        <div class="product-name">FADED SKINNY JEANS</div>
                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span><span class="rating-value">4.5/5</span>
                        </div>
                        <div class="price-info">
                            <span class="current-price">$220</span>
                        </div>
                    </div>
                </div>
                <button type="button" class="product_btn">View All</button>
            </div>
        </section>
        <!--  -->
        <section class="dress_style">     
            <div class="container">
                <h1 class="dress_style_h1">BROWSE BY DRESS STYLE</h1>
                <div class="style-grid">
                    <div class="style-box casual">
                        <img src="/imgs/casual.jpg" alt="Casual Style Image"> 
                    </div>
                    <div class="style-box formal">
                        <img src="/imgs/formal.jpg" alt="Formal Style Image">
                    </div>
                    <div class="style-box party">
                        <img src="/imgs/party.jpg" alt="Party Style Image">
                    </div>
                    <div class="style-box gym">
                        <img src="/imgs/gym.jpg" alt="Gym Style Image">
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="review">
            <h1 class ="review_h1">OUR HAPPY CUSTOMERS</h1>
            <div class="reviews-container">
                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="stars">★★★★★</div>
                            <div class="reviewer-name">Samantha D. <span class="verified-icon">✔</span></div>
                        </div>
                        <div class="ellipsis">...</div>
                    </div>
                    <div class="review-body">
                        "I absolutely love this t-shirt! The design is unique and the fabric feels so comfortable. As a fellow designer, I appreciate the attention to detail. It's become my favorite go-to shirt."
                    </div>
                    <div class="review-footer">
                        Posted on August 14, 2023
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="stars">★★★★★</div>
                            <div class="reviewer-name">Alex M. <span class="verified-icon">✔</span></div>
                        </div>
                        <div class="ellipsis">...</div>
                    </div>
                    <div class="review-body">
                        "The t-shirt exceeded my expectations! The colors are vibrant and the print quality is top-notch. Being a UI/UX designer myself, I'm quite picky about aesthetics, and this t-shirt definitely gets a thumbs up from me."
                    </div>
                    <div class="review-footer">
                        Posted on August 15, 2023
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="stars">★★★★★</div>
                            <div class="reviewer-name">Ethan R. <span class="verified-icon">✔</span></div>
                        </div>
                        <div class="ellipsis">...</div>
                    </div>
                    <div class="review-body">
                        "This t-shirt is a must-have for anyone who appreciates good design. The minimalistic yet stylish pattern caught my eye, and the fit is perfect. I can see the designer's touch in every aspect of this shirt."
                    </div>
                    <div class="review-footer">
                        Posted on August 16, 2023
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="stars">★★★★★</div>
                            <div class="reviewer-name">Olivia P. <span class="verified-icon">✔</span></div>
                        </div>
                        <div class="ellipsis">...</div>
                    </div>
                    <div class="review-body">
                        "As a UI/UX enthusiast, I value simplicity and functionality. This t-shirt not only represents those principles but also feels great to wear. It's evident that the designer poured their creativity into making this t-shirt stand out."
                    </div>
                    <div class="review-footer">
                        Posted on August 17, 2023
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="stars">★★★★☆</div>
                            <div class="reviewer-name">Liam K. <span class="verified-icon">✔</span></div>
                        </div>
                        <div class="ellipsis">...</div>
                    </div>
                    <div class="review-body">
                        "This t-shirt is a fusion of comfort and creativity. The fabric is soft, and the design speaks volumes about the designer's skill. It's like wearing a piece of art that reflects my passion for both design and fashion."
                    </div>
                    <div class="review-footer">
                        Posted on August 18, 2023
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="stars">★★★★☆</div>
                            <div class="reviewer-name">Ava H. <span class="verified-icon">✔</span></div>
                        </div>
                        <div class="ellipsis">...</div>
                    </div>
                    <div class="review-body">
                        "I'm not just wearing a t-shirt; I'm wearing a piece of design philosophy. The intricate details and thoughtful layout of the design make this shirt a conversation starter."
                    </div>
                    <div class="review-footer">
                        Posted on August 19, 2023
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <footer class="site-footer">
            <div class="newsletter-bar-container">
                <div class="newsletter-bar">
                    <div class="newsletter-text">
                        STAY UP TO DATE ABOUT<br>
                        OUR LATEST OFFERS
                    </div>
                    <div class="newsletter-form">
                        <div class="email-input-group">
                            <span class="email-icon"></span>
                            <input type="email" class="email-input" placeholder="Enter your email address" required>
                        </div>
                        <button class="subscribe-button">
                            Subscribe to Newsletter
                        </button>
                    </div>
                </div>
            </div>
            <div class="footer-content">

                <div class="footer-column logo-column">
                    <div class="logo-name">SHOP.CO</div>
                    <p>We have clothes that suits your style and which you’re proud to wear. From women to men.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon twitter"></a>
                        <a href="#" class="social-icon facebook"></a>
                        <a href="#" class="social-icon instagram"></a>
                        <a href="#" class="social-icon github"></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>COMPANY</h3>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Works</a></li>
                        <li><a href="#">Career</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>HELP</h3>
                    <ul>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">Delivery Details</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>FAQ</h3>
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Manage Deliveries</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Payments</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>RESOURCES</h3>
                    <ul>
                        <li><a href="#">Free Ebooks</a></li>
                        <li><a href="#">Development Tutorial</a></li>
                        <li><a href="#">How To - Blog</a></li>
                        <li><a href="#">Youtube Playlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright-bar">
                <div class="copyright-content">
                    <div>Shop.co © 2000-2023, All Rights Reserved</div>
                    <div class="payment-icons">
                        <img src="/imgs/visa.jpg" alt="Visa Icon">
                        <img src="/imgs/round.jpg" alt="Mastercard Icon">
                        <img src="/imgs/paypal.jpg" alt="Apple Pay Icon">
                        <img src="/imgs/pay.jpg" alt="PayPal Icon">
                        <img src="/imgs/gpay.jpg" alt="Google Pay Icon">
                    </div>
                </div>
            </div>
        </footer>
        <!--  -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>