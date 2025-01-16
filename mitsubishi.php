

<?php include('header.php') ?>


<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('img/bg-header-banner.jpg');">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <!-- <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            Car
                        </li> -->
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Mitsubishi</h1>
                </div>
            </div>
        </div>
      
<!-- Car Details Section Start -->
<section class="car-details fix section-padding">
    <div class="container">
        <div class="car-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Car Booking Form Section -->
                    <div class="car-booking-items">
    <div class="booking-header">
        <h3>Request for Booking</h3>
        <p>Fill your requirement to us. We will check your request and contact you soon.</p>
    </div>
    <form action="sendemail.php" id="contact-form" method="POST" class="contact-form-items">
        <input type="hidden" name="car_name" value="Peugeot 308">
        <div class="row">
           <!-- Name Field -->
           <div class="col-lg-6">
                <div class="form-clt">
                    <label class="label-text">Your Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" class="input-field" required>
                </div>
            </div>
            
            <!-- Email Field -->
            <div class="col-lg-6">
                <div class="form-clt">
                    <label class="label-text">Email</label>
                    <input type="text" name="email" id="email" placeholder="example@gmail.com" class="input-field" >
                </div>
            </div>

            <!-- Phone Number Field -->
            <div class="col-lg-6">
                <div class="form-clt">
                    <label class="label-text">Phone Number</label>
                    <input type="text" name="phone" id="phone" placeholder="+977 00 0000 - 000" class="input-field" required>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="form-clt">
                    <label class="label-text">Drop-off Location</label>
                    <input type="text" name="location" id="location" placeholder="koteshor" class="input-field" required>
                </div>
            </div>

            <div class="col-lg-12">
                                            <div class="form-clt">
                                                <label class="label-text">Pick-up Date</label>
                                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input name='pickup_date' class="form-control" type="text" placeholder="Check in" readonly>
                                                    <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <label class="label-text">Drop-off Date</label>
                                                <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" name = 'dropoff_date' placeholder="Check in" readonly>
                                                    <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                        </div>

            <!-- Submit Button -->
            <div class="col-lg-12">
                <button class="theme-btn animated-btn" type="submit">
                    Send Request
                </button>
            </div>
        </div>
    </form>


                    </div>
                    <!-- End of Booking Form Section -->

                    <!-- Car Details Section -->
                    <div class="car-details-items">
                        <div class="car-image">
                            <img src="img/Cars/mitsubhi.jpg" alt="Peugeot 308">
                        </div>
                        <div class="car-content">
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Reviews</span>
                            </div>
                            <h3>Mitsubishi</h3>
                            <h6>RS800.00 <span>/ Day</span></h6>
                            <p class="mt-4 mb-4">
                                To deliver on the promise of technology and human We help our clients become sions of themselves.
                            </p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="car-list-sidebar">
                        <h4 class="title">Other Car</h4>
                        <!-- Example Car Items -->
                        <div class="car-item">
                            <a href="hondacity.php">
                                <img src="img/Cars/honda city.jpg" alt="Honda City">
                                <div class="details">
                                    Honda City
                                </div>
                                <div class="rate">1000/day</div>
                            </a>
                        </div>
                        <div class="car-item">
                            <a href="beetle.php">
                                <img src="img/Cars/beetle.jpg" alt="Beetle">
                                <div class="details">
                                    Beetle
                                </div>
                                <div class="rate">1200/day</div>
                            </a>
                        </div>
                        <div class="car-item">
                            <a href="fordscosport.php">
                                <img src="img/Cars/ford_ecosport_trend.jpg" alt="Ford Ecosport">
                                <div class="details">
                                    Ford Ecosport
                                </div>
                                <div class="rate">1500/day</div>
                            </a>
                        </div>
                        <div class="car-item">
                            <a href="mghector.php">
                                <img src="img/car/car-list-1.jpg" alt="MG Hector">
                                <div class="details">
                                    MG Hector
                                </div>
                                <div class="rate">1200/day</div>
                            </a>
                        </div>
                        <div class="car-item">
                            <a href="peugeot.php">
                                <img src="img/Cars/peugeot_308.jpg" alt="MG Hector">
                                <div class="details">
                                    Peugeot
                                </div>
                                <div class="rate">1200/day</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>
