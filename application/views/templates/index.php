<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/styles.css" />
    <title>Web Design Mastery | NovusHaus</title>
    
</head>

<body>
    <header class="header">

        <nav>
            <div class="nav__logo"><a href="#">Tutu Art.</a></div>
            <ul class="nav__links" id="nav-links">
                <li class="link"><a href="#home">Beranda</a></li>
                <li class="link"><a href="#choose">Tentang</a></li>
                <li class="link"><a href="#craft">Produk</a></li>
                <li class="link"><a href="#testimonial">Testimoni</a></li>
                <li class="link"><a href="#blog">Blog</a></li>
            </ul>
            <div class="nav__menu__btn" id="menu-btn">
                <span><i class="ri-menu-line"></i></span>
            </div>
            <div class="nav__actions">
                <!-- <span><i class="ri-search-fill"></i></span>
                <span><i class="ri-user-fill"></i></span> -->
            </div>
        </nav>
        <div class="section__container header__container" id="home">
            <h1>Make Your Interior More Minimalistic & Modern</h1>
            <p>
                Turn your room with panto into a lot more minimalistic and modern with
                ease and speed
            </p>
            <!-- <form action="/">
                <input type="text" placeholder="Search furniture" />
                <button><i class="ri-search-line"></i></button>
            </form>
            <a href="#choose"><i class="ri-arrow-down-double-line"></i></a> -->
        </div>
    </header>
    <!----------------------------------About----------------------------------------------------------------------->
    <section class="section__container choose__container" id="choose">
        <img class="choose__bg" src="<?=base_url('assets/dot-bg.png')?>" alt="bg" />
        <div class="choose__content">
            <h2 class="section__header">Kenapa Pilih Kami</h2>
            <p class="section__subheader">
                Experience Unmatched Creativity and Expertise in Interior Design.
                Discover Why We're the Right Choice for Your Dream Space
            </p>
            <div class="choose__grid">
                <div class="choose__card">
                    <span><i class="ri-truck-line"></i></span>
                    <h4>Fast & Free Shipping</h4>
                    <p>
                        Elevate your interior design with our Fast & Free Shipping service
                        without delay
                    </p>
                </div>
                <div class="choose__card">
                    <span><i class="ri-shopping-bag-3-line"></i></span>
                    <h4>Easy to Shop</h4>
                    <p>
                        Discover Effortless Elegance: Explore Our Easy-to-Shop Interior
                        Design Solutions
                    </p>
                </div>
                <div class="choose__card">
                    <span><i class="ri-customer-service-2-line"></i></span>
                    <h4>24/7 Support</h4>
                    <p>
                        Experience peace of mind knowing that our dedicated team is
                        available round the clock
                    </p>
                </div>
                <div class="choose__card">
                    <span><i class="ri-loop-right-line"></i></span>
                    <h4>Hassle Free Returns</h4>
                    <p>
                        We believe in the perfect match, and if it doesn't quite fit, we
                        make returning items a breeze
                    </p>
                </div>
            </div>
        </div>
        <div class="choose__image">
            <img src="<?=base_url('assets/choose.jpg')?>" alt="choose" />
        </div>
    </section>
    <!--------------------------------- Product --------------------------------------------------------------------- -->
    <section class="offer__container" id="offer">
        <div class="offer__grid__top">
            <img src="<?=base_url('assets/offer-1.jpg')?>" alt="offer" />
            <img src="<?=base_url('assets/offer-2.jpg')?>" alt="offer" />
            <img src="<?=base_url('assets/offer-3.jpg')?>" alt="offer" />
            <div class="offer__content">
                <h2 class="section__header">Smart Offers</h2>
                <p class="section__subheader">
                    Explore exclusive deals to transform your interior with style
                </p>
                <button class="btn">Explore Now</button>
            </div>
        </div>
        <div class="offer__grid__bottom">
            <img src="<?=base_url('assets/offer-4.jpg')?>" alt="offer" />
            <img src="<?=base_url('assets/offer-5.jpg')?>" alt="offer" />
            <img src="<?=base_url('assets/offer-6.jpg')?>" alt="offer" />
            <img src="<?=base_url('assets/offer-7.jpg')?>" alt="offer" />
        </div>
    </section>

    <section class="section__container craft__container" id="craft">
        <div class="craft__content">
            <h2 class="section__header">Crafted with excellent material</h2>
            <p class="section__subheader">
                Elevate Your Space with Quality and Style
            </p>
            <button class="btn">Explore</button>
        </div>
        <div class="craft__image">
            <div class="craft__image__content">
                <img src="<?=base_url('assets/craft-1.png')?>" alt="craft" />
                <p>Nordic Chair</p>
                <h4>$65.00</h4>
            </div>
            <a href="#"><i class="ri-add-line"></i></a>
        </div>
        <div class="craft__image">
            <div class="craft__image__content">
                <img src="<?=base_url('assets/craft-2.png')?>" alt="craft" />
                <p>Wingback Chair</p>
                <h4>$50.00</h4>
            </div>
            <a href="#"><i class="ri-add-line"></i></a>
        </div>
        <div class="craft__image">
            <div class="craft__image__content">
                <img src="<?=base_url('assets/craft-3.png')?>" alt="craft" />
                <p>Accent Chair</p>
                <h4>$70.00</h4>
            </div>
            <a href="#"><i class="ri-add-line"></i></a>
        </div>
    </section>
    <!----------------------------------Testimonials--------------------------------------------------------------------- -->
    <section class="section__container modern__container" id="modern">
        <div class="modern__image">
            <img src="<?=base_url('assets/dot-bg.png')?>" alt="bg" class="modern__bg" />
            <img src="<?=base_url('assets/modern-1.jpg')?>" alt="modern" class="modern__img-1" />
            <img src="<?=base_url('assets/modern-2.jpg')?>" alt="modern" class="modern__img-2" />
            <img src="<?=base_url('assets/modern-3.jpg')?>" alt="modern" class="modern__img-3" />
        </div>
        <div class="modern__content">
            <h2 class="section__header">
                We help you design modern interior design
            </h2>
            <p class="section__subheader">
                Transform Your Space with Our Contemporary Interior Design Expertise:
                Let us guide you in crafting sleek and stylish interiors that reflect
                your unique taste and lifestyle
            </p>
            <div class="modern__grid">
                <div class="modern__card">
                    <span><i class="ri-checkbox-blank-circle-line"></i></span>
                    <p>
                        Our team specializes in creating customized interior designs that
                        embrace modern aesthetics.
                    </p>
                </div>
                <div class="modern__card">
                    <span><i class="ri-checkbox-blank-circle-line"></i></span>
                    <p>
                        We stay at the forefront of design trends, ensuring your space is
                        stylish and innovative.
                    </p>
                </div>
                <div class="modern__card">
                    <span><i class="ri-checkbox-blank-circle-line"></i></span>
                    <p>
                        Modern interior design isn't just about aesthetics; it's about
                        functionality and comfort too.
                    </p>
                </div>
                <div class="modern__card">
                    <span><i class="ri-checkbox-blank-circle-line"></i></span>
                    <p>
                        We take care of all aspects of the design process, from concept to
                        procurement and installation.
                    </p>
                </div>
            </div>
            <button class="btn">Explore</button>
        </div>
    </section>

    <section class="section__container testimonial__container" id="testimonial">
        <h2 class="section__header">Testimonials</h2>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <p>
                            Working with them was an absolute pleasure! Their modern design
                            expertise completely transformed my home into a contemporary
                            haven. I now have a space that not only looks stunning but also
                            feels incredibly comfortable. I couldn't be happier with the
                            results
                        </p>
                        <img src="<?=base_url('assets/profile-pic-1.jpg')?>" alt="testimonial" />
                        <h4>Sam William</h4>
                        <h5>CEO, Co-Founder</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <p>
                            I hired them to revamp our office space, and the results
                            exceeded my expectations. Their innovative design concepts
                            breathed new life into our workplace, making it both functional
                            and stylish. The team's attention to detail and commitment to
                            quality are truly commendable.
                        </p>
                        <img src="<?=base_url('assets/profile-pic-2.jpg')?>" alt="testimonial" />
                        <h4>Michelle Anna</h4>
                        <h5>Office Renovator</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <p>
                            I had a vision of a minimalist-inspired home, and they brought
                            it to life flawlessly. Their designers understood my aesthetic
                            and incorporated sleek, clean lines, and a neutral color palette
                            to create a serene oasis. I'm in love with my modern,
                            clutter-free space!
                        </p>
                        <img src="<?=base_url('assets/profile-pic-3.jpg')?>" alt="testimonial" />
                        <h4>John D'souza</h4>
                        <h5>Banker</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <p>
                            What sets them apart is their professionalism and efficiency.
                            They made the entire design process hassle-free, from the
                            initial consultation to the final installation. Their team
                            handled everything, leaving me with a beautifully designed
                            modern interior
                        </p>
                        <img src="<?=base_url('assets/profile-pic-4.jpg')?>" alt="testimonial" />
                        <h4>David Laid</h4>
                        <h5>Businessman</h5>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!----------------------------------Blog Terkait--------------------------------------------------------------------- -->
    <section class="section__container blog_container" id="blog">
        <h2 class="section__header">Recent Blog</h2>
        <div class="blog__grid">
            <div class="blog__card">
                <img src="<?=base_url('assets/blog-1.jpg')?>" alt="blog" />
                <h4>Mastering Modern Minimalism</h4>
                <p><span>by</span> DesignSavvySoul <span>on</span> Apr 18th, 2022</p>
            </div>
            <div class="blog__card">
                <img src="<?=base_url('assets/blog-2.jpg')?>" alt="blog" />
                <h4>The Fusion of Tech and Design</h4>
                <p>
                    <span>by</span> ChicNestInteriors <span>on</span> Nov 10th, 2022
                </p>
            </div>
            <div class="blog__card">
                <img src="<?=base_url('assets/blog-3.jpg')?>" alt="blog" />
                <h4>Eco-Friendly Modern Interiors</h4>
                <p><span>by</span> HomeStyleHarmony <span>on</span> Feb 25th, 2023</p>
            </div>
        </div>
    </section>
    <!----------------------------------footer--------------------------------------------------------------------- -->
    <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__content">
                <h4>SUBSCRIBE TO GET THE LATEST NEWS ABOUT US</h4>
                <p>
                    We recommend you to subscribe to our newspaper. Enter your email to
                    get our daily updates about us
                </p>
            </div>
            <div class="footer__form">
                <form action="/">
                    <input type="text" placeholder="Enter your email" />
                    <button>Subscribe</button>
                </form>
            </div>
        </div>
        <div class="section__container footer__bar">
            <div class="footer__logo">
                <h4><a href="#">NovusHaus</a></h4>
                <p>Copyright © 2023 Web Design Mastery. All rights reserved.</p>
            </div>
            <ul class="footer__nav">
                <li class="footer__link"><a href="#">About</a></li>
                <li class="footer__link"><a href="#">Partnership</a></li>
                <li class="footer__link"><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="<?=base_url('assets/')?>js/main.js"></script>
</body>

</html>