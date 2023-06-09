<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/faviconb.png" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Responsive plants website - Bedimcode</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <!-- <i class="ri-leaf-line nav__logo-icon"></i> Breathe -->
                <img class="ri-leaf-line nav__logo-icon" src="assets/img/breathelogo.png" /> Breathe
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#articles" class="nav__link">Articles</a>
                    </li>
                    <li class="nav__item">
                        <a href="#products" class="nav__link">Products</a>
                    </li>

                    <li class="nav__item">
                        <a href="#events" class="nav__link">Events</a>
                    </li>
                    <li class="nav__item">
                        <a href="#recycling" class="nav__link">Recycling</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact Us</a>
                    </li>
                    <li><a href="../login/index.php" class="button button--flex">
                            Sign in <i class="ri-arrow-right-down-line button__icon"></i></a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="ri-moon-line change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="assets/img/home.png" alt="" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">
                        A Greener Earth<br>For a Brighter Future
                    </h1>
                    <p class="home__description">
                        Take a deeper breath.
                    </p>
                    <a href="#about" class="button button--flex">
                        Explore <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>

                <div class="home__social">
                    <span class="home__social-follow">Follow Us</span>

                    <div class="home__social-links">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section container" id="about">
            <div class="about__container grid">
                <img src="assets/img/about.png" alt="" class="about__img">

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Who we really are & <br> why choose us
                    </h2>

                    <p class="about__description">
                        Our mission at <q>Breathe</q> is to promote environmental sustainability
                        and inspire others to take action towards a greener future. We believe that by
                        raising awareness and encouraging positive changes, we can create a better world
                        for ourselves and future generations.
                    </p>

                    <div class="about__details">
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Informative Articles.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Exciting Events.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Interactive Recycling Resources.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Eco-Friendly Shop.
                        </p>
                    </div>

                    <a href="#" class="button--link button--flex">
                        Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== ARTICLES ====================-->
        <section class="steps section container" id="articles">
            <div class="steps__bg">
                <h2 class="section__title-center steps__title">
                    Discover new things <br> Enhance your knowledge
                </h2>

                <div class="steps__container grid">
                    <div class="steps__card">
                        <div class="steps__card-number"><img src="assets/img/art1.png" /></div>
                        <h3 class="steps__card-title">Choose Plant</h3>
                        <p class="steps__card-description">
                            We have several varieties plants you can choose from.
                        </p>
                    </div>
                    <div class="steps__card">
                        <div class="steps__card-number"><img src="assets/img/art2.png" /></div>
                        <h3 class="steps__card-title">Choose Plant</h3>
                        <p class="steps__card-description">
                            We have several varieties plants you can choose from.
                        </p>
                    </div>
                    <div class="steps__card">
                        <div class="steps__card-number"><img src="assets/img/art3.png" /></div>
                        <h3 class="steps__card-title">Choose Plant</h3>
                        <p class="steps__card-description">
                            We have several varieties plants you can choose from.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!--==================== PRODUCTS ====================-->
        <section class="product section container" id="products">
            <h2 class="section__title-center">
                Check out our <br> products
            </h2>

            <p class="product__description">
                Here are some selected plants from our showroom, all are in excellent
                shape and has a long life span. Buy and enjoy best quality.
            </p>

            <div class="product__container grid">
                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product1.png" alt="" class="product__img">

                    <h3 class="product__title">Cacti Plant</h3>
                    <span class="product__price">$19.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product2.png" alt="" class="product__img">

                    <h3 class="product__title">Cactus Plant</h3>
                    <span class="product__price">$11.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product3.png" alt="" class="product__img">

                    <h3 class="product__title">Aloe Vera Plant</h3>
                    <span class="product__price">$7.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product4.png" alt="" class="product__img">

                    <h3 class="product__title">Succulent Plant</h3>
                    <span class="product__price">$5.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product5.png" alt="" class="product__img">

                    <h3 class="product__title">Succulent Plant</h3>
                    <span class="product__price">$10.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product6.png" alt="" class="product__img">

                    <h3 class="product__title">Green Plant</h3>
                    <span class="product__price">$8.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>
            </div>
        </section>

        <!--==================== EVENTS ====================-->
        <section class="steps section container" id="events">
            <div class="steps__bg">
                <h2 class="section__title-center steps__title">
                    Protect our planet<br>join eco-events for sustainable living
                </h2>

                <div class="steps__container grid">
                    <div class="steps__card">
                        <div class="steps__card-number"><img src="assets/img/ev1.png" /></div>
                        <h3 class="steps__card-title">Choose Plant</h3>
                        <p class="steps__card-description">
                            We have several varieties plants you can choose from.
                        </p>
                    </div>
                    <div class="steps__card">
                        <div class="steps__card-number"><img src="assets/img/ev2.png" /></div>
                        <h3 class="steps__card-title">Choose Plant</h3>
                        <p class="steps__card-description">
                            We have several varieties plants you can choose from.
                        </p>
                    </div>
                    <div class="steps__card">
                        <div class="steps__card-number"><img src="assets/img/ev3.png" /></div>
                        <h3 class="steps__card-title">Choose Plant</h3>
                        <p class="steps__card-description">
                            We have several varieties plants you can choose from.
                        </p>
                    </div>
                </div>
            </div>
        </section></br>
        <!--==================== QUESTIONS ====================-->
        <section class="questions section" id="recycling">
            <h2 class="section__title-center questions__title container">
                Recycling today <br> for a better tomorrow!
            </h2>
            </br></br>
            <div class="recycling-img"><img src="assets/img/recycle.png" /></div>
            </br></br>
            <div class="questions__container container grid">

                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                My flowers are falling off or dying?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes leaves to become pale?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes brown crispy leaves?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do i choose a plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do I change the pots?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Why are gnats flying around my plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section container" id="contact">
            <div class="contact__container grid">
                <div class="contact__box">
                    <h2 class="section__title">
                        Reach out to us today <br> via any of the given <br> information
                    </h2>

                    <div class="contact__data">
                        <div class="contact__information">
                            <h3 class="contact__subtitle">Call us for instant support</h3>
                            <span class="contact__description">
                                <i class="ri-phone-line contact__icon"></i>
                                +999 888 777
                            </span>
                        </div>

                        <div class="contact__information">
                            <h3 class="contact__subtitle">Write us by mail</h3>
                            <span class="contact__description">
                                <i class="ri-mail-line contact__icon"></i>
                                user@email.com
                            </span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact__form">
                    <div class="contact__inputs">
                        <div class="contact__content">
                            <input type="email" placeholder=" " class="contact__input">
                            <label for="" class="contact__label">Email</label>
                        </div>

                        <div class="contact__content">
                            <input type="text" placeholder=" " class="contact__input">
                            <label for="" class="contact__label">Subject</label>
                        </div>

                        <div class="contact__content contact__area">
                            <textarea name="message" placeholder=" " class="contact__input"></textarea>
                            <label for="" class="contact__label">Message</label>
                        </div>
                    </div>

                    <button class="button button--flex">
                        Send Message
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="ri-leaf-line footer__logo-icon"></i> Breathe
                </a>

                <h3 class="footer__title">
                    Subscribe to our newsletter <br> to stay update
                </h3>

                <div class="footer__subscribe">
                    <input type="email" placeholder="Enter your email" class="footer__input">

                    <button class="button button--flex footer__button">
                        Subscribe
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Address</h3>

                <ul class="footer__data">
                    <li class="footer__information">1234 - Peru</li>
                    <li class="footer__information">La Libertad - 43210</li>
                    <li class="footer__information">123-456-789</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Contact Us</h3>

                <ul class="footer__data">
                    <li class="footer__information">+999 888 777</li>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    We accept all credit cards
                </h3>

                <div class="footer__cards">
                    <img src="assets/img/card1.png" alt="" class="footer__card">
                    <img src="assets/img/card2.png" alt="" class="footer__card">
                    <img src="assets/img/card3.png" alt="" class="footer__card">
                    <img src="assets/img/card4.png" alt="" class="footer__card">
                </div>
            </div>
        </div>

        <p class="footer__copy">&#169; Breathe. All rights reserved</p>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>