<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact || ....</title>
    <link href="https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 450.391 450.391" style="" xml:space="preserve" class=""><g><path d="M143.673 350.322c-25.969 0-47.02 21.052-47.02 47.02 0 25.969 21.052 47.02 47.02 47.02 25.969 0 47.02-21.052 47.02-47.02.001-25.968-21.051-47.02-47.02-47.02zm0 73.143c-14.427 0-26.122-11.695-26.122-26.122s11.695-26.122 26.122-26.122 26.122 11.695 26.122 26.122c.001 14.427-11.695 26.122-26.122 26.122zM342.204 350.322c-25.969 0-47.02 21.052-47.02 47.02 0 25.969 21.052 47.02 47.02 47.02s47.02-21.052 47.02-47.02c0-25.968-21.051-47.02-47.02-47.02zm0 73.143c-14.427 0-26.122-11.695-26.122-26.122s11.695-26.122 26.122-26.122 26.122 11.695 26.122 26.122c.001 14.427-11.695 26.122-26.122 26.122zM448.261 76.037a13.064 13.064 0 0 0-8.359-4.18L99.788 67.155 90.384 38.42C83.759 19.211 65.771 6.243 45.453 6.028H10.449C4.678 6.028 0 10.706 0 16.477s4.678 10.449 10.449 10.449h35.004a27.17 27.17 0 0 1 25.078 18.286l66.351 200.098-5.224 12.016a50.154 50.154 0 0 0 4.702 45.453 48.588 48.588 0 0 0 39.184 21.943h203.233c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449H175.543a26.646 26.646 0 0 1-21.943-12.539 28.733 28.733 0 0 1-2.612-25.078l4.18-9.404 219.951-22.988c24.16-2.661 44.034-20.233 49.633-43.886L449.83 84.917a8.882 8.882 0 0 0-1.569-8.88zm-43.885 109.191c-3.392 15.226-16.319 26.457-31.869 27.69l-217.339 22.465-48.588-147.33 320.261 4.702-22.465 92.473z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                        </span>
                        <span onclick="openRegister()">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M437.02 74.98C388.668 26.63 324.379 0 256 0S123.332 26.629 74.98 74.98C26.63 123.332 0 187.621 0 256s26.629 132.668 74.98 181.02C123.332 485.37 187.621 512 256 512s132.668-26.629 181.02-74.98C485.37 388.668 512 324.379 512 256s-26.629-132.668-74.98-181.02zM111.105 429.297c8.454-72.735 70.989-128.89 144.895-128.89 38.96 0 75.598 15.179 103.156 42.734 23.281 23.285 37.965 53.687 41.742 86.152C361.641 462.172 311.094 482 256 482s-105.637-19.824-144.895-52.703zM256 269.507c-42.871 0-77.754-34.882-77.754-77.753C178.246 148.879 213.13 114 256 114s77.754 34.879 77.754 77.754c0 42.871-34.883 77.754-77.754 77.754zm170.719 134.427a175.9 175.9 0 0 0-46.352-82.004c-18.437-18.438-40.25-32.27-64.039-40.938 28.598-19.394 47.426-52.16 47.426-89.238C363.754 132.34 315.414 84 256 84s-107.754 48.34-107.754 107.754c0 37.098 18.844 69.875 47.465 89.266-21.887 7.976-42.14 20.308-59.566 36.542-25.235 23.5-42.758 53.465-50.883 86.348C50.852 364.242 30 312.512 30 256 30 131.383 131.383 30 256 30s226 101.383 226 226c0 56.523-20.86 108.266-55.281 147.934zm0 0" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                        </span>
                    </div>
                </div>
                <div class="overlay_reg">
                    <form class="overlay" id="registerPopup">
                        <div class="card">
                            <div class="reg_close">
                                <h3>Register</h3>
                                <a href="{{route('contact')}}"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M21 12.46 17.41 16 21 19.54A1 1 0 0 1 21 21a1 1 0 0 1-.71.29 1 1 0 0 1-.7-.29L16 17.41 12.46 21a1 1 0 0 1-.7.29 1 1 0 0 1-.71-.29 1 1 0 0 1 0-1.41L14.59 16l-3.54-3.54a1 1 0 0 1 1.41-1.41L16 14.59l3.54-3.54A1 1 0 0 1 21 12.46zm4.9 13.44a14 14 0 1 1 0-19.8 14 14 0 0 1 0 19.8zM24.49 7.51a12 12 0 1 0 0 17 12 12 0 0 0 0-17z" data-name="Layer 22" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg></a>
                            </div>
                            <input type="text" placeholder="Name" />
                            <input type="email" placeholder="Email" />
                            <input type="password" placeholder="Password" />
                            <button class="btn_card" onclick="switchToLogin()">Register</button>
                            <p>Already have an account? <s onclick="switchToLogin()">Login</s pan></p>
                        </div>
                    </form>
                    <form class="overlay" id="loginPopup">
                        @csrf
                        <div class="card">
                            <div class="reg_close">
                                <h3>Login</h3>
                                <a href="{{route('contact')}}"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M21 12.46 17.41 16 21 19.54A1 1 0 0 1 21 21a1 1 0 0 1-.71.29 1 1 0 0 1-.7-.29L16 17.41 12.46 21a1 1 0 0 1-.7.29 1 1 0 0 1-.71-.29 1 1 0 0 1 0-1.41L14.59 16l-3.54-3.54a1 1 0 0 1 1.41-1.41L16 14.59l3.54-3.54A1 1 0 0 1 21 12.46zm4.9 13.44a14 14 0 1 1 0-19.8 14 14 0 0 1 0 19.8zM24.49 7.51a12 12 0 1 0 0 17 12 12 0 0 0 0-17z" data-name="Layer 22" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg></a>
                            </div>
                            <input type="email" placeholder="Email" />
                            <input type="password" placeholder="Password" />
                            <a href="{{route('home')}}"><button class="btn_card">Login</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <!--  -->
        <section class="contact-section">
            <div class="container1">
                <div class="row">                
                    <div class="col-form">
                        <div class="contact-form-area">
                            <div class="heading-area">
                                <h5>OUR contact Us</h5>
                                <h2>Get Our Contact Now.</h2>
                            </div>
                            <p>Promote your blog posts, case udie, and product ouncems with the the branded videoscustomers coming back for services Makes best effort.</p>
                            <form method="POST" action="{{ route('contact.data') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-half"><input placeholder="Name" name="Name" type="text" value=""></div>
                                    <div class="col-half"><input placeholder="Email" name="Email" type="email" value=""></div>
                                    <div class="col-full">
                                        <div class=""><input placeholder="Enter your number" name="Number" type="tel" value=""></div>
                                        <select name="Services" id="" class="select_contact">
                                            <option class="option" value="" disabled selected>Choose a Services</option>
                                            <option class="option" value="Custom_fashion_cloth">Custom fashion cloth</option>
                                            <option class="option" value="hand_work_fashion_cloth">hand work fashion cloth </option>
                                            <option class="option" value="Ambrodary_fashion_cloth">Ambrodary fashion cloth</option>
                                            <option class="option" value="Jcard_fashion_cloth">Jcard fashion cloth</option>
                                            <option class="option" value="Hotfix_fashion_cloth">Hotfix fashion cloth</option>
                                        </select>
                                        
                                        <textarea rows="8" placeholder="Message" name="Message"></textarea>
                                        <button type="submit" class="submit-button">SEND REQUEST</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-info">
                        <div class="contact-info-panel">
                            <div class="contact-card">
                                <div class="icon blue"><i class="fa-solid fa-phone"></i></div>
                                <div class="text">
                                    <h3>Call</h3>
                                    <a href="callto:+880254615566">+880254615566</a>
                                    <a href="callto:+826542556455">+826542556455</a>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="icon orange"><i class="fa-solid fa-envelope"></i></div>
                                <div class="text">
                                    <h3>mail</h3>
                                    <a href="mailto:neta@eobi.com">neta@eobi.com</a>
                                    <a href="mailto:coraty@bara.com">coraty@bara.com</a>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="icon green"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="text">
                                    <h3>address</h3>
                                    <p>217, Silver_bussiness_point, VIP_curcle, Mota_varachha, Surat</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-full">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15309.845423871927!2d72.8368!3d21.2001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f5e08b1a37b%3A0xc023c9d7d4c88514!2sSurat%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sus!4v1701720000000"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
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
                       <img src="./assets/imgs/visa.jpg" alt="Visa Icon">
                       <img src="./assets/imgs/round.jpg" alt="Mastercard Icon">
                       <img src="./assets/imgs/paypal.jpg" alt="Apple Pay Icon">
                       <img src="./assets/imgs/pay.jpg" alt="PayPal Icon">
                       <img src="./assets/imgs/gpay.jpg" alt="Google Pay Icon">
                   </div>
               </div>
           </div>
       </footer>
       <!--  -->
    </main>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>