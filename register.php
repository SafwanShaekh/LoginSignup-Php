<?php
include('dbconfig.php');
include('template.php');
?>
<!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        The best offer <br />
                        <span class="text-primary">for your business</span>
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                        quibusdam tempora at cupiditate quis eum maiores libero
                        veritatis? Dicta facilis sint aliquid ipsum atque?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <form action="" method="POST">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <!-- USERNAME input -->
                                <div class="form-outline mb-4">
                                    <input type="text" name="username" id="form3Example3" class="form-control" />
                                    <label class="form-label" for="form3Example3">Username</label>
                                </div> 
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="form3Example3" class="form-control" />
                                    <label class="form-label" for="form3Example3">Email Address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="form3Example4" class="form-control" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                    <label class="form-check-label" for="form2Example33">
                                        Subscribe to our newsletter
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" name="register" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or sign up with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

<?php
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = "INSERT INTO `users`( `user_name`, `user_email`, `user_pwd`) VALUES ('$username','$email','$password')";
        $result = $dbconn->query($insert);

        if($result == false){
            ?>
            <script>
                window.alert('An error occurred, Please try again');
                window.location.assign("./register.php");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                window.alert('Thankyou for Registering!!! You can now Login');
                window.location.assign("./login.php");
            </script>
            <?php
        }
    }
?>