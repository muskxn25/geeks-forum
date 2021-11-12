<?php
require_once "config.php";
if(isset($_POST['password']) || isset($_POST['confirm_password'])){
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    //$password = $_POST['password'];
    


$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){



    //CHECK  IF USERNAME IS EMPTY
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ? ";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, "s",  $param_username);
            //set the value of param username
            $param_username = trim($_POST['username']);

            //try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken";

                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);
        
}
//check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";

}
else{
    $password = trim($_POST['password']);
}
//check for  confirm password field
if(trim($_POST['password']) != trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}
//if there were no error, go ahead and insert into  database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
    $sql = "INSERT INTO users(username, password) VALUES (?, ?) ";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        //set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        //try to execute the query
        if(mysqli_stmt_execute($stmt)){
            header("location: login.php");
        }
        else{
            echo "Something went wrong.... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);

}
?>




<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Geeks Forum Registration</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        

    </head>
    <body>
        <div class= "container">
            <div class = "title"> Registration </div>
        <form action ="" method ="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">UserName</span>
                    <input type="text" placeholder="Enter your username" name="username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your Mail" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your Number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your password" name="password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm password</span>
                    <input type="text" placeholder="Confirm Password" name="confirm_password" required>
                </div>
            
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
            <p>already have an account?<a href="http://localhost/login/login.php">Login now</a></p>
</form>

        </div>
    </body>
    </html>