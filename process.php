<?php
include ('connect.php');

if(isset($_POST)){
     $firstname      = $_POST['first_name'];
     $middlename     = $_POST['middle_name'];
     $lastname       = $_POST['last_name'];
     $username       = $_POST['username'];
     $email          = $_POST['email'];
     $password       = $_POST['password'];

    $sql = mysqli_query($conn, "INSERT INTO user_tbl(fname,mname,lname,uname,email,pword)
    VALUES ('$firstname','$middlename','$lastname','$username','$email','$password')");
}else{
    echo "There was an error, please try again later!";
}
?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState( null, null, window.location.href);
        }
</script>