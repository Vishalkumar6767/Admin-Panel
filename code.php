<?php
session_start();
$connection = mysqli_connect("localhost","root","","adminpanel"); 
if(isset($_POST["registerbtn"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['confirmpassword'];

    if($password === $password_confirm)
    {

     $query = "INSERT INTO register(username, email, password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
            $_SESSION['success'] = "Admin Profile Added";
            header('Location:register.php');
        }else
        {
            $_SESSION['status'] = "Admin profile not Added";
            header('Location:register.php');
        }
   
    }
 else{
        $_SESSION['status'] = "Passsword and Confirm Passsword Does Not Match";
        header('Location:register.php');
     }
}
