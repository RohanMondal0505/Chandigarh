<?php
session_start();

include "./conn.php";

if (isset($_POST['logIn'])){
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];


    $sql1 = "SELECT email FROM user_data WHERE email = '{$email}'";
    $result1 = mysqli_query($conn,$sql1);

    if(mysqli_num_rows($result1) > 0){
        $sql2 = "SELECT email, password FROM user_data WHERE email = '{$email}' AND password = '{$password}'";
        $result2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($result2) > 0){
            $row = mysqli_fetch_assoc($result2);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['use'] = "T";
            header("Location: {$hostname}/");
        }else{
            header("Location: {$hostname}/");
            $_SESSION['logError2'] = "Password not Match";
            $_SESSION['logPOP'] = "T";
        }

    }else{
        header("Location: {$hostname}/");
        $_SESSION['logError1'] = "Email Does Not Exits";
        $_SESSION['logPOP'] = "T";
    }
}

?>