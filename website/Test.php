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

    <div class="form-header">

        <span class="booking-tag">
            PREMIUM EXPERIENCE
        </span>

        <h2>Book Your Test Drive</h2>

        <p class="booking-text">
            Experience the thrill before you buy. Select your dream car,
            choose a convenient date, and schedule your exclusive test drive.
        </p>

    </div>

    <form>

        <div class="row">

            <!-- Personal Details -->

            <div class="col-md-6 mb-4">
                <input type="text" class="form-control"
                    placeholder="Full Name *" required>
            </div>

            <div class="col-md-6 mb-4">
                <input type="tel" class="form-control"
                    placeholder="Phone Number *" required>
            </div>

            <div class="col-md-6 mb-4">
                <input type="email" class="form-control"
                    placeholder="Email Address *" required>
            </div>

            <div class="col-md-6 mb-4">
                <input type="text" class="form-control"
                    placeholder="City *" required>
            </div>

            <!-- Vehicle Selection -->

            <div class="col-md-6 mb-4">
                <select class="form-control" required>
                    <option selected disabled>Select Vehicle</option>
                    <option>Ferrari LaFerrari</option>
                    <option>Lamborghini Huracán</option>
                    <option>McLaren 750S</option>
                    <option>Porsche 911 Turbo S</option>
                    <option>BMW M4 Competition</option>
                    <option>Audi R8</option>
                    <option>Mercedes AMG GT</option>
                    <option>Range Rover</option>
                    <option>Mercedes G63 AMG</option>
                </select>
            </div>

            <!-- Driving Experience -->

            <div class="col-md-6 mb-4">
                <select class="form-control" required>
                    <option selected disabled>Driving Experience</option>
                    <option>Beginner</option>
                    <option>Intermediate</option>
                    <option>Experienced</option>
                </select>
            </div>

            <!-- Date -->

            <div class="col-md-6 mb-4">
                <input type="date" class="form-control" required>
            </div>

            <!-- Time -->

            <div class="col-md-6 mb-4">
                <select class="form-control" required >
                    <option selected disabled>Select Time Slot</option>
                    <option>10:00 AM</option>
                    <option>11:00 AM</option>
                    <option>12:00 PM</option>
                    <option>02:00 PM</option>
                    <option>03:00 PM</option>
                    <option>04:00 PM</option>
                    <option>05:00 PM</option>
                </select>
            </div>

            <!-- Requirements -->

            <div class="col-12 mb-4">
                <textarea class="form-control" rows="5"
                    placeholder="Special Requirements (Optional)"></textarea>
            </div>

            <!-- Terms -->

            <div class="col-12 mb-4">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required>

                    <label class="form-check-label">
                        I agree to be contacted regarding my test drive booking.
                    </label>
                </div>

            </div>

            <!-- Button -->

            <div class="col-12">
                <button type="submit" class="contact-btn">
                    Schedule Test Drive
                </button>
            </div>

        </div>

    </form>

</div>


<?php

include "include/footer.php";

?>

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>
