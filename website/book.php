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


<div class="contact-form">

    <h2>Book Your Dream Car</h2>

    <form>

        <div class="row">

            <div class="col-md-6 mb-4">
                <input type="text" class="form-control" placeholder="Full Name">
            </div>

            <div class="col-md-6 mb-4">
                <input type="tel" class="form-control" placeholder="Phone Number">
            </div>

            <div class="col-md-6 mb-4">
                <input type="email" class="form-control" placeholder="Email Address">
            </div>

            <div class="col-md-6 mb-4">
                <input type="text" class="form-control" placeholder="City">
            </div>

            <!-- Select Car -->

            <div class="col-md-6 mb-4">
                <select class="form-control">
                    <option selected disabled>Select Your Car</option>
                    <option>Ferrari LaFerrari</option>
                    <option>Lamborghini Huracán</option>
                    <option>McLaren 750S</option>
                    <option>Porsche 911 Turbo S</option>
                    <option>BMW M4 Competition</option>
                    <option>Audi R8</option>
                    <option>Mercedes AMG GT</option>
                    <option>Range Rover</option>
                    <option>G63 AMG</option>
                </select>
            </div>

            <!-- Budget -->

            <div class="col-md-6 mb-4">
                <select class="form-control">
                    <option selected disabled>Budget Range</option>
                    <option>₹50L - ₹1Cr</option>
                    <option>₹1Cr - ₹2Cr</option>
                    <option>₹2Cr - ₹5Cr</option>
                    <option>₹5Cr+</option>
                </select>
            </div>

            <!-- Color -->

            <div class="col-md-6 mb-4">
                <input type="text" class="form-control"
                    placeholder="Preferred Color">
            </div>

            <!-- Test Drive -->

            <div class="col-md-6 mb-4">
                <input type="date" class="form-control">
            </div>

            <!-- Message -->

            <div class="col-12 mb-4">
                <textarea class="form-control" rows="5"
                    placeholder="Tell us about your requirements..."></textarea>
            </div>

            <div class="col-6 d-flex justify-content-center">
                <button type="submit" class="contact-btn">
                    Reserve My Car
                </button>
            </div>


            <div class="col-6 d-flex justify-content-end">
                <a href="index.php "class="contact-btn">
                   Back to Home
                </a> 
            </div> 

        </div>

    </form>

</div>





<!-- Footer linked PHP -->

<?php

include "include/footer.php";

?>

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>
