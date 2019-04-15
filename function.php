<?php
  function do_login($username, $password){

    // Cek kondisi jika username dan password salah
    if($username != "admin" || $password != "admin"){
      header("location:index.php?error=wrong");
    }
    // Cek kondisi jika username dan password benar
    if($username == "admin" && $_POST["password"] == "admin") {
      $_SESSION["user"] = $username;
      $_SESSION["pass"] = $password;

      header("location:beranda.php");
    }
  }

  function check_login(){
    // Cek kondisi login session
    if(!isset($_SESSION["user"])){
      header("location:index.php");
    }
  }
 ?>
