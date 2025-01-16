<?php include('header.php') ?>

 <!--<< Breadcrumb Section Start >>-->
 <div class="breadcrumb-wrapper bg-cover" style="background-image: url('img/bg-header-banner.jpg');">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <!-- <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            Contact
                        </li> -->
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Contact</h1>
                </div>
            </div>
        </div>
        <!-- Contact Section Start -->
        <section class="contact-section-1 fix section-padding pb-0">
            <div class="container">
                <div class="contact-wrapper-area">
                    <div class="row g-4">
                        <div class="col-lg-9">
                            <div class="contact-content">
                                <div class="section-title">
                                    <img src="img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">contact us</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                        Drop us a Line
                                    </h2>
                                </div>
                                <form action="sendContact.php" id="contact-form" method="POST" class="contact-form-items mt-5 mt-md-0">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email2" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="phone" id="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Write a Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn">
                                                Send a Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="contact-right-items">
                                <div class="contact-img">
                                    <img src="img/contact.jpg" alt="img">
                                </div>
                                <div class="icon-items">
                                    <div class="icon">
                                        <img src="img/question.png" alt="img">
                                    </div>
                                    <div class="content">
                                        <p>Have Question?</p>
                                        <h6><a href="tel:+923076806860">‪+977 980‑1136594‬</a></h6>
                                    </div>
                                </div>
                                <div class="icon-items">
                                    <div class="icon">
                                        <img src="img/email.png" alt="img">
                                    </div>
                                    <div class="content">
                                        <p>Write Email</p>
                                        <h6><a href="mailto: info@boharacarrental.com" class="link"> info@boharacarrental.com</a></h6>
                                    </div>
                                </div>
                                <div class="icon-items">
                                    <div class="icon">
                                        <img src="img/location.png" alt="img">
                                    </div>
                                    <div class="content">
                                        <p>Visit Office</p>
                                        <h6>
                                            <br>
                                           Kathmandu
                                        </h6>
                                    </div>
                                </div>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="contact.php#"><i class="fab fa-facebook-f"></i></a>
                                    <!-- <a href="contact.php#"><i class="fab fa-twitter"></i></a> -->
                                    <a href="contact.php#"><i class="fa-brands fa-whatsapp"></i></a>
                                    <a href="contact.php#"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('footer.php') ?>