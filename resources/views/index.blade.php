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

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
        <header class="header">
            <div class="container header-sec">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
                <div class="nav">
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
                <div class="header-social">
                    <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-icons"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
            <hr>
        </header>`

        <main>
            <div class="main">
                <div class="main-sec container">
                    <div class="main-info" data-aos="fade-right">
                        <h2 class="main-text">
                            Crystalhome <br> уют в ваш дом
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
                        <p> <span>CrystalHome</span> - это поистине мебельный рай. В нашем интернет-магазине вы сможете подобрать себе мебель под любые вкусовые
                            и цветовые предпочтения. Наш ассортимент наполнен различными вариантами под каждую из ценовых категорий от бюджетных видов
                            отечественного изготовления до моделей премиум класса, представленных ведущими итальянскими производителями.
                            Размещенная на страницах сайта продукция подарит вашему дому чувство комфорта и уюта на долгие годы.</p>
                        <div class="mid clearfix">
                            <div id="counter">
                                <div class="bl">
                                    <div data-num="4" class="number">0</div>
                                    <div class="text">года на рынке</div>
                                </div>
                                <div class="bl">
                                    <div data-num="100" class="number">0</div>
                                    <div class="text">клиентов</div>
                                </div>
                                <div class="bl">
                                    <div data-num="200" class="number">0</div>
                                    <div class="text">успешных проектов</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video loop="" muted="" autoplay="" poster="{{ asset('img/video.mp4') }}" class="fullscreen-bg__video">
                        <source src="{{ asset('img/animation.mp4') }}" type="video/mp4">
                        <source src="video/plane.webm" type="video/webm">
                    </video>
                </div>
            </div>

            <div class="card-sec">
                <h2 class="main-word">Краткое описание продукции</h2>
                <div class="cards">
                    <div class="card">
                        <div class="face front">
                        </div>
                        <div class="face back">
                            <h2>Гостевая комната</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, perferendis!</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face front">
                        </div>
                        <div class="face back">
                            <h2>Гостевая комната</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, perferendis!</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face front">
                        </div>
                        <div class="face back">
                            <h2>Гостевая комната</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, perferendis!</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face front">
                        </div>
                        <div class="face back">
                            <h2>Гостевая комната</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, perferendis!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feedback">
                <h3>*Оставьте заявку и наш менеджер
                    перезвонит вам в течение 15 минут</h3>
                <div class="wrap-contact100">
                    <form action="{{route('form')}}" method="post" id="form" name="contact_form" onsubmit="return validateForm()">
                        @csrf
                        <div class="wrap-input100">
                            <input class="input100" type="text" name="name" placeholder="ВАШЕ ИМЯ">
                        </div>

                        <div class="wrap-input100">
                            <input class="input100" type="tel" name="phone" placeholder="НОМЕР ТЕЛЕФОНА">
                        </div>

                        <div class="wrap-input100">
                            <textarea class="input100" name="report" placeholder="СООБЩЕНИЕ"></textarea>
                        </div>
                        <button class="button" type="submit">
                            Оставить заявку
                        </button>
                    </form>
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
        <footer id="myFooter">
            <div class="footer-social">
                <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
                <a href="#" class="social-icons"><i class="fa fa-instagram"></i></a>
                <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="container">
                <ul>
                    <li><a class="menu_link" data-goto=".main" href="#">На главную</a></li>
                    <li><a class="menu_link" data-goto=".about" href="#">О компании</a></li>
                    <li><a class="menu_link" data-goto=".main" href="#">Связаться с нами</a></li>
                </ul>
                <p class="footer-copyright">© 2020 Almaty, Kazakhstan</p>
            </div>

        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/animations.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>

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


