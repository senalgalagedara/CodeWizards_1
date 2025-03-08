<?php
include("config.php");

if(isset($_POST['submitsignin'])){
    $uname = $_POST['username'];
    $pw = $_POST['password'];
    $cpw = $_POST['c_password'];

    $sql = "INSERT INTO sign_in(user_id,username,password,c_password) VALUES('','$uname','$pw','$cpw')";

    $result = $conn->query($sql);

    if($result === TRUE)
    {
        header("location:index.php");
    }
    else{
        die(mysqli_error($conn));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - FashionFix</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="src/js/script.js"></script>
</head>
<body>
<div class="bodysite">
    <form class="signinbox" style="    height: 570px;
" action="" method="post">
        <h2 class="headd">Create Account</h2>
        <p class="signpara">Please fill in the information below to create an account</p>
        
        <p class="signparaa">Name</p>
        <input class="inputbox" type="text" name="username" id="">

        <p class="signparaa">Password</p>
        <input class="inputbox" type="password" name="password" id="">
    
        <p class="signparaa">Conform Password</p>
        <input class="inputbox" type="password" name="c_password" id="">

        
        <p class="signpara marginpara">
            <input class="checkbox" type="checkbox" name="" id="" required>By clicking this you agree to our terms & conditions.
        </p>

        <button type="submit" name="submitsignin" class="submitbtn" style="cursor: pointer;">Create An Account</button>
        <p class="para" style="text-align: center; margin-top: 20px;">
            Already have an account?
            <a href="login.php" style="color: blue;">Login here</a>
        </p>
    </form>
</div>

</body>
</html>