<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="./img/favicon.png" type="image/png" sizes="32x32">
    <title>Splash | River Discharge</title>
    <!-- Font Awesome -->
    <link rel="manifest" href="./manifest.json">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="./css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="./css/style.css" rel="stylesheet">

</head>
<body class="fixed-sn light-blue-skin"><header >

        <!--Navbar-->

        <nav class="navbar navbar-expand-lg navbar-dark double-nav  fixed-top scrolling-navbar  deep-purple lighten-2">

            

            <!-- Breadcrumb-->
            <div class="navbrand my-auto  mr-auto">
                <a href="./index.html">
                <img  class=
                "w-50" src="./img/splash-logo.png" ></a>
            </div>

            <!-- Links -->
            <ul class="nav navbar-nav nav-flex-icons ml-auto" >
                
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fa fa-bell"></i>
                        <span class="clearfix d-none d-sm-inline-block">Notification</span>
                    </a>
                </li>
                <li class="nav-item" >
                   
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="./login.php" >
                        <i class="fa fa-user"></i>
                        <span class="clearfix d-none d-sm-inline-block">Login</span>
                    </a>
                </li>
               
            </ul>

        </nav>
        <!--/.Navbar-->
        
      </header>

      <!--container -->
      
        <!-- Full Page Intro -->
  <div class="view jarallax mb-3" data-jarallax='{"speed": 0.2}' style="background-image: url('./img/bg-2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container my-auto">
        <!--Grid row-->
        <div class="row my-5 ">
          <!--Grid column-->
          <div class="col-md-5 ">

<!-- Card -->
<div class="card">

    <!-- Card body -->
    <div class="card-body">

        <!-- Material form register -->
        <form method="post" action="river.php" class="form-signin">
            <p class="h4 text-center py-4">Search for River</p>

            <!-- Material input text -->
            <div class="md-form">
               
                <select class="mdb-select colorful-select dropdown-primary" name="state">
                                            <option value="" disabled selected>Select State</option>
                                            <option value="TN">TamilNadu</option>
                                            <option value="KL">Kerala</option>
                                            <option value="AN">Andhara Pradesh</option>
                                            <option value="DL">Delhi</option>
                                            <option value="KN">Karnataka</option>
                                            <option value="UP">Uttar Pradesh</option>
                                        </select>

                
            </div>

            <!-- Material input email -->
            <div class="md-form">
              
               <select class="mdb-select colorful-select dropdown-primary" name="district">
                                            <option value="" disabled selected>Select District</option>
                                            <option value="TN">Coimbatore</option>
                                            <option value="KL">Trichy</option>
                                            <option value="AN">Erode</option>
                                            <option value="DL">Chennai</option>
                                            <option value="KN">Madurai</option>
                                            <option value="UP">Kanyakumari</option>
                                        </select>
            </div>

            <!-- Material input email -->
            <div class="md-form">
               <select class="mdb-select colorful-select dropdown-info" name="river">
                                            <option value="" disabled selected>Select River</option>
                                            <option value="TN">Kaveri</option>
                                            <option value="KL">Vaigai</option>
                                            <option value="AN">Thamirabarani</option>
                                            <option value="DL">Palar</option>
                                            <option value="KN">Noyyal</option>
                                            <option value="UP">Bhavani</option>
                                        </select>
            </div>
            <!-- Material input password -->
          <p class="text-center my-5"><a href="./river.php" class="btn purple-gradient btn-rounded">view water level</a></p>
         
        </form>
        <!-- Material form register -->

    </div>
    <!-- Card body -->

</div>
<!-- Card -->
                      
          </div>
          <div class="col-md-7 my-auto white-text text-center">
            <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>River Discharge</strong></h1>
            <hr class="hr-light wow fadeInDown" data-wow-delay="0.4s">
            <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>A Real time River Tracking App</strong></h5>
            <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s" href="#whyus">Why us</a>
            <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s" href="#about">About?</a>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
   <!-- Full Page Intro -->
   <br><br>
  <div class="clearfix"> 

   </div>
   
<div class="container w-100 mt-5" style="position: relative;">
    <p class="lead text-center text-capitalize">here to view the total water level in percentage</p>
    <div class="row">
      <div class="col-lg-12 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">India</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="72"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
      </div>
    </div>
      <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Tamilnadu</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="56"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">kerala</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="76"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">karnataka</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="90"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->


                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Andhara</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="72"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Maharashtra</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="45"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Uttarakhand</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="72"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->


                    </div>
                    <!--Grid column-->
               

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">West bengal</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="63"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Gujarat</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="68"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Goa</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="86"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->


                    </div>
                    <!--Grid column-->
                  

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Delhi</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="75"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Madhya Pradesh</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="66"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6 col-sm-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header purple-gradient">
                                <h5 class="mb-0">Uttar Pradesh</h5>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">

                                <span class="min-chart my-3" id="chart-sales" data-percent="77"><span class="percent"></span></span>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->


                    </div>
                    <!--Grid column-->
                  </div>
                  <!--Grid row-->

</div>
<div class="container">

            <!--Section: About-->
            <section id="about" class="section about mt-4 mb-3">

                <!--Secion heading-->
                <h2 class="section-heading  dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">About us</h2>

                <!--First row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-lg-5 col-md-12 mb-5 wow fadeIn w-200 mx-auto" data-wow-delay="0.4s">

                        <!--Image-->
                        <img src="./img/mylogo.png" class=" mx-auto img-fluid z-depth-1 rounded w-75"
                            alt="My photo">

                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-6 ml-lg-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

                        <!--Title-->
                       
                        <h4 class="grey-text-5 mb-4">We are Ctrl Alt Del </h4>

                        <!--Description-->
                        <p class="grey-text-2 mb-5" align="justify">This is river Discharge app based on real time Monitering and developed as PWA, We made this app for smart India Hackathon 2018 this app data is completely a fake data which is created for hackathon only. </p>

                        <span class="text-center p-3 purple-gradient z-depth-2 white-text"><i class="fa fa-thumbs-up fa-2x mr-2"></i >Thankyou for your Time</span>

                    </div>
                    <!--/Second column-->

                </div>
                <!--/First row-->

            </section>
            <!--/Section: About-->
             <hr class="between-sections">

            <!--Projects section v.3-->
            <section id="whyus" class="section mt-4 mb-4">

                <!--Section heading-->
                <h2 class="section-heading my-5 py-4 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">what we Do?</h2>
               <!--First row-->
  <div class="row">
<!--First column-->
 <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s">
    <div class="mb-2">
        <!-- Nav tabs -->
        <ul class="nav md-pills pills-secondary flex-center" role="tablist">
           <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel31" role="tab"><i class="fa fa-binoculars fa-2x"></i><br> Monitering</a>
           </li>
           <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#panel32" role="tab"><i class="fa fa-battery-half fa-2x"></i><br>Power</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel33" role="tab"><i class="fa fa-exclamation-triangle fa-2x"></i><br> Alerts</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel34" role="tab"><i class="fa fa-calendar fa-2x"></i><br>Scheduling</a>
           </li>
        </ul>
    </div>
<!--Tab panels-->
    <div class="tab-content">
<!--Panel 1-->
      <div class="tab-pane fade show in active" id="panel31" role="tabpanel"><br>
 <!--First row-->
        <div class="row">
<!--First column-->
           <div class="col-lg-5 col-md-12 mb-5">
<!--Featured image-->
              <div class="view overlay z-depth-1 rounded">
                <img src="./img/Monitering.png" class="img-fluid">
              </div>
           </div>
<!--/First column-->
<!--Second column-->
           <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
<!--Title-->
             <h4 class="mb-3">Real Time River Monitering System</h4>
<!--Description-->
                <p class="grey-text-2" align="justify">This app track the real time water management and help us get alerts</p>
           </div>
         </div>
<!--/First row-->
      </div>
<!--/.Panel 1-->
<!--Panel 2-->
    <div class="tab-pane fade" id="panel32" role="tabpanel"><br>
<!--First row-->
      <div class="row">
<!--First column-->
       <div class="col-lg-5 col-md-12 mb-5">
<!--Featured image-->
          <div class="view overlay z-depth-1 rounded">
            <img src="./img/power1.png" class="img-fluid">
          </div>
        </div>
<!--/First column-->
<!--Second column-->
    <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
 <!--Title-->
      <h4 class="mb-3">Power Generation</h4>
 <!--Description-->
        <p class="grey-text-2" align="justify">This app help us to get details about power generation.</p>
    </div>
<!--/Second column-->
      </div>
<!--/First row-->
        </div>
 <!--/.Panel 2-->
<!--Panel 3-->
      <div class="tab-pane fade" id="panel33" role="tabpanel"><br>
<!--First row-->
        <div class="row">
<!--First column-->
          <div class="col-lg-5 col-md-12 mb-5">
<!--Featured image-->
            <div class="view overlay z-depth-1 rounded">
              <img src="./img/flood.png" class="img-fluid">
            </div>
          </div>
 <!--/First column-->
<!--Second column-->
          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
<!--Title-->
           <h4 class="mb-3">Flood Alert System</h4>
<!--Description-->
            <p class="grey-text-2" align="justify">This app gives a notification and alert message to people through app and sms</p>
          </div>
<!--/Second column-->
        </div>
<!--/First row-->
</div>
<!--/.Panel 3-->
<!--Panel 4-->
<div class="tab-pane fade" id="panel34" role="tabpanel"><br>
<!--First row-->
        <div class="row">
<!--First column-->
          <div class="col-lg-5 col-md-12 mb-5">
<!--Featured image-->
              <div class="view overlay z-depth-1 z-depth-1 rounded">
                  <img src="./img/time.png" class="img-fluid">
              </div>
          </div>
<!--/First column-->
<!--Second column-->
          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
<!--Title-->
              <h4 class="mb-3">Discharge Scheduling</h4>
<!--Description-->
                  <p class="grey-text-2" align="justify">This app gives the discharge timing and amount water to be discharged.</p>
           </div>
<!--/Second column-->
          </div>
<!--/First row-->
        </div>
<!--/.Panel 4-->
      </div>
<!--/Tab panels-->
    </div>
<!--/First column-->
 </div>
  <!--/First row-->
</section>
<!--/section-->
</div>
<!--blockquote-->
        <div class="streak streak-photo streak-md" style="background-image: url('./img/bg-3.jpg');">
            <div class="flex-center mask rgba-purple-light">
                <div class="text-center white-text">
                    <h2 class="h2-responsive my-5 pt-5"><i class="fa fa-quote-left" aria-hidden="true"></i> Only when you drink from the river of silence shall you.
                        <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
                    <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Khalil Gibran</h5>
                </div>
            </div>
        </div>
        <!--/blockquotes-->




 <script>
        // Minimalist chart
        $(function () {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#4caf50",
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });

  </script>

<!--Footer-->
<footer class="page-footer deep-purple lighten-2text-center text-md-left pt-0 mt-0">

<!--Copyright-->
<div class="footer-copyright">
    <div class="container-fluid">
        © 2018 Copyright:  <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i>
        Created by CTRL+ALT+DEL 

    </div>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="./js/app.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- app JavaScript -->



<!-- Initializations -->
<script>
// SideNav Initialization
$(".button-collapse").sideNav();

// Material Select Initialization
$(document).ready(function () {
    $('.mdb-select').material_select();
});

// Data Picker Initialization
$('.datepicker').pickadate();

// Tooltip Initialization
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>

<!-- Charts -->
<script>
// Minimalist chart
$(function () {
    $('.min-chart#chart-sales').easyPieChart({
        barColor: "#4caf50",
        onStep: function (from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });
});

// Main chart
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            fillColor: "#fff",
            backgroundColor: 'rgba(255, 255, 255, .3)',
            borderColor: 'rgba(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },
    options: {
        legend: {
            labels: {
                fontColor: "#fff",
            }
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: true,
                    color: "rgba(255,255,255,.25)"
                },
                ticks: {
                    fontColor: "#fff",
                },
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    display: true,
                    color: "rgba(255,255,255,.25)"
                },
                ticks: {
                    fontColor: "#fff",
                },
            }],
        }
    }
});
</script>

<!-- Alerts -->
<script>
$(function () {
    $('#folder-1').click(function () {
        toastr.error("Folder 1 has been clicked!", "Folder 1", {
            "positionClass": "toast-top-right",
        });
    });
    $('#folder-2').click(function () {
        // make it not dissappear
        toastr.info("Folder 2 has been clicked!", "Folder 2", );
    });
    $('#folder-3').click(function () {
        // make it not dissappear
        toastr.info("Folder 3 has been clicked!", "Folder 3", );
    });
});
</script>
</body>

</html>