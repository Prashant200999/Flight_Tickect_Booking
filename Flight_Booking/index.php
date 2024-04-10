<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'dbhelper.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Fresh Airways_Login</title>
</head>

<body>



    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid ">
                <img src="logo.jpg" id="logo" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Contact Us
                            </a>


                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="mailto:indiaprashant99@gmail.com">Ask on Email</a>
                                </li>
                                <li><a class="dropdown-item" href="tel:+917011112510">Call Me</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="tel:+919810972163">Join on Whatsapp</a></li>
                            </ul>

                            
                        </li>
                        <li><h1 class="w3-container w3-center w3-animate-opacity text-center">WELCOME TO FRESH AIRWAYS</h1></li>
                    </ul>
                </div>
            </div>
        </nav>
                


        <?php 
                if(isset($_GET['authorised']) && $_GET['authorised'] == 0)
                {
                    echo "<strong>Enter email id & password!</strong>";
                } 
            ?>
       

        <section class="vh-100">
            <div class="h-custom bg_image">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5 "></div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form  action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Flight_Booking/authorisation.php" method="post" class="needs-validation" novalidate>

                            <!-- Email input -->
                            <div class="form-outline mb-4 mt-4">
                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                    placeholder="Enter a valid email address" />

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" id="password" name="upassword" class="form-control form-control-lg"
                                    placeholder="Enter password" />

                            </div>

                            

                            <div class="text-center text-lg-start mt-4 pt-2">

                                <button type="submit" class="btn btn-primary btn-lg mb-4" style="padding-left: 2.5rem; padding-right: 2.5rem; " >Login</button>

                                <a href="Registration.php" class="btn btn-outline-primary btn-lg mb-4"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem; ">Register</a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div
                class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                <div class="text-white mb-3 mb-md-0 ">
                    Copyright © 2020. All rights reserved.
                </div>
            </div>
        </section>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>