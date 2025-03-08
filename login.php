
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - FashionFix</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/script.js"></script>
</head>
<body>
<div class="bodysite">
    <form class="signinbox" style="height: 450px;" method="post" action="authenticate.php" >
        <h2 class="headd">Login to my Account</h2>
        <p class="signpara">Enter your Username and Password</p>

        <p class="signparaa">Username</p>
        <input class="inputbox" type="text" id='email' name="email" id="">
    
        <p class="signparaa">Password</p>
        <input class="inputbox" type="password" name="passwordd" id="">

        
        <p class="signpara marginpara">
            <input class="checkbox" type="checkbox" name="" id="">Remember Login.
        </p>

        <button type="submit" class="submitbtn" name="loginbtn">Login</button>

        <p class="para" style="text-align: center; margin-top: 20px;">
            New Customer?
            <a href="signin.php" style="color: blue;">Create your account</a>
        </p>
    </form>
</div>
</body>
</html>