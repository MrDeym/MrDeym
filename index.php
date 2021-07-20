<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>D.A.E.T.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link href="assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="shortcut icon" href="static/img/logo/logo_1.png">
    
</head>
<body>
    <div class="wrapper" id="head-wrap">
        <div class="container-fluid justify-content-between">
            <div class="row" id="clockDisplay"></div>
            <div class="row mt-auto mr-2" id="dark">
                <input type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="label">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                </label>    
            </div>
            <span class="dropdown-menu dropdown-menu-right"><i class="fas fa-user-alt-slash"></i></span>
        </div>
        
        <div class="container-fluid-2">
            <img src="static/img/logo/logo.png" id="mdr-logo" alt="MDRRMO-Daet">
            <h1 class="d-sm-flex d-md-block ml-3"><b>Data Assessment<br>Emergency Tool</b></h1>
        </div>    
    </div>

    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-align-justify"></span>
        </button>

      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="font-size: large;">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home"> Home</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#data-statistics"><i class="fas fa-table"> Overview Statistics</i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="false">
                        <i class="fas fa-calendar-alt"> Events</i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Trainings / Activies</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Current Situation</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Disaster Reports</a>
                        <div class="dropdown-divider disabled"></div>
                        <a class="dropdown-item" href="#"><i>Something else here</i></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Admin</a>
                </li>
            </ul>

          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-info loginbtn mr-md-3" onclick="document.getElementById('id01').style.display='inline'" style="width:auto;"><i class="fas fa-user"></i> Login</button>
            <input type="search" class="form-control mr-sm-2"  placeholder="Search" aria-label="Search"  disabled>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>
    <!-- End of nav -->
 
    <!--Marquee Section -->
    <div class="container-fluid-3">
        <div class="container container-post">
            <div class="row post-row">
                <div class="col-sm-2 my-col">
                    <h5 class="latest-post bg-primary" style="color: white;">Latest Post <i class="fas fa-newspaper"></i></h5>
                </div> 
                <div class="col-sm my-col"><marquee style="color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 18px; background-color: rgb(215, 215, 235);"
                    behavior="scroll" > <b>Breaking news:</b> Maging handa sa panahon ng sakuna alamin, gawin, at palaganapin!</marquee></div>
            </div>
        </div>
    </div>
<br>
<hr>
    <!-- Container Post -->
    <div class="container-carousel">
        <div class="row justify-content-between">
            <div class="col-md-8 justify-content-start">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="img-fluid"
                                src="static/img/map_5.png" alt="map 1"
                                style="width: 950px; height: 600px;">
                            <!-- <div class="carousel-caption d-none d-sm-block">
                                <h5>Lorem ipsum dolor sit amet.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, obcaecati.</p>
                            </div> -->
                        </div>

                        <div class="carousel-item">
                            <img class="img-fluid"
                                src="static/img/map_25.png" alt="map 2"
                                style="width: 950px; height: 600px;">
                                <!-- <div class="carousel-caption d-none d-sm-block">
                                    <h5>Lorem ipsum dolor sit amet.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, obcaecati.</p>
                                </div> -->
                        </div>

                        <div class="carousel-item ">
                            <img class="img-fluid"
                                src="static/img/map_100.png" alt="map 3"
                                style="width: 950px; height: 600px;">
                                <!-- <div class="carousel-caption d-none d-sm-block">
                                    <h5>Lorem ipsum dolor sit amet.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, obcaecati.</p>
                                </div> -->
                        </div>  
                        <ol class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel1" data-slide-to="1"></li>
                            <li data-target="#mycarousel2" data-slide-to="2"></li>
                        </ol>
                    </div>            
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                        <!-- <button class="btn btn-danger btn-sm" style="justify-self: left;" id="carouselButton">
                            <span class="fa fa-pause"></span>
                        </button> -->
                </div>
            </div>
            <!-- Tebol post-->
            <div class="table-post col-md-4 card mr-md-3" style="max-width: 21rem; background-color: transparent; border: 1px solid whitesmoke;">
                    <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="latest-tab" data-toggle="tab" href="#latestpost" role="tab" aria-controls="latestpost" aria-selected="true"><i class="fas fa-clock small"></i>Latest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-tab" data-toggle="tab" href="#trending" role="tab" aria-controls="trending" aria-selected="false"><i class="fas fa-book-reader"></i>Trending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="false"><i class="fas fa-fire"></i>Popular</a>
                        </li>
                    </ul>            
                        <div class="tab-content">
                            <div class="tab-pane active" id="latestpost" role="tabpanel" aria-labelledby="latest-tab">.</div>
                            <div class="tab-pane" id="trending" role="tabpanel" aria-labelledby="trending-tab">..</div>
                            <div class="tab-pane" id="popular" role="tabpanel" aria-labelledby="popular-tab">...</div>               
                        </div>
                </div>
            </div>
        </div>
    </div>

<!-- Data statistics -->
    <section id="data-statistics">
        <div class="content-statistic">
                <div class="container-fluid-statistics">
                    <div class="page-title">
                        <h3>Overview Statistics</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Vehicular Incident Reports</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="linechart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Vehicular Incident Reports</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="myChart"></canvas>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Bar Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="barchart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Pie Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="piechart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Donut Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="doughnutchart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Stacked Bar Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="stackedbarchart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Radar Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="radarchart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
    </section>

    <!-- Comment Section -->
    <div class="row justify-content-around">
        <div class="col col-md-9">
            <form>
                <h3>Send us your Feedback</h3>
                <div class="form-group row">
                    <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="firstname" name="firstname"
                            placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="lastname" name="lastname"
                            placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contac-number" class="col-2 col-md-2 col-form-label">Contact Number</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="contac-number" name="contact-number"
                            placeholder="Contact Number">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="emailid" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" id="emailid" name="emailid"
                            placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 offset-md-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                            <label class="form-check-label" for="approve">
                            <strong>May we contact you?</strong>
                        </div>
                    </div>
                <div class="col-md-auto offset-md-1">
                    <select class="form-control">
                        <option class="active">Select one.</option>
                        <option>CP number</option>
                        <option>Email</option>
                    </select>
                </div>
                </div>
                <div class="form-group row">
                    <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                    <div class="col-md-6">
                        <textarea  class="form-control" id="feedback" name="feedback" row=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-md-2 col-md-6">
                        <button type="submit" class="btn btn-primary"> Send Feedback</button>
                    </div>
                </div>
            </form>         
        </div>
    </div>
    <!-- End of Form -->

    <!-- Footer -->
    <footer>
        <div class="main-content">
          <div class="left box">
            <h2>About us</h2>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aliquid iusto libero facere optio neque amet corrupti nihil tempore sint.</p>
                <div class="social">
                <a href="https://www.facebook.com/MDRRMODaetCN/"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-youtube"></span></a>
              </div>
            </div>
          </div>

          <div class="center box">
            <h2>Address</h2>
            <div class="content">
              <div class="place">
                <span class="fas fa-map-marker-alt"></span>
                <span class="text">LGU Compound Purok 4 Brgy. Pamorangon Daet, Camarines Norte</span>
              </div>
              <div class="phone">
                <span class="fas fa-phone-alt"></span>
                <span class="text">+639128555551 | Emergency Hotline</span>
              </div>
              <div class="email">
                <span class="fas fa-envelope"></span>
                <span class="text">mdrrmo-daet@gmail.com</span>
              </div>
            </div>
          </div>
  
          <div class="right box">
            <h2>Mission</h2>
            <div class="content">
            
                <p class="justify-content-center">
                    To provide an efficient early warning sytem for incoming calamities, disaster and other related fortuitous events.        
                    To provide an effective and immediate reponse mechanism and measures for all incoming emergencies.      
                    To provide valuable recommendations, guidance and direction to every crisis that may arise.            
                    To provide all time awareness on every dangers from natural and human-made disasters.         
                    To provide data bank for all the disaster/emergency related data, information and statistics for policy formulations and decision-making.
                </p>
            </div>
          </div>
            <div class="right box">
                <h2>Vision</h2>
                <div class="content">
                    <p class="justify-content-center">Prepared, equipped and organized Daet Camarines Norte, all aware of safety measures and readiness 
                         in meeting emergencies, whether on occurrence of natural or human-made calamities and disaster.
                    </p>
                </div>
            </div>
        
        </div>
        <div class="bottom">
            <span class="credit">Powered By <a href="#">Norms IT Solution</a> | </span>
            <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
        </div>
    </footer>
    
<!-- Login Modal -->
    <div class="modal" id="id01">
        <form class="modal-content animate" action="" method="POST">
            <div class="modalhead"></div>
            <div class="imgcontainer">
                <img src="static/img/img_avatar2.png" alt="Avatar" class="avatar img-rounded">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
      
          <div class="modal-container">
            <i class="fas fa-user-circle"></i>
            <label for="uname"><b>Username / Email</b></label>
            <input type="text" placeholder="Enter Username or Email" name="uname" required>
            <i class=" fas fa-key"></i>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required id="myInput">
                    
            <span><button class="btn btn-info" type="submit">Login</button></span>
    
            <!-- An element to toggle between password visibility -->
            <label><input type="checkbox" onclick="Showpass()"> Show Password</label> <br>
          </div>
      
          <div class="footer-modal">
            <span class="ml-2"><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn btn-danger">Cancel</button></span>
            <span class="forgotpsw">Forgot <a href="#">password?</a></span>
            <span class="createAccnt">Create an <a href="createAccnt.php">Account</a></span>
            <div class="card-footer my-2">
                <small class="d-flex justify-content-center">&copy; Norms IT Solution</small>
            </div>
          </div>
        </form>
      </div>
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="static/js/script.js"></script>
    <script src="static/jquery/jquery.min.js"></script>
    <script src="static/popper.js/dist/umd/popper.min.js"></script>
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="static/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/e8964574a2.js" crossorigin="anonymous"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="static/js/charts.js"></script>
 </body>
</html>