
<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="./img/favicon.png" type="image/png" sizes="32x32">
    <title>Splash | River Discharge</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="./css/mdb.min.css" rel="stylesheet">

    <style>

        .intro-2 {
            background: url("./img/bg-4.jpg")no-repeat center center;
            background-size: cover;
        }
        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }
        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 750px;
            }
        }
        @media (min-width: 741px) and (max-height: 638px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 750px;
            }
        }

        .card {
                /*margin-top: 10px;
                  margin-bottom: -45px;*/

        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #8EDEF8;
            box-shadow: 0 1px 0 0 #8EDEF8;
        }
        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #8EDEF8;
        }

        .md-form .form-control {
            color: #fff;
        }

        .navbar.navbar-dark form .md-form input:focus:not([readonly]) {
            border-color: #8EDEF8;
        }

    </style>

</head>

<body>


    <!--Main Navigation-->
    <header>

        

        <!--Intro Section-->
        <section class="view intro-2">
            <div class="full-bg-img">
              <div class="mask rgba-stylish-strong flex-center">
                <div class="container fixed-top pt-5">
                    <div class="row">

                       
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5 h-100" >
                        <!--<p class="success-text"> <%- messages() %></p>_-->
                            <!--Form with header-->
                            <div class="card wow fadeIn" data-wow-delay="0.3s">

                                <div class="card-body">

                                    <!--Header-->
                                    <div class="container reg-page">
                                     
                                        <form method="post" action="./users.php" class="form-signin">
                                    <div class="form-header purple-gradient">
                                        <h3><i class="fa fa-user mt-2 mb-2"></i> Log in:</h3>
                                    </div>

                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-user prefix white-text"></i>
                                        <input type="text" id="orangeForm-name" class="form-control" name="username">
                                        <label for="orangeForm-name">Your username</label>
                                    </div>
                                    

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text"></i>
                                        <input type="password" id="orangeForm-pass" class="form-control" name="password">
                                        <label for="orangeForm-pass">Your password</label>
                                    </div>
                                     <p class="white-text">No Account? <a class="white-text brown-lighter-hover" href="./register.php">Register</a></p>
                                    <div class="text-center">
                                        <button class="btn purple-gradient btn-lg">Sign in</button>
                                      
                                       
                                    </div>

                                </div>
                            </div>
                            <!--/Form with header-->

                        </div>
                    </div>
                </div>
              </div>
            </div>
        </section>

    </header>
    <!--Main Navigation-->


    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="./js/app.min.js"></script>
    <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="./js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>
</body>
</html>
