<?php
session_start();
include "../../Backend/logic/header.php";
include "../../Backend/logic/session_status.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="../../Frontend/Bilder/123.png">
    <meta charset="UTF-8">
    <title>Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../CSS/registration.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="container">
    <section class="vh-100 gradient-custom">
        <form method="post" action="../../Backend/config/insert_user.php">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card text-white" style="border-radius: 0rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase text-white">Registration</h2>
                                    <p class="text-white-50 mb-5">Please enter your credentials!</p>
                                    <div class="form-row">
                                        
                                    <div class="form-group col-md-6">
    <label for="anrede"> Your Gender:</label>
    <select class="form-control" id="anrede" name="anrede" required>
        <option value="" disabled selected>Select: </option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Divers">Other</option>
    </select>
</div>


                                        <div class="form-group col-md-6">
                                            <label for="firstname">Your First Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" required minlength="2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lastname">Your Last Name</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" required minlength="2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="username">Your Username</label>
                                            <input type="text" class="form-control" id="username" name="username" required minlength="3">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="useremail" name="useremail" required minlength="8">
                                    </div>

                                    <hr> 

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" required placeholder="1234 Main St">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city" required>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="zip">State</label>
                                            <input type="text" class="form-control" id="state" name="state" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="zip">Zip</label>
                                        <input type="number" class="form-control" id="zip" name="zip" required>
                                    </div>
                                  
                                    <hr>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="password1">Enter Password</label>
                                            <input type="password" class="form-control" id="password1" name="password1" required minlength="8">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password2">Re-enter Password</label>
                                            <input type="password" class="form-control" id="password2" name="password2" required minlength="8">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      
                                    <hr> 

                                    <button type="submit" name="submit" class="btn btn-success btn-lg px-5">Register</button>
                                    <button type="reset" class="btn btn-danger btn-lg px-5">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>
