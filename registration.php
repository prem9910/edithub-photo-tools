<?php
require './config.php';
include './index.php';
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");

    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Username or Email is already used.. ');</script>";
    }else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$fname','$username','$email','$password')";
            mysqli_query($conn,$query);
            echo "<script> alert('Successfully Register...');<script>";
            header("Location: ./index.php");

        }else{
            echo "<script> alert('Password does not match');<script>";
        }
    }
}
?>

<script>
onload = document.getElementById('registermodal').classList.toggle('hidden')

</script>

