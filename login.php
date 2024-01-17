<?php

session_start();
require './config.php';
// require './index.php';
if(isset($_POST['submit'])){
    // $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' OR password = '$password'");

    $row =mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] =true;
            $_SESSION["username"] = $row["username"];
            $_SESSION["fname"] = $row["fname"];
            $_SESSION["email"] = $row["email"];
            header("Location: index.php");
        }else{
            echo "<script> alert('Wrong Password'); </script>";
        }
    }else{
        echo "<script> alert('User not registered'); </script>";
    }
}

?>