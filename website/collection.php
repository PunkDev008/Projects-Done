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
<p>
    The Ford Mustang GT is an icon of American muscle, combining bold design
    with exhilarating performance. Powered by a 5.0L V8 engine producing
    480 horsepower, it accelerates with thrilling speed and delivers an
    unforgettable driving experience on both city streets and open highways.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>

         </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/M4.png" alt="BMW">
                    <div class="car-content">
                        <h4>BMW M4 Competition</h4>
<p>
  Powered by a 3.0L twin-turbocharged inline-six engine producing 503 horsepower,
  it accelerates from 0-100 km/h in just 3.5 seconds. The M4 Competition delivers
  exceptional performance,dynamic handling, and an exhilarating driving experience on every road.
</p>
                            <a href="contact.php" class="car-btn">Book Now</a>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/Cadillac.png" alt="Cadillac escalade">
                    <div class="car-content">
                       <h4>Cadillac Escalade</h4>
<p>
    The Cadillac Escalade is the ultimate luxury SUV, combining bold design,
    premium comfort, and powerful performance. Powered by a 6.2L V8 engine
    producing 420 horsepower, it delivers a smooth and commanding driving
    experience while offering world-class technology, spacious interiors,
    and unmatched road presence.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
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
                       <h4>Mercedes-AMG GT</h4>
<p>
    The Mercedes-AMG GT is a masterpiece of performance and luxury, blending
    striking design with exhilarating power. Powered by a handcrafted 4.0L
    twin-turbo V8 engine producing up to 577 horsepower, it accelerates from
    0-100 km/h in just 3.2 seconds. The AMG GT delivers exceptional speed,
    precision handling, and an unforgettable driving experience on every journey.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/lambo.png" alt="Lamborgini">
                    <div class="car-content">
                        <h4>Lamborghini Huracán</h4>
<p>
    The Lamborghini Huracán is a stunning supercar that combines breathtaking
    design with extraordinary performance. Powered by a naturally aspirated
    5.2L V10 engine producing up to 631 horsepower, it accelerates from
    0-100 km/h in just 2.9 seconds. The Huracán delivers thrilling speed,
    razor-sharp handling, and an unforgettable driving experience that
    embodies the spirit of Lamborghini.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/porsches.png" alt="Porsche">
                    <div class="car-content">
                    <h4>Porsche 911 Turbo S</h4>
<p>
    The Porsche 911 Turbo S is a perfect blend of luxury, precision, and
    breathtaking performance. Powered by a 3.8L twin-turbocharged flat-six
    engine producing 640 horsepower, it accelerates from 0-100 km/h in just
    2.7 seconds.the 911 Turbo S delivers an exhilarating driving experience on
    both road and track.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/Laferrari.png" alt="La Ferrari">
                    <div class="car-content">
                        <h4>Ferrari LaFerrari</h4>
<p>
    The Ferrari LaFerrari is a masterpiece of innovation and performance,
    powered by a 6.3L V12 engine combined with HY-KERS hybrid technology,producing an incredible 950 horsepower. LaFerrari accelerates from 0-100 km/h in under 3 seconds.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/corvett.png" alt="Corvett C8">
                    <div class="car-content">
<h4>Chevrolet Corvette C8</h4>
<p>
  The Chevrolet Corvette C8 redefines American performance with its bold
  mid-engine design and exceptional power. Equipped with a 6.2L V8 engine
  producing 495 horsepower, it accelerates from 0-100 km/h in just 2.9
  seconds.The Corvette C8 speed, precise handling,and an exhilarating driving experience at every turn.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/maserati.png" alt="Maserati MC 30">
                    <div class="car-content">
                      <h4>Maserati MC20</h4>
<p>
    The Maserati MC20 is a breathtaking Italian supercar that combines
    cutting-edge technology with elegant design. Powered by a 3.0L twin-turbo
    V6 Nettuno engine producing 621 horsepower, it accelerates from 0-100 km/h
    in just 2.9 seconds. The MC20 delivers exceptional performance, remarkable
    agility, and a thrilling driving experience.</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/R8.png" alt="Audi R8">
                    <div class="car-content">
                       <h4>Audi R8</h4>
<p>
    The Audi R8 is a legendary supercar that blends everyday usability with
    extraordinary performance. Powered by a naturally aspirated 5.2L V10
    engine producing up to 602 horsepower, it accelerates from 0-100 km/h
    in just 3.1 seconds. The R8 delivers thrilling speed, precise handling,
    and an exhilarating driving experience wrapped in Audi's signature luxury
    and innovation.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>
            
             <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/mac750s.png" alt="Maclaren">
                    <div class="car-content">
                        <h4>McLaren 750S</h4>
<p>
    The McLaren 750S is a remarkable supercar that pushes the boundaries of
    performance and innovation. Powered by a 4.0L twin-turbocharged V8 engine
    producing 740 horsepower, it accelerates from 0-100 km/h in just 2.8
    seconds. The 750S delivers exceptional speed, razor-sharp handling, and
    an exhilarating driving experience that embodies McLaren's racing DNA and
    engineering excellence.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/G63.png" alt="Mercedes G-63">
                    <div class="car-content">
                        <h4>Mercedes-Benz G63 AMG</h4>
<p>
    The Mercedes-Benz G63 AMG is an iconic luxury SUV that combines rugged
    capability with extraordinary performance. Powered by a handcrafted 4.0L
    twin-turbo V8 engine producing 577 horsepower, it accelerates from
    0-100 km/h in just 4.5 seconds. The G63 AMG delivers commanding road
    presence, premium comfort, and exhilarating power both on and off the road.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/rangerover.png" alt="Range Rover">
                    <div class="car-content">
                        <h4>Range Rover Sport SV</h4>
<p>
    The Range Rover Sport SV combines breathtaking performance with luxurious
    comfort. Powered by a 4.4L twin-turbo V8 engine producing 626 horsepower,
    it accelerates from 0-100 km/h in just 3.8 seconds. With dynamic handling,
    cutting-edge technology, and iconic British craftsmanship, it delivers an
    extraordinary driving experience on any terrain.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>
            
                  <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/benz.png" alt="Ban-z">
                    <div class="car-content">
<h4>Mercedes-AMG GT 63 S E Performance</h4>
<p>
    The Mercedes-AMG GT 63 S E Performance is a groundbreaking hybrid super sedan
    that combines luxury with extreme performance. Powered by a 4.0L twin-turbo
    V8 engine and an advanced electric motor, it produces an incredible 831
    horsepower. Accelerating from 0-100 km/h in just 2.9 seconds.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>

      <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/GLS600.png" alt="GLS600">
                    <div class="car-content">
 <h4>Mercedes-Maybach GLS 600</h4>
<p>
    The Mercedes-Maybach GLS 600 is the pinnacle of luxury SUV excellence,
    combining unparalleled comfort with powerful performance. Powered by a
    4.0L twin-turbo V8 engine with EQ Boost technology producing 550 horsepower,
    it accelerates from 0-100 km/h in just 4.9 seconds. The GLS 600 delivers
    first-class luxury.</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                </div>
            </div>



<div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/M1000rr.png" alt="Bmw M1000rr">
                    <div class="car-content">
     <div class="car-content">
    <h4>BMW M1000RR</h4>
    <p>
        The BMW M 1000 RR is a high-performance superbike.It is powered by a 999cc inline-4 engine derived from BMW’s World Superbike,producing around 212 horsepower at 14,500 rpm. Lightweight carbon components and advanced aerodynamics,the M 1000 RR can accelerate from 0-100 km/h in just about 3.1 seconds and reach a top speed of over 300 km/h.
    </p>              

    <a href="contact.php" class="car-btn">Book Now</a>
                        </div>
                     
                    </div>
                    </div>
                </div>


<div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/Hondacbr.png" alt="Honda CBR1000RR-R">
                    <div class="car-content">
     <div class="car-content">
  <h4>Honda CBR1000RR-R Fireblade</h4>
<p>
The Honda CBR1000RR-R Fireblade is a 999cc inline-4 superbike producing around 215 horsepower, designed with MotoGP engineering influence. It accelerates from 0-100 km/h in about 3.0 seconds and reaches over 300 km/h top speed.
</p>      

    <a href="contact.php" class="car-btn">Book Now</a>
                        </div>
                     
                    </div>
                    </div>
                </div>


                
<div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/Ducati.png" alt="Ducati Panegle V4">
                    <div class="car-content">
     <div class="car-content">
    <h4>Ducati Panegale V4</h4>
    <p>
The Ducati Panigale V4 is a 1,103cc V4 superbike producing around 215 hp, built with MotoGP-inspired technology for extreme performance. It accelerates from 0-100 km/h in about 2.9 seconds and delivers over 300 km/h top speed with advanced aerodynamics and racing electronics.
</p>        

    <a href="contact.php" class="car-btn">Book Now</a>
                        </div>
                     
                    </div>
                    </div>
                </div>


                
             <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/S1000rr.png" alt="Bmw S1000rr">
                    <div class="car-content">
                        <h4>BMW S1000RR</h4>
                        <p>
    The BMW S1000RR is a high-performance superbike engineered for extreme speed and precision. It is powered by a 999cc inline 4-cylinder engine that produces around 205 horsepower. This bike can accelerate from 0–100 km/h in just about 3.0 seconds and reaches a top speed of approximately 299 km/h.</p>
                        <a href="contact.php" class="car-btn">Book Now</a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/R1.png" alt="Yamaha R1">
                    <div class="car-content">
     <div class="car-content">
    <h4>Yamaha R1</h4>
    <p>
The Yamaha YZF-R1 is a 998cc inline-4 superbike inspired by MotoGP technology, producing around 200 horsepower. It delivers explosive acceleration, reaching 0-100 km/h in about 3 seconds and a top speed of over 300 km/h, with advanced electronics and race-focused aerodynamics for ultimate track performance.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                        </div>
                     
                    </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                <div class="car-card">
                    <img src="assets/img/10r.png" alt="Kawasaki Ninja ZX10R">
                    <div class="car-content">
     <div class="car-content">
    <h4>Kawasaki Ninja ZX10R</h4>
   <p>
The Kawasaki Ninja ZX-10R is a 998cc inline-4 superbike producing around 203 horsepower, built for World Superbike performance. It accelerates from 0-100 km/h in about 3.1 seconds and can exceed 300 km/h top speed, offering aggressive power delivery, advanced electronics, and race-proven handling.
</p>    

    <a href="contact.php" class="car-btn">Book Now</a>
                        </div>
                     
                    </div>
                    </div>
                </div>

                
    <div class="col-lg-4 col-md-6">
       <div class="car-card">
          <img src="assets/img/Z1000.jpg" alt="Kawasaki Ninja Z1000">
                 <div class="car-content">
     <div class="car-content">
   <h4>Kawasaki Z1000</h4>
<p>
The Kawasaki Z1000 is a 1,043cc inline-4 naked bike producing around 142 horsepower, known for its aggressive street performance and torque-rich delivery. It accelerates strongly in low and mid-range speeds, offering a raw riding experience with sharp styling and excellent urban as well as highway performance.
</p> 

    <a href="contact.php" class="car-btn">Book Now</a>
                        </div>
                     
                    </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6">
       <div class="car-card">
          <img src="assets/img/M1000r.png" alt=" BMW M1000R">
                 <div class="car-content">
     <div class="car-content">

<h4>BMW M1000R</h4>
<p>
The BMW M 1000 R is a high-performance hyper-naked bike powered by a 999cc inline-4 engine producing around 210 horsepower. It delivers extreme acceleration, reaching 0-100 km/h in about 3.2 seconds, and combines superbike-level power with street-focused agility, advanced electronics, and aggressive M performance styling.
</p>

    <a href="contact.php" class="car-btn">Book Now</a>
                        </div>
                     
                    </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6">
       <div class="car-card">
          <img src="assets/img/CB1000r.png" alt="Honda CB1000">
                 <div class="car-content">
     <div class="car-content">
   <h4>Honda CB1000R</h4>
<p>
The Honda CB1000R is a 998cc inline-4 neo-sports café naked bike producing around 143 horsepower, offering smooth yet aggressive performance. It delivers strong acceleration, refined power delivery, and a perfect balance of street comfort and sporty riding dynamics with premium build quality.
</p>
    <a href="contact.php" class="car-btn">Book Now</a>
                        </div>
                     
                    </div>
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