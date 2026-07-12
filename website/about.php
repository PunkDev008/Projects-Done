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

<!--Our Story Sections-->

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <img src="assets/img/story.png" class="img-fluid rounded-4">
            </div>

            <div class="col-lg-6">
                <h2>Our Story</h2>

                <p>
                    Founded with a passion for luxury automobiles, Big Boy Toy has
                    become a trusted destination for car enthusiasts seeking the
                    finest collection of premium and exotic vehicles.
                </p>

                <p>
                    Over the years, we have built a reputation for excellence,
                    transparency, and customer satisfaction, helping thousands of
                    clients find their dream cars.
                </p>

                <p>
                    From supercars and sports cars to luxury SUVs and collector
                    editions, our inventory represents the best automotive brands
                    from around the world.
                </p>
            </div>

        </div>
    </div>
</section>



<!--Why Chosse us-->


<section class="py-5 bg-dark text-white">

    <div class="container">

        <div class="text-center mb-5">
            <h2>Why Choose BBT</h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4">
                <div class="p-4 border rounded">
                    <h4>Premium Collection</h4>
                    <p>
                        Access to the world's most prestigious luxury and
                        performance automobiles.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="p-4 border rounded">
                    <h4>Verified Vehicles</h4>
                    <p>
                        Every vehicle undergoes rigorous inspection and quality
                        assurance checks.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="p-4 border rounded">
                    <h4>Expert Guidance</h4>
                    <p>
                        Professional consultants helping you make the perfect
                        automotive investment.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>



<!-- Static Section -->


<section class="py-5">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">
                <h2>500+</h2>
                <p>Luxury Cars</p>
            </div>

            <div class="col-md-3">
                <h2>10K+</h2>
                <p>Happy Clients</p>
            </div>

            <div class="col-md-3">
                <h2>15+</h2>
                <p>Years Experience</p>
            </div>

            <div class="col-md-3">
                <h2>50+</h2>
                <p>Global Brands</p>
            </div>

        </div>

    </div>

</section>


<!-- Feature of brand -->
<section class="py-5 bg-black text-white">
    <div class="container">

        <div class="text-center mb-5">
            <h2>Luxury Brands We Offer</h2>
        </div>

        <div class="row text-center g-4">

            <!-- Ferrari -->
            <div class="col-lg-3">
                <img src="https://commons.wikimedia.org/wiki/File:Ferrari-badge.jpg" class="img-fluid mb-2" style="height:60px;">
                <p>Ferrari</p>
            </div>

            <!-- Lamborghini -->
            <div class="col-lg-3">
                <img src="https://upload.wikimedia.org/wikipedia/en/9/92/Lamborghini_Logo.svg" class="img-fluid mb-2" style="height:60px;">
                <p>Lamborghini</p>
            </div>

            <!-- Porsche -->
            <div class="col-lg-3">
                <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Porsche_logo.svg" class="img-fluid mb-2" style="height:60px;">
                <p>Porsche</p>
            </div>

            <!-- McLaren -->
            <div class="col-lg-3">
                <img src="https://upload.wikimedia.org/wikipedia/en/6/66/McLaren_Racing_logo.svg" class="img-fluid mb-2" style="height:60px;">
                <p>McLaren</p>
            </div>

            <!-- BMW -->
            <div class="col-lg-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" class="img-fluid mb-2" style="height:60px;">
                <p>BMW</p>
            </div>

            <!-- Mercedes -->
            <div class="col-lg-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Mercedes-Logo.svg" class="img-fluid mb-2" style="height:60px;">
                <p>Mercedes-Benz</p>
            </div>

            <!-- Audi -->
            <div class="col-lg-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Audi_logo.svg" class="img-fluid mb-2" style="height:60px;">
                <p>Audi</p>
            </div>

            <!-- Range Rover -->
            <div class="col-lg-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Land_Rover_logo_black.svg" class="img-fluid mb-2" style="height:60px;">
                <p>Range Rover</p>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials Section -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">
            <h2>What Our Clients Say</h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4">
                <div class="border p-4 rounded">
                    <p>
                        "Exceptional service and an incredible selection of
                        luxury vehicles."
                    </p>
                    <h5>- Rahul Sharma</h5>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="border p-4 rounded">
                    <p>
                        "The entire buying experience was seamless and highly
                        professional."
                    </p>
                    <h5>- Vikram Mehta</h5>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="border p-4 rounded">
                    <p>
                        "I found my dream Ferrari thanks to the amazing BBT team."
                    </p>
                    <h5>- Arjun Kapoor</h5>
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