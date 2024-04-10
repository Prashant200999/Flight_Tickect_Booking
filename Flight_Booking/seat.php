<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();
if(!isset($_SESSION['user_details']))
{
    header("Location:http://localhost/Flight_Booking/index.php?authorised=0");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

    <title>Seat_Selection</title>
</head>
<style>
    .cock_pit {
        width: auto;
        height: 15%;
        background-color: aqua;
        border: 1px solid black;
        margin-top: 30px;
        border-radius: 30%;
    }

    .pad_0 {
        padding: 0;
    }

    .seat {
        margin-right: 3px;
        width: 0px;
        height: 50px;
        background-color: aliceblue;
        border: 1px solid black;
        border-radius: 25%;
        text-align: center;
        color: black;
    }

    .occupied {
        margin-right: 3px;
        width: 0px;
        height: 50px;
        background-color: grey;
        border: 1px solid black;
        border-radius: 25%;
        text-align: center;
    }
</style>

<body>



    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid ">
            <img src="logo.jpg" id="logo" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    <h1 class="w3-container w3-center w3-animate-opacity" style="margin-left: 20px; ">WELCOME TO FRESH AIRWAYS</h1>
                    <a href="logout.php" style="margin-left: 200px;" class="btn btn-outline-danger">Log Out</a>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">

            <div class="container col-7">

                <div class="cock_pit text-center">
                    <h3 class="mt-3">CockPit</h3>
                </div>

                <div class="container mt-4">
                    <div class="row mt-2">
                        <div class="btn btn-secondary col pad_0 seat">a1</div>
                        <div class="btn btn-secondary col pad_0 seat">a2</div>
                        <div class="btn btn-secondary col pad_0 seat">a3</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">a4</div>
                        <div class="btn btn-secondary col pad_0 seat">a5</div>
                        <div class="btn btn-secondary col pad_0 seat">a6</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">a7</div>
                        <div class="btn btn-secondary col pad_0 seat">a8</div>
                        <div class="btn btn-secondary col pad_0 seat">a9</div>
                    </div>

                    <div class="row mt-2">
                        <div class="btn btn-secondary col pad_0 seat">b1</div>
                        <div class="btn btn-secondary col pad_0 seat">b2</div>
                        <div class="btn btn-secondary col pad_0 seat">b3</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">b4</div>
                        <div class="btn btn-secondary col pad_0 seat">b5</div>
                        <div class="btn btn-secondary col pad_0 seat">b6</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">b7</div>
                        <div class="btn btn-secondary col pad_0 seat">b8</div>
                        <div class="btn btn-secondary col pad_0 seat">b9</div>
                    </div>

                    <div class="row mt-2">
                        <div class="btn btn-secondary col pad_0 seat">c1</div>
                        <div class="btn btn-secondary col pad_0 seat">c2</div>
                        <div class="btn btn-secondary col pad_0 seat">c3</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">c4</div>
                        <div class="btn btn-secondary col pad_0 seat">c5</div>
                        <div class="btn btn-secondary col pad_0 seat">c6</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">c7</div>
                        <div class="btn btn-secondary col pad_0 seat">c8</div>
                        <div class="btn btn-secondary col pad_0 seat">c9</div>
                    </div>

                    <div class="row mt-2">
                        <div class="btn btn-secondary col pad_0 seat">d1</div>
                        <div class="btn btn-secondary col pad_0 seat">d2</div>
                        <div class="btn btn-secondary col pad_0 seat">d3</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">d4</div>
                        <div class="btn btn-secondary col pad_0 seat">d5</div>
                        <div class="btn btn-secondary col pad_0 seat">d6</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">d7</div>
                        <div class="btn btn-secondary col pad_0 seat">d8</div>
                        <div class="btn btn-secondary col pad_0 seat">d9</div>
                    </div>
                    <div class="row mt-2">
                        <div class="btn btn-secondary col pad_0 seat">e1</div>
                        <div class="btn btn-secondary col pad_0 seat">e2</div>
                        <div class="btn btn-secondary col pad_0 seat">e3</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">e4</div>
                        <div class="btn btn-secondary col pad_0 seat">e5</div>
                        <div class="btn btn-secondary col pad_0 seat">e6</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">e7</div>
                        <div class="btn btn-secondary col pad_0 seat">e8</div>
                        <div class="btn btn-secondary col pad_0 seat">e9</div>
                    </div>
                    <div class="row mt-2">
                        <div class="btn btn-secondary col pad_0 seat">f1</div>
                        <div class="btn btn-secondary col pad_0 seat">f2</div>
                        <div class="btn btn-secondary col pad_0 seat">f3</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">f4</div>
                        <div class="btn btn-secondary col pad_0 seat">f5</div>
                        <div class="btn btn-secondary col pad_0 seat">f6</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">f7</div>
                        <div class="btn btn-secondary col pad_0 seat">f8</div>
                        <div class="btn btn-secondary col pad_0 seat">f9</div>
                    </div>
                    <div class="row mt-2">
                        <div class="btn btn-secondary col pad_0 seat">g1</div>
                        <div class="btn btn-secondary col pad_0 seat">g2</div>
                        <div class="btn btn-secondary col pad_0 seat">g3</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">g4</div>
                        <div class="btn btn-secondary col pad_0 seat">g5</div>
                        <div class="btn btn-secondary col pad_0 seat">g6</div>
                        <div class="col pad_0"></div>
                        <div class="btn btn-secondary col pad_0 seat">g7</div>
                        <div class="btn btn-secondary col pad_0 seat">g8</div>
                        <div class="btn btn-secondary col pad_0 seat">g9</div>
                    </div>
                </div>

            </div>



            <div class="col card" style=" margin-top: 30px;">
             
                <ul class="mt-4">
                    <li>Selected:
                        <span name="seat" id="selected" ></span>
                    </li>

                    <li>Amount: 
                        INR <span name="amount" id="total" ></span>
                    </li>
                </ul>
           
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Book Tickets
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Are you sure to confirm?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="confirmed_ticket.php" class="btn btn-primary">Confirm</a>
                            </div>
                            </div>
                        </div>
                        </div>
                                

            </div>
        </div>

    </div>
    
   <script src="script.js"></script>
   <script>
        (() => {
            'use strict'

         
            const forms = document.querySelectorAll('.needs-validation')

   
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