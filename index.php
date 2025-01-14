<?php
include("process/login_process.php");

include("process/signup_process.php");

?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Net-Worth Calculator</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <!-- Sign-in page -->
        <nav
            class="navbar navbar-light"
            style="background-color: rgb(38, 155, 120)"
        >
            <span>
                <img
                    src="https://res.cloudinary.com/izik4004/image/upload/v1569344486/Group.png"
                    alt="logo"
                    style="width: 90px; height: 30px"
                    id="logo-img"
                />
            </span>
        </nav>
        <div class="container-fluid">
            <div
                class="row pt-2 float-sm-left"
                style="min-height: 100vh;"
                id="page"
            >
                <div class="col col-md-6 align-self-center text-center">
                    <h3
                        class="h1 font-weight-bolder"
                        style="color:  rgb(38, 155, 120); text-shadow: -1px 1px 2px black;"
                    >
                        Knowing your Net-Worth is important
                    </h3>
                    <p>
                        Your net worth isn't about your income your income
                        doesn't even factor into your net worth. Instead net
                        worth includes savings, investments and debts.<br />
                        Think about it this way: If you make $30,000 per
                        year,but you have investments portfolio worth $3.5
                        million, you're going to be more concerned about your
                        total net worth because the $30,000 salary you make is a
                        very small part of your financial situation.
                    </p>
                    <h3 class="h1 text-dark font-weight-bolder">
                        You're a step away from knowing how to calculate your
                        Net-Worth
                    </h3>
                    <a href="#page1">
                        <h3
                            class="h3 font-weight-bolder"
                            style="color:  rgb(38, 155, 120)"
                        >
                            Sign up with us for free
                        </h3></a
                    >
                </div>
                <div
                    class="row  p-5 align-self-center m-auto bor col-md-5 mb-5"
                    style="min-height: 50vh;background-color: rgb(14, 34, 56);box-shadow:  -10px  5px 10px gray;"
                >
                    <div
                        class=" align-self-center text-center pb-5 col-md-12"
                        id="page1"
                    >
                        <div class="row">
                            <a
                                href="#"
                                class=" p-2 text-light col-6 bg"
                                id="signUpLink"
                                >Sign up</a
                            >
                            <a
                                href="#"
                                class="bg-secondary p-2 text-light col-6"
                                id="signInLink"
                                >Sign in</a
                            >
                        </div>

                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="signUp" method="post">
                            <h5 class="text-light h5 mt-4">Sign up for free</h5>
                            <div class="row">
                                <div class="col">
                                <div role="alert"></div>
                                   <small style="color:red; font-size:12px"> <?php echo $first_name_error; ?></small>
								   <br><small style="color:red; font-size:12px"> <?php echo $last_name_error; ?></small>
                                    <div class="row">
                                        <div class="form-inline col-md-6">
                                            <input
                                                type="text"
                                                name="firstname"
                                                id="firstName"
                                                placeholder="First name"
                                                class="p-2 form-control form-control-lg color col-sm-12 col-md-12 mt-3"
                                                style="background-color: transparent"
                                            />
                                        </div>
                                        <div class="form-inline col-md-6 mt-3">
                                            <input
                                                type="text"
                                                name="lastname"
                                                id="secondName"
                                                placeholder="Last name"
                                                class="p-2 form-control form-control-lg color ml-md-auto mt-md-0 col-sm-12 col-md-12 "
                                                style="background-color: transparent"
                                            />
                                        </div>
                                    </div>
									
                                    <div class="form-group m-1 mt-3">
                                     <small style="color:red; font-size:12px"> <?php echo $email_error; ?></small>
                                        <input
                                            type="text"
                                            name="email"
                                            id="email"
                                            placeholder="Email"
                                            class="p-2 form-control form-control-lg color"
                                            style="background-color: transparent"
                                        />
                                    </div>
                                    
                                    <div class="form-group m-1 mt-3">
                                       <small style="color:red; font-size:12px"> <?php echo $password_error; ?></small>
                                        <input
                                            type="text"
                                            name="password"
                                            id="password1"
                                            placeholder="Password"
                                            class="p-2 form-control form-control-lg color"
                                            style="background-color: transparent"
                                        />
                                    </div>
                                    
                                    <div class="form-group m-1 mt-3">
									<small style="color:red; font-size:12px"> <?php echo $confirm_password_error; ?></small>
                                        <input
                                            type="text"
                                            name="confirmpassword"
                                            id="password1"
                                            placeholder="Confirm password"
                                            class="p-2 form-control form-control-lg color"
                                            style="background-color: transparent"
                                        />
                                    </div>

                                    <div class="form-group pt-3">
                                        <input
                                            type="submit"
                                            name="sign_up"
                                            id=""
                                            value="Sign up"
                                            style="background-color: rgb(38, 155, 120)"
                                            class="p-2 btn text-light font-weight-bold col-12 mb-2"
                                        />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form
							action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                            id="signIn"
                            style="display: none;"
                            class=""
                            style="width: 100%"
                            method="post"
                        >
                            <h5 class="text-light h5 mt-3">Welcome Back!</h5>
                            <div class="row">
                                <div class="col">
                                <div role="alert"></div>
                                   <small style="color:red; font-size:12px"><?php echo $form_email_error; ?></small>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            name="loginemail"
                                            id="Username"
                                            placeholder="Email"
                                            class=" form-control form-control-lg color mt-3 col-sm-12"
                                            style="background-color: transparent;"
                                        />
                                    </div>
                                    <small style="color:red; font-size:12px"><?php echo $form_password_error; ?></small>
                                    <div class="form-group mt-3">
                                        <input
                                            type="password"
                                            name="loginpassword"
                                            id="password1"
                                            placeholder="Password"
                                            class="p-2 form-control form-control-lg color col-sm-12"
                                            style="background-color: transparent"
                                        />
                                    </div>

                                    <div class="form-group pt-3">
                                        <input
                                            type="submit"
                                            name="loginapp"
                                            id="submit"
                                            value="Sign in"
                                            style="background-color: rgb(38, 155, 120)"
                                            class="p-2 btn text-light font-weight-bold col-12 mb-2"
                                        />
                                        <a href="#" class="text-light"
                                            ><p>Forgot password?</p></a
                                        >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="./app.js"></script>
        <script src="./validate.js"></script>
    </body>
</html>
