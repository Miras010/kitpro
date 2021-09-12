<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Slider -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    </head>
    <body>
        <h1>ssssssssssss</h1>
        <header class="header">
            <div class="container header-sec">
                <img src="{{ asset('img/logo.jpg') }}" alt="logo" class="logo">
                <div class="navbar">
                    <div class="navlink">
                        <a class="menu_link" data-goto=".main" href="#">Главная</a>
                    </div>
                    <div data-goto="about" class="navlink">
                        <a class="menu_link" href="#">Продукция</a>
                    </div>
                    <div class="navlink">
                        <a class="menu_link" data-goto=".about" href="#">О нас</a>
                    </div>
                    <div class="navlink">
                        <a class="menu_link" data-goto=".otziv"  href="#">Контакты</a>
                    </div>
                </div>
                <div class="contacts">
                    <div class="number">
                        Телефон: +7 777 777 77 77
                    </div>
                    <div class="mail">
                        Почта: example-mail@gmail.com
                    </div>
                    <div class="soc-media">

                    </div>
                </div>
            </div>
            <hr>
        </header>`

        <main>
            <div class="main">
                <div class="main-sec container">
                    <div class="main-info" data-aos="fade-right">
                        <h2 class="main-text">
                            Лучшая мебель <br> для вашего дома
                        </h2>
                        <button class="main-button">Связаться с нами</button>
                    </div>
                    <div class="img-shadow" data-aos="fade-left">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="about">
                <div class="fullscreen-bg">
                    <div class="overlay">
                        <h2>О нас</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Accusamus ad alias aperiam architecto blanditiis
                            commodi cum deserunt doloribus eaque est eum impedit
                            minima nihil obcaecati, praesentium quos rem saepe temporibus
                            tenetur voluptas. A accusantium beatae consectetur cumque esse excepturi explicabo fuga hic,
                            illum, incidunt nihil nobis quos recusandae similique sit?</p>
                    </div>
                    <video loop="" muted="" autoplay="" poster="{{ asset('img/video.mp4') }}" class="fullscreen-bg__video">
                        <source src="{{ asset('img/animation.mp4') }}" type="video/mp4">
                        <source src="video/plane.webm" type="video/webm">
                    </video>
                </div>
            </div>
            <div class="otziv">
                <h2>Отзывы наших клиентов</h2>
                <!-- Swiper -->
                <div class="swiper mySwiper container" data-aos="zoom-out" data-aos-duration="700">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-box">
                                <div class="content">
                                    <img src="{{ asset('img/quote-left.png') }}" alt="qoute" class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci molestias quaerat sunt? Ea fuga praesentium voluptatibus voluptatum! Animi consequuntur corporis dicta eius incidunt iure odit officia quis quo recusandae sequi tenetur, totam. Aut, consequuntur error ipsam nisi qui reprehenderit totam?</p>
                                    <div class="details">
                                        <img src="{{ asset('img/man.jpg') }}" alt="photo">
                                        <h3>Someone Famous <br>
                                        <span>Creative Designer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-box">
                                <div class="content">
                                    <img src="{{ asset('img/quote-left.png') }}" alt="qoute" class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci molestias quaerat sunt? Ea fuga praesentium voluptatibus voluptatum! Animi consequuntur corporis dicta eius incidunt iure odit officia quis quo recusandae sequi tenetur, totam. Aut, consequuntur error ipsam nisi qui reprehenderit totam?</p>
                                    <div class="details">
                                        <img src="{{ asset('img/man.jpg') }}" alt="">
                                        <h3>Someone Famous <br>
                                            <span>Creative Designer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-box">
                                <div class="content">
                                    <img src="{{ asset('img/quote-left.png') }}" alt="qoute" class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci molestias quaerat sunt? Ea fuga praesentium voluptatibus voluptatum! Animi consequuntur corporis dicta eius incidunt iure odit officia quis quo recusandae sequi tenetur, totam. Aut, consequuntur error ipsam nisi qui reprehenderit totam?</p>
                                    <div class="details">
                                        <img src="{{ asset('img/man.jpg') }}" alt="">
                                        <h3>Someone Famous <br>
                                            <span>Creative Designer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-box">
                                <div class="content">
                                    <img src="{{ asset('img/quote-left.png') }}" alt="qoute" class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci molestias quaerat sunt? Ea fuga praesentium voluptatibus voluptatum! Animi consequuntur corporis dicta eius incidunt iure odit officia quis quo recusandae sequi tenetur, totam. Aut, consequuntur error ipsam nisi qui reprehenderit totam?</p>
                                    <div class="details">
                                        <img src="{{ asset('img/man.jpg') }}" alt="">
                                        <h3>Someone Famous <br>
                                            <span>Creative Designer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-box">
                                <div class="content">
                                    <img src="{{ asset('img/quote-left.png') }}" alt="qoute" class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci molestias quaerat sunt? Ea fuga praesentium voluptatibus voluptatum! Animi consequuntur corporis dicta eius incidunt iure odit officia quis quo recusandae sequi tenetur, totam. Aut, consequuntur error ipsam nisi qui reprehenderit totam?</p>
                                    <div class="details">
                                        <img src="{{ asset('img/man.jpg') }}" alt="">
                                        <h3>Someone Famous <br>
                                            <span>Creative Designer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-box">
                                <div class="content">
                                    <img src="{{ asset('img/quote-left.png') }}" alt="qoute" class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci molestias quaerat sunt? Ea fuga praesentium voluptatibus voluptatum! Animi consequuntur corporis dicta eius incidunt iure odit officia quis quo recusandae sequi tenetur, totam. Aut, consequuntur error ipsam nisi qui reprehenderit totam?</p>
                                    <div class="details">
                                        <img src="{{ asset('img/man.jpg') }}" alt="">
                                        <h3>Someone Famous <br>
                                            <span>Creative Designer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-box">
                                <div class="content">
                                    <img src="{{ asset('img/quote-left.png') }}" alt="qoute" class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci molestias quaerat sunt? Ea fuga praesentium voluptatibus voluptatum! Animi consequuntur corporis dicta eius incidunt iure odit officia quis quo recusandae sequi tenetur, totam. Aut, consequuntur error ipsam nisi qui reprehenderit totam?</p>
                                    <div class="details">
                                        <img src="{{ asset('img/man.jpg') }}" alt="">
                                        <h3>Someone Famous <br>
                                            <span>Creative Designer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-sec">
                <div class="footer-logo">
                    <h1>Название компании</h1>
                </div>
                <div class="footer-info">

                </div>
                <div class="footer-social">
                    <img src="{{ asset('img/instagram.png') }}" alt="">
                    <img src="{{ asset('img/facebook.png') }}" alt="">
                    <img src="{{ asset('img/twitter.png') }}" alt="">
                </div>
                <div class="footer-last">
                    <p>	&copy; Almaty 2021 &copy; All Right Reserved.</p>
                </div>
            </div>
        </footer>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('js/animations.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
            });
        </script>
    </body>
</html>


