<?php require('./partials/header.php') ?>


<section class="slider-container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" class="slider-01-indicator active" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#carouselExampleFade" class="slider-02-indicator" data-bs-slide-to="1" aria-label="Slide 2">
            </button>
            <button type="button" data-bs-target="#carouselExampleFade" class="slider-03-indicator" data-bs-slide-to="2" aria-label="Slide 3">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/hotels.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Holiday Packages</h5>
                    <p class="w-75">
                        Discover the world with confidence, guided by our expert team who are dedicated to
                        creating tailor-made itineraries that suit your unique preferences and interests.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/curise.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Worldwide Transportation</h5>
                    <p class="w-75">Whether you're a multinational corporation, a small business, or an individual seeking reliable transportation solutions, we've got you covered.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/hotel_booking.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>International Hotel Booking</h5>
                    <p class="w-75">Planning your next getaway or business trip? Look no further than Details Travels & Tourism for seamless hotel bookings worldwide. </p>
                </div>
            </div>
        </div>

    </div>
</section>

<main>
    <!-- About start -->
    <section class="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="img-container">
                        <img src="./assets/images/aboutus.jpg" alt="...">
                        <!-- <div class="img-content">
                                <h3 class="m-0">Details</h3>
                                <p class="m-0">Tours & Travels</p>
                            </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-container">
                        <p class="tag-line">How we are</p>
                        <div class="mb-4">
                            <h3 class="heading">Welcome to </h3>
                            <h3 class="heading">Details Travels & Tourism</h3>
                        </div>
                        <!-- <p>Welcome to Details Travels & Tourism</p> -->
                        <p>Your gateway to unforgettable adventures and
                            seamless journeys. With a commitment to excellence and a passion for exploration, we
                            specialize in crafting personalized travel experiences that exceed expectations.</p>
                        <p>
                            At Details Travels & Tourism, we believe that every journey should be an enriching and
                            unforgettable experience. From the moment you embark on your adventure to the moment you
                            return home, we'll be with you every step of the way, ensuring smooth transitions,
                            authentic encounters, and memories that last a lifetime.
                        </p>
                        <p>
                            Discover the world with confidence, guided by our expert team who are dedicated to
                            creating tailor-made itineraries that suit your unique preferences and interests.
                        </p>
                        <a href="/about.php">To know more about us</a>
                    </div>
                </div>
            </div>
    </section>
    <!-- About start -->
    <!-- Services start -->
    <div class="services">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <div class="services-heading d-flex flex-wrap justify-content-between align-items-top ">
                        <div>
                            <p class="tag-line">Our Services</p>
                            <h3 class="heading">Quality service</h3>
                            <h3 class="heading">you can get</h3>
                        </div>
                        <div>
                            <p class="service-description">
                                Embark on your next adventure with Details Travels & Tourism, where the world is yours
                                to explore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme services-carousel">
                        <div>

                            <div class="content-container">
                                <!-- <div class="service-img-container">
                                        <img src="./assets/images/curise-service.svg" alt="">
                                    </div> -->
                                <div class="description">
                                    <h4 class="service-sub-heading text-white">Umrah <br> Package</h4>
                                    <div>
                                        <p>
                                            Embark on a spiritual journey like no other with our meticulously crafted
                                            Umrah Packages. At Details Travels & Tourism.
                                        </p>
                                        <a href="#" class="service-btn">
                                            <i class="bi bi-arrow-up"></i>
                                        </a>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div>
                            <div class="content-container">

                                <div class="description">
                                    <h4 class="service-sub-heading text-white">Holiday <br> Packages</h4>
                                    <div>
                                        <p>
                                            The holiday season is a time for joy, laughter, and creating
                                            unforgettable memories with loved ones. At Details Travels & Tourism.
                                        </p>
                                        <a href="#" class="service-btn">
                                            <i class="bi bi-arrow-up"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="content-container">


                                <div class="description">
                                    <h4 class="service-sub-heading text-white">Ticket <br> Reservation</h4>
                                    <div>
                                        <p>
                                            Are you tired of the hassle and stress
                                            that often accompanies booking tickets for your favorite events?
                                        </p>
                                        <a href="#" class="service-btn">
                                            <i class="bi bi-arrow-up"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="content-container">
                                <div class="description">
                                    <h4 class="service-sub-heading text-white">Worldwide <br> Transporation</h4>
                                    <div>
                                        <p>

                                            At Details Travels & Tourism, we understand that the world is interconnected, and efficient
                                            transportation is the lifeline of global commerce. Whether you're a multinational
                                            corporation, a small business.
                                        </p>
                                        <a href="#" class="service-btn">
                                            <i class="bi bi-arrow-up"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="content-container">
                                <div class="description">
                                    <h4 class="service-sub-heading text-white">Hotel <br> Bookings</h4>
                                    <div>
                                        <p>

                                            Planning your next getaway or business trip? Look no further than Details Travels & Tourism for
                                            seamless hotel bookings worldwide.
                                        </p>
                                        <a href="#" class="service-btn">
                                            <i class="bi bi-arrow-up"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="content-container">
                                <div class="description">
                                    <h4 class="service-sub-heading text-white">Vist <br> Visa's</h4>
                                    <div>
                                        <p>

                                            Your trusted partner in navigating the complexities of international travel.
                                            Whether you're a seasoned globetrotter or embarking on your first overseas adventure
                                        </p>
                                        <a href="#" class="service-btn">
                                            <i class="bi bi-arrow-up"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services end -->
    <!-- Testimonials start  -->
    <section class="testimonials">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <div class="testimonial-heading">
                        <p class="tag-line">Satisfied Customers</p>
                        <h3 class="heading">Testimonials</h3>
                        <p class="sub-description">
                            Whether you're dreaming of a luxurious escape to pristine beaches, an exhilarating
                            safari through rugged landscapes, or a cultural immersion in vibrant cities, we have the
                            expertise to turn your dreams into reality.


                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="owl-carousel owl-theme">
                        <div>

                            <div class="content-container">
                                <div class="profile-info">
                                    <img src="./assets/images/office-man.png" alt="">
                                    <h6>Edward Jhon</h6>
                                    <p>Software Engineer</p>
                                </div>
                                <p class="description">
                                    As someone who travels frequently for business and leisure, I've dealt with my fair share of travel agencies. However, Details Travels & Tourism truly stands out from the rest. Their dedication to customer satisfaction is evident in every interaction. Whether it's a last-minute hotel booking or a complex travel itinerary, they always deliver with professionalism and efficiency.

                                </p>

                            </div>

                        </div>
                        <div>
                            <div class="content-container">
                                <div class="profile-info">
                                    <img src="./assets/images/office-man.png" alt="">
                                    <h6>Abdul Rasheed</h6>
                                    <p>Event Manager</p>
                                </div>
                                <p class="description">
                                    My experience with Details Travels & Tourism was nothing short of amazing. From seamless hotel bookings to hassle-free ticket reservations, they made my journey stress-free. Their attention to detail and commitment to customer satisfaction truly stood out. I highly recommend them for anyone planning their Hajj or Umrah pilgrimage.
                                </p>

                            </div>
                        </div>
                        <div>
                            <div class="content-container">
                                <div class="profile-info">
                                    <img src="./assets/images/office-man.png" alt="">
                                    <h6>Rohit Gupta</h6>
                                    <p>Business Owner</p>
                                </div>
                                <p class="description">

                                    Planning my holiday has never been simpler thanks to this Details Travels & Tourism incredible holiday packages! From exotic destinations to cozy getaways, they offer a wide range of options to suit every traveler's taste and budget. The packages are meticulously crafted, covering everything from accommodations to activities, ensuring a stress-free and memorable vacation.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials end -->

</main>

<?php require('./partials/footer.php') ?>