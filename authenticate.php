<?php 

include("config.php");
session_start(); 

function usernameExist($conn, $username){
    $sql = "SELECT * FROM sign_in WHERE username =?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: signun.php?err=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    $result = mysqli_stmt_num_rows($stmt) > 0;

    mysqli_stmt_close($stmt);
    return $result;
}


function login($conn, $username, $pw){
    $sql = "SELECT * FROM sign_in WHERE username =? AND password = ?; ";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_bind_param($stmt, 'p', $pw);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);


    session_start();    
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_id'] = $row['user_id'];
    mysqli_stmt_close($stmt);
    header("Location: useraccount.php");
    exit();
}

if(isset($_POST['loginbtn'])){
    $username = $_POST['username'];
    $pw = $_POST['password'];
    
    if(!usernameExist($conn, $username)){
        echo "User not found";
        exit();
    }

    login($conn, $username, $pw);
} else {
    header("Location: signun.php");
    exit();
}
?>
