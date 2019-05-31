<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");?>

<div class="main-content" id="home">
        <div class="layer">
            <!-- header -->
            <header>
                <div class="container-fluid px-lg-5">
                    <!-- nav -->
                    <nav class="py-4 d-lg-flex">
                        <div id="logo">
                            <h1> <a href="index.html"><span class="fa fa-align-center" aria-hidden="true"></span>HB</a></h1>
                        </div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2 ml-auto">
                            <li class="active red-text"><a href="index.html">Home</a></li>
                            <li><a href="#about" class="scroll">About</a></li>
                            <li><a href="#menu" class="scroll">Menu</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul class="inner-ul">
                                    <li><a class="scroll" href="#gallery">Gallery</a></li>
                                    <li><a href="#services" class="scroll">Services</a></li>
                                    <li><a href="#menu" class="scroll">Menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#testimonials" class="scroll">Reviews</a></li>
                            <li><a href="#contact" class="scroll">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <div class="container">
                <!-- /banner -->
                <div class="banner-info-w3layouts text-center">
                    <h3>Burger Special</h3>
                    <div class="read-more">
                        <a href="#about" class="read-more scroll">Read More </a> </div>
                </div>
                <div class="row order-info">
                    <div class="middle mt-3 col-md-6 text-left">
                        <ul class="social mb-4">
                            <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
                        </ul>

                    </div>
                    <div class="middle-right mt-md-3 col-md-6 text-right">
                        <h6><span class="fa fa-phone"></span> Order Now : 123456789</h6>
                    </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </div>
      <!--// mian-content -->
          <!-- banner-bottom-wthree -->
    <section class="banner-bottom-wthree py-5" id="about">
        <div class="container py-md-3">
            <div class="row banner-grids">
                <div class="col-md-6 content-left-bottom text-left pr-lg-5">
                    <h4>TRIPLE HAMBURGER WITH CHEESE MEAL</h4>
                    <p class="mt-2 text-left">Integer pulvinar leo id viverra feugiat.<strong class="text-capitalize"> Pellentesque libero justo, semper at tempus vel, ultrices in sed ligula. Nulla uter sollicitudin velit.</strong> Sed porttitor orci vel fermentum elit maximus. Curabitur ut turpis massa in condimentum libero. Pellentesque maximus Pellentesque libero justo Nulla uter sollicitudin velit. Sed porttitor orci vel ferm semper at vel, ultrices in ligula semper at vel.Curabitur ut turpis massa in condimentum libero.</p>

                </div>
                <div class="col-md-6 content-right-bottom text-left">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/ab1.png" alt="news image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-wthree -->
     <!--/ about -->
     <section class="services py-5" id="services">
        <div class="container py-md-5">
            <div class="header pb-lg-3 pb-3 text-center">
                <h3 class="tittle two mb-lg-3 mb-3">What kind of Foods we serve for you</h3>
            </div>
            <div class="row ab-info mt-lg-4">
                <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/1.jpg" alt="news image" class="img-fluid">
                        <div class="ab-info-con">
                            <h4>Delicious sandwich</h4>
                            <p>$5.99</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/2.jpg" alt="news image" class="img-fluid">
                        <div class="ab-info-con">
                            <h4>Humburger & Chips</h4>
                            <p>$10.99</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/3.jpg" alt="news image" class="img-fluid">
                        <div class="ab-info-con">
                            <h4>Two burgers for one</h4>
                            <p>$25.99</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/4.jpg" alt="news image" class="img-fluid">
                        <div class="ab-info-con">
                            <h4>Veg Muffin</h4>
                            <p>$28.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// about -->
    <!--/mid-sec-->
    <section class="mid-sec py-5" id="menu">
        <div class="container-fluid py-lg-5">
            <div class="header pb-lg-3 pb-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3">Bigger & Bolder</h3>
            </div>
            <div class="middile-inner-con">
                <div class="tab-main mx-auto text-center">

                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1"><span class="fa fa-align-center" aria-hidden="true"></span> Burgers</label>

                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2"><span class="fa fa-bolt" aria-hidden="true"></span> Fries</label>

                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3"><span class="fa fa-bitbucket" aria-hidden="true"></span> Drinks</label>

                    <section id="content1">
                        <div class="ab-info row">
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/5.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Bacon Burger</h4>
                                        <p class="price">$5.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/6.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Cheese Butter</h4>
                                        <p class="price">$15.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/7.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Delicious sandwich</h4>
                                        <p class="price">$25.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/6.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Delicious sandwich</h4>
                                        <p class="price">$35.99</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>

                    <section id="content2">

                        <div class="ab-info row">
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/8.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Pene Salmone</h4>
                                        <p class="price">$5.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/9.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Cheese Butter</h4>
                                        <p class="price">$15.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/7.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Bolognese Pasta</h4>
                                        <p class="price">$25.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/10.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Tagliatelle Molto</h4>
                                        <p class="price">$35.99</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section id="content3">
                        <div class="ab-info row">
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/11.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Cola Bottle</h4>
                                        <p class="price">$5.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/12.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Fresh Lime</h4>
                                        <p class="price">$15.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/11.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Cola Bottle</h4>
                                        <p class="price">$25.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ab-content">
                                <div class="tab-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/12.jpg" alt="news image" class="img-fluid">
                                    <div class="ab-info-con">
                                        <h4>Kiwi Smoothie</h4>
                                        <p class="price">$35.99</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--//mid-sec-->
    <!--/order-now-->
    <section class="order-sec pb-5 pt-md-0 pt-5" id="order">
        <div class="container py-lg-3">
            <div class="test-info text-center">
                <h3 class="tittle order">
                    <span>Free Delivery With</span>Burger Of the Day</h3>

                <div class="row mt-lg-4 mt-3">
                    <div class="col-md-6 order-left-content text-right">
                        <h4>$99</h4>
                    </div>
                    <div class="col-md-6 order-right-content text-left">
                        <ul class="tic-info list-unstyled">
                            <li>

                                <span class="fa fa-long-arrow-right mr-2"></span> Integer sit amet mattis quam

                            </li>
                            <li>

                                <span class="fa fa-long-arrow-right mr-2"></span> Praesent ullamcorper dui turpis

                            </li>
                            <li>

                                <span class="fa fa-long-arrow-right mr-2"></span> Integer sit amet mattis quam

                            </li>

                        </ul>
                    </div>
                    <div class="read-more mx-auto text-center">
                        <a href="#contact" class="read-more scroll">Read More </a> </div>
                </div>
            </div>
        </div>
    </section>
    <!--//order-now-->

    <!-- Gallery -->
    <section class="gallery py-5" id="gallery">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-3">Our Gallery</h3>
            </div>
            <div class="row news-grids text-center gallery-wrap">
                <div class="col-md-3 gal-img">
                    <a href="#gal1"><img src="<?=SITE_TEMPLATE_PATH?>/images/g1.jpg" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 gal-img">
                    <a href="#gal2"><img src="<?=SITE_TEMPLATE_PATH?>/images/g2.jpg" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 gal-img">
                    <a href="#gal3"><img src="<?=SITE_TEMPLATE_PATH?>/images/g3.jpg" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 gal-img">
                    <a href="#gal4"><img src="<?=SITE_TEMPLATE_PATH?>/images/g4.jpg" alt="news image" class="img-fluid"></a>
                </div>

            </div>

            <!-- popup-->
            <div id="gal1" class="pop-overlay animate">
                <div class="popup">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/g1.jpg" alt="Popup Image" class="img-fluid" />

                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->

            <!-- popup-->
            <div id="gal2" class="pop-overlay animate">
                <div class="popup">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/g2.jpg" alt="Popup Image" class="img-fluid" />

                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="pop-overlay animate">
                <div class="popup">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/g3.jpg" alt="Popup Image" class="img-fluid" />

                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="pop-overlay animate">
                <div class="popup">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/g4.jpg" alt="Popup Image" class="img-fluid" />

                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->


        </div>
    </section>
    <!--// gallery -->

    <!--/testimonials-->
    <section class="testimonials" id="testimonials">
        <div class="layer footer">
            <div class="container py-5">
                <div class="test-info text-center">
                    <h3 class="my-md-2 my-3">Jenifer Burns</h3>

                    <ul class="list-unstyled w3ls-icons clients mb-md-4">
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star-half-o"></span>
                            </a>
                        </li>
                    </ul>
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut. <span class="fa fa-quote-right"></span></p>

                </div>
            </div>
        </div>
    </section>
    <!--//testimonials-->
    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container pb-md-5">
            <div class="header py-lg-5 pb-3 text-center">
                <h3 class="tittle mb-lg-5 mb-3"> Contact Us</h3>
            </div>

            <div class="contact-form mx-auto text-left">
                <form name="contactform" id="contactform1" method="post" action="#">
                    <div class="row">
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" id="name" placeholder="" name="name" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 contact-page">
                            <div class="form-group">
                                <label>Submit *</label>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
            <ul class="list-unstyled row text-left mb-lg-5 mb-3">
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Location</h6>
                            <p>The company name
                                <br>New York City. </p>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Email</h6>
                            <a href="mailto:info@example.com">mail@example.com</a>
                            <br>
                            <a href="mailto:info@example.com">mail2@example.com</a>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Phone Number</h6>
                            <p>+ 1234567890</p>
                            <p>+ 0987654321</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </section>
    <!-- //contact -->

<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>