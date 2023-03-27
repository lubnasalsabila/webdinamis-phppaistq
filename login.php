<?php

include 'controller.php';
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php?page=masuk");
}else{

  //fungsi strlen adalah digunakan untuk dapat mengembalikan panjang string
if (isset($_POST["submit"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($server, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];

        // $ceksesi = $_SESSION['username'];
        // echo $ceksesi;
        // echo "<script>
        //     alert('Anda akan masuk ke halaman utama');
        //     document.location.herf = 'index.php?page=masuk';
        //     </script>";
        header("Location: index.php?page=masuk");
    } else {
        echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
}

      // if (isset($_POST['submit'])) {
      //   $username = $_POST['username'];
      //   $password = $_POST['password'];
        
      //   $sql = "SELECT * FROM login WHERE username='$username' AND password='$password' ";
      //   $result = mysqli_query($server, $sql);
      //   $hasil = mysqli_num_rows($result);
        
      //   session_start();
      //   if(isset ($_SESSION['username'])){
      //     header('location:index.php?page=home');
      //   } else {
      //     $sql = "SELECT * FROM login WHERE username='$username' AND password='$password' ";
      //     $result = mysqli_query($server, $sql);
          
      //     if (mysqli_num_rows(result) > 0 ){
      //       $row = mysqli_fetch_assoc($result);
      //       $_SESSION['username'] = $row['username'];

      //       $cekSesi = $_SESSION['username'];
      //       echo $cekSesi;
      //       header('location:index.php?page=home');
      //     }
      //   }
      // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="halaman">
    <h2>Selamat datang, silahkan login!!</h2>
  </div>
  <center>
  <form action="#" method="post">
    <label for="">username</label><br>
    <input type="text" name="username">
    <br>
    <label for="">password</label><br>
    <input type="password" name="password"><br>
    <br>
    <button type="submit" name="submit">kirim</button>
    <p>Anda belum punya akun? <a href="index.php?page=register">Daftar</a></p>
  </form>
  </center>
</body>
</html>


