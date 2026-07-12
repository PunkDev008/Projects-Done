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




<section class="login-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-5 col-md-8">

                <div class="login-card">

                    <div class="login-header">

                        <img src="assets/img/logo.png" alt="Logo" class="login-logo">

                        <h2>Welcome Back</h2>

                        <p>
                            Sign in to access your luxury vehicle dashboard.
                        </p>

                    </div>

                    <form>

                        <div class="mb-4">
                            <input type="email"
                                class="form-control"
                                placeholder="Email Address" required>
                        </div>

                        <div class="mb-4">
                            <input type="password"
                                class="form-control"
                                placeholder="Password" required>
                        </div>

                        <div class="login-options">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" required>
                                <label class="form-check-label">
                                    Remember Me
                                </label>
                            </div>

                            <a href="#">Forgot Password?</a>

                        </div>

                        <button type="submit" class="login-btn">
                            Login
                        </button>

                        <div class="register-link">
                            Don't have an account?
                            <a href="register.php">Create Account</a>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>





<?php

include "include/footer.php";

?>

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>
