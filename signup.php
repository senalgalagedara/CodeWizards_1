<?php
include("config.php");

$error = "";
$success = "";

if(isset($_POST['submitsignin'])){
    $uname = trim($_POST['username']);
    $pw = trim($_POST['password']);
    $cpw = trim($_POST['c_password']);

    if(empty($uname) || empty($pw) || empty($cpw)){
        $error = "All fields are required.";
    } elseif($pw !== $cpw) {
        $error = "Passwords do not match.";
    } elseif(strlen($pw) < 6) {
        $error = "Password must be at least 6 characters.";
    } else {
        $hashed_pw = password_hash($pw, PASSWORD_BCRYPT);

        $sql = "INSERT INTO sign_in(username, password) VALUES ('$uname', '$hashed_pw')";

        if($conn->query($sql) === TRUE) {
            $success = "Account created successfully! Redirecting to login...";
        } else {
            $error = "Error: " . $conn->error;
        }
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
    <script src="src/js/script.js" defer></script>
</head>
<body>
<div class="bodysite">
    <form class="signinbox" style="height: 600px;" action="" method="post">
        <h2 class="headd">Create Account</h2>
        <p class="signpara">Please fill in the information below to create an account</p>

        <?php if($error): ?>
            <p class="error-message" style="color: red; text-align: center;"><?= $error; ?></p>
        <?php endif; ?>

        <?php if($success): ?>
            <p class="success-message" style="color: green; text-align: center;"><?= $success; ?></p>
            <script>
                setTimeout(function() {
                    window.location.href = "login.php";
                }, 2000);
            </script>
        <?php endif; ?>

        <p class="signparaa">Name</p>
        <input class="inputbox" type="text" name="username" required>

        <p class="signparaa">Password</p>
        <input class="inputbox" type="password" name="password" id="password" onkeyup="checkPasswordStrength()" required>
        <div id="password-strength"></div>

        <p class="signparaa">Confirm Password</p>
        <input class="inputbox" type="password" name="c_password" required>

        <p class="signpara marginpara">
            <input class="checkbox" type="checkbox" required> By clicking this you agree to our terms & conditions.
        </p>

        <button type="submit" name="submitsignin" class="submitbtn" style="cursor: pointer;">Create An Account</button>

        <p class="para" style="text-align: center; margin-top: 20px;">
            Already have an account? <a href="login.php" style="color: blue;">Login here</a>
        </p>
    </form>
</div>

<script>
function checkPasswordStrength() {
    var password = document.getElementById("password").value;
    var strengthBar = document.getElementById("password-strength");

    let strength = 0;
    if (password.length > 5) strength++;
    if (password.match(/[a-z]+/)) strength++;
    if (password.match(/[A-Z]+/)) strength++;
    if (password.match(/[0-9]+/)) strength++;
    if (password.match(/[$@#&!]+/)) strength++;

    let strengthText = ["Weak", "Fair", "Good", "Strong", "Very Strong"];
    let colors = ["red", "orange", "yellow", "blue", "green"];

    strengthBar.innerHTML = `<p style="color: ${colors[strength]};">${strengthText[strength]}</p>`;
}
</script>

</body>
</html>
