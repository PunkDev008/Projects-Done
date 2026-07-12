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
        <h5>Feel the Roar of a Legend</h5>
        <p>Powered by precision engineering and iconic design, the Mustang delivers thrilling speed, dynamic handling, and an unforgettable driving experience..</p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="1000">
      <img src="assets/img/slider2.png" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>The Supra Feel the Thrill of Pure Performance</h5>
        <p>Every curve, every detail, and every horsepower is crafted to create an unforgettable journey. Discover the legendary power of the Toyota Supra.</p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="1000">
      <img src="assets/img/slider3.png" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5><h5>The BMW Ultimate Driving Machine</h5></h5>
        <p>Feel the perfect balance of luxury, power, and innovation designed to elevate every journey.</p>
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

<!-- Car Showcase -->


<section class="car-showcase py-5">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Premium Collection</h2>
            <p>Explore Luxury, Performance & Elegance</p>
        </div>

        <!-- Row 1 -->
        <div class="row g-4 mb-4">

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/ford.png" alt="Mustang">
                    <div class="car-content">
                        <h4>Ford Mustang GT</h4>
                        <p>5.0L V8 Engine with breathtaking performance and iconic styling.</p>
                        <a href="collection.php" class="car-btn">View Details</a>
                        <a href="contact.php" class="car-btn">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/M4.png" alt="BMW">
                    <div class="car-content">
                        <h4>BMW M4</h4>
                        <p>Luxury meets power with advanced technology and aggressive design.</p>
                        <a href="collection.php" class="car-btn">View Details</a>
                        <a href="contact.php" class="car-btn">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/Cadillac.png" alt="Cadillac escalade">
                    <div class="car-content">
                       <h4>Cadillac Escalade</h4>
<p>A luxury full-size SUV that combines bold design, advanced technology, and exceptional comfort for every journey.</p>
                        <a href="collection.php" class="car-btn">View Details</a>
                        <a href="contact.php" class="car-btn">Buy Now</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Row 2 -->
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/mercedes.png" alt="Mercedes">
                    <div class="car-content">
                        <h4>Mercedes AMG GT</h4>
                        <p>Unmatched luxury with race-inspired engineering and elegance.</p>
                        <a href="collection.php" class="car-btn">View Details</a>
                        <a href="contact.php" class="car-btn">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/lambo.png" alt="Lamborghini">
                    <div class="car-content">
                        <h4>Lamborghini Huracan</h4>
                        <p>Pure supercar performance with stunning Italian craftsmanship.</p>
                        <a href="collection.php" class="car-btn">View Details</a>
                        <a href="contact.php" class="car-btn">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/porsches.png" alt="Porsche">
                    <div class="car-content">
                        <h4>Porsche 911 Turbo</h4>
                        <p>Precision engineering delivering thrilling speed and control.</p>
                        <a href="collection.php" class="car-btn">View Details</a>
                        <a href="contact.php" class="car-btn">Buy Now</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>










<!-- Footer linked PHP -->

<?php

include "include/footer.php";

?>

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>