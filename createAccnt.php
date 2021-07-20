<?php
 include ("connect.php");

 $first_name = $middle_name = $last_name = $user_name = $email = $password = $pass2= "";
 $first_nameErr = $middle_nameErr = $last_nameErr = $user_nameErr = $emailErr = $passwordErr = $pass2Err= "";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Account D.A.E.T.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="shortcut icon" href="static/img/logo/logo_1.png">
</head>
<body>
<?php

if(isset($_POST["btnregister"])){

    if(empty($_POST["first_name"])) {
        $first_nameErr = "First name is required";
    }else{
        $first_name = $_POST["first_name"];
    }
    if(empty($_POST["last_name"])) {
        $last_nameErr = "Last name is required";
    }else{
        $last_name = $_POST["last_name"];
    }
    if(empty($_POST["username"])) {
        $user_nameErr = "Username is required"; 
    }else{
        $user_name = $_POST["username"];
    }
    if(empty($_POST["email"])) {
        $emailErr = "Email is required";
    }else{
        $email = $_POST["email"];
    }
    if(empty($_POST["password"])) {
        $passwordErr = "Password is required";
    }else{
        $password = $_POST["password"];
    }
    if(empty($_POST["password2"])) {
        $pass2Err = "Password is required";
    }else{
        $pass2 = $_POST["password2"];
    }
    if($_POST["password2"] != $_POST["password"]){
        $pass2Err = "Password doesn't match!";
    }else{
        $first_name && $middle_name && $last_name && $user_name && $email && $password && $pass2;

        $v_fname = strlen($first_name);
        if($v_fname < 2){
            $first_nameErr = "First name is too short!";
        }else {        
            $v_lname = strlen($last_name);
            if($v_lname < 2){
                $last_nameErr = "Last name is too short!";
            }else{
                $v_uname = strlen($user_name);
                if($v_uname < 4){
                    $user_nameErr = "Username is too short!";
                }else{
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr = "Invalid email format";
                    }else{                       
                        $sql = mysqli_query($conn, "INSERT INTO user_tbl(fname,mname,lname,uname,email,pword)
                        VALUES ('$first_name','$middle_name','$last_name','$user_name','$email','$password')");
                        // header("Location: index.php");
                    }
                }
            }
            
        }
    }
}
?>
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
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Create Account</a>
                </li>
        </div>
    </nav>
    <!-- End of nav -->

    <div class="cA-container">
        <div class="cA-header">
            <h2>Create Account</h2>
        </div>
        <form action="createAccnt.php" class="cA-form" method="POST">

            <div class="cA-form-control">
                <label><span class="asterisk">*</span>First Name</label>
                <input type="text" placeholder="Enter Username" name="first_name" id="first_name"
                value="<?php echo $first_name?>"><span class="error"><?php echo $first_nameErr;?></span>
            </div>
            <div class="cA-forpm-control">
                <label>Middle Name</label>
                <input type="text" placeholder="Enter Middlename" name="middle_name" id="middle_name"
                value="<?php echo $middle_name?>"><span class="error"><?php echo $middle_nameErr;?></span>
            </div>
            <div class="cA-form-control">
                <label><span class="asterisk">* </span>Last Name</label>
                <input type="text" placeholder="Enter Lastname" name="last_name" id="last_name"
                value="<?php echo $last_name?>"><span class="error"><?php echo $last_nameErr;?></span>
            </div>
            <div class="cA-form-control">
                <label><span class="asterisk">* </span>Username</label>
                <input type="text" placeholder="Enter Username" name="username" id="username"
                value="<?php echo $user_name?>"><span class="error"><?php echo $user_nameErr;?></span>
            </div>

            <div class="cA-form-control">
                <label><span class="asterisk">* </span>Email</label>
                <input type="text" placeholder="Enter your Email" name="email" id="email"
                value="<?php echo $email?>"><span class="error"><?php echo $emailErr;?></span>             
            </div>

            <div class="cA-form-control">
                <label><span class="asterisk">* </span>Password</label>
                <input type="password" placeholder="Enter Password" name="password" id="password"
                value="<?php echo $password?>"><span class="error"><?php echo $passwordErr;?></span>           
            </div>

            <div class="cA-form-control">
                <label><span class="asterisk">* </span>Confirm password</label>
                <input type="password" placeholder="Re-enter password" name="password2"
                value="<?php echo $pass2?>"><span class="error"><?php echo $pass2Err;?></span>
              
            </div> 
            <button class="btn btn-primary" type="submit" name="btnregister" id="btnregister">Register</button>
        </form>
    </div>
     
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
          <a href="https://goo.gl/maps/V3an7ccVMFHUXQ1M7" class="decoNone">  
          <span class="fas fa-map-marker-alt"></span>
          <span class="text">LGU Compound Purok 4 Brgy. Pamorangon Daet, Camarines Norte</span>
         </a>
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
        
            <p class="justify-content-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi dolores temporibus quasi ipsa,
                 architecto illo placeat vel saepe expedita, ex, ipsam velit necessitatibus tempore minima.</p>
        </div>
      </div>
        <div class="right box">
            <h2>Vision</h2>
            <div class="content">
                <p class="justify-content-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias neque magni,
                     adipisci asperiores quia quibusdam at ullam nulla assumenda explicabo odit non ducimus deserunt mollitia?</p>
            </div>
        </div>
    
    </div>
    <div class="bottom">
      <center>
        <span class="credit">Powered By <a href="#">Norms IT Solution</a> | </span>
        <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
      </center>
    </div>
</footer>

</body>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="static/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="static/jquery/jquery.min.js"></script> -->
    <script src="static/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="static/bootstrap/dist/js/bootstrap.js"></script> -->
    <script src="https://kit.fontawesome.com/e8964574a2.js" crossorigin="anonymous"></script>
    <script src="static/bootstrap/dist/js/bootstrap.bundle.min.js.map"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">

    Swal.fire({
            title: "Attention!",
            text: "By creating an account you need to input your personal information, but we make sure about the safety and security of your data.",
            type: "info"
        });


        $(function(){
            $('#btnregister').click(function(e){
                var valid = this.form.checkValidity();
                if (valid){
                    var firstname      = $('#first_name').val();
                    var middlename     = $('#middle_name').val();
                    var lastname       = $('#last_name').val();
                    var username       = $('#username').val();
                    var email          = $('#email').val();
                    var password       = $('#password').val();

                        e.preventDefault();

                        $.ajax({
                            type: 'POST',
                            url: 'process.php',
                            data: {firstname: first_name,middlename: middle_name,lastname: last_name, username: username, email: email, password: password},
                            success: function(data){
                            Swal.fire ({
                                title: 'Successful',
                                text: 'You are successfully registered!',
                                type: 'success'
                                }).then(function(data){
                                    window.location = "index.php";
                                });
                            },
                            error:function(data){
                            Swal.fire({
                                title: 'Error',
                                text: 'Please try again later!',
                                type: 'error'
                            })
                            }
                        });
                }else{
                }
            });
        });
    </script>
</html>