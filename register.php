<?php

include 'controller.php';

error_reporting(0);
     
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php?page=isidata");
}

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
if ($password == $cpassword) {
    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = mysqli_query($server, $sql);
if (!$result->num_rows > 0) {
    $sql = "INSERT INTO login (username, password)
            VALUES ('$username', '$password')";
    $result = mysqli_query($server, $sql);
if ($result) {
        // echo "<script>alert('Selamat, pendaftaran berhasil!')</script>";
        header("Location: index.php?page=isidata");
    $username = "";
    $_POST['password'] = "";
    $_POST['cpassword'] = "";
} else {
        echo "<script>alert('Terjadi kesalahan.')</script>";
}
} else {
        echo "<script>alert('Username Sudah Terdaftar.')</script>";
}

} else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
}
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Daftar</title>
</head>

<body>
<center>
    <div>
    <form action="" method="post">
    <h2>Daftar</h2>
    <div>
    <h5>Username</h5>
        <input type="text" name="username" value="<?php echo $username; ?>" required>
    </div>
    <div>
    <h5>Password</h5>
        <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
    </div>
    <div>
    <h5>Ulangi Password</h5>
        <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
    </div>
    <div>
    <button name="submit">Selanjutnya</button>
    </div>
        <p>Anda sudah punya akun? <a href="index.php?page=login">Login </a></p>
    </form>
    </div>
</center>
</body>

</html>