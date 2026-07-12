<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Boy Toy Showroom</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">


</head>
<body>
<!-- Header link PHP-->
<?php 

include "include/header.php";

?>

<!-- Carousel -->
<div id="carouselExampleDark"
     class="carousel slide"
     data-bs-ride="carousel"
     data-bs-interval="1000">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
      class="active" aria-current="true" aria-label="Slide 1"></button>

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
      aria-label="Slide 2"></button>

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active" data-bs-interval="1000">
      <img src="assets/img/slider1.png" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="1000">
      <img src="assets/img/slider2.png" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Feel the Thrill of Pure Performance</h5>
        <p>Every curve, every detail, and every horsepower is crafted to create an unforgettable journey. Discover the legendary power of the Toyota Supra.</p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="1000">
      <img src="assets/img/slider3.png" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button"
    data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button"
    data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('#carouselExampleDark');

    new bootstrap.Carousel(carousel, {
        interval: 1000,   // 1 second
        ride: 'carousel',
        pause: false,
        wrap: true
    });
});
</script>




<!-- CONTACT HERO -->

<section class="contact-hero">

    <div class="container text-center">

        <h1>Contact Us</h1>

        <p>
            Connect with our luxury automobile specialists and discover your
            dream car today.
        </p>

    </div>

</section>

<!-- CONTACT SECTION -->

<section class="contact-section">

    <div class="container">

        <div class="row g-5">

            <!-- LEFT INFO -->

            <div class="col-lg-5">

                <div class="contact-info">

                    <h2>Get In Touch</h2>

                    <p>
                        Our team is here to assist you with luxury car purchases,
                        test drives, financing options, and exclusive vehicle inquiries.
                    </p>

                    <div class="info-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Location</h5>
                            <p>New Delhi, India</p>
                        </div>
                    </div>

                    <div class="info-box">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h5>Phone</h5>
                            <p>+91 9876543210</p>
                        </div>
                    </div>

                    <div class="info-box">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h5>Email</h5>
                            <p>info@bbtmotors.com</p>
                        </div>
                    </div>

                    <div class="info-box">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h5>Working Hours</h5>
                            <p>Mon - Sat : 10:00 AM - 8:00 PM</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT FORM -->

            <div class="col-lg-7">

                <div class="contact-form">

                    <h2>Send A Message</h2>

                    <form>

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" placeholder="Your Name" required> 
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="tel" class="form-control" placeholder="Phone Number" required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" placeholder="Interested Vehicle" required>
                            </div>

                            <div class="col-12 mb-4">
                                <textarea class="form-control" rows="6"
                                    placeholder="Your Message" required></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="contact-btn">
                                    Book Consultation
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- MAP -->

<section class="map-section">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.422860530539!2d77.00694667428508!3d28.436666692950475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d17e8bfffffff%3A0xdb108da17afb495b!2sBig%20Boy%20Toyz!5e0!3m2!1sen!2sin!4v1780559712544!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>



<!-- Footer linked PHP -->

<?php

include "include/footer.php";

?>

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>