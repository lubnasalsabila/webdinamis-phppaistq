<?php
    require 'controller.php'; 
    
    // function query( $query ) {
    //     global $conn;
    //     $result =  mysqli_query( $conn, $query);
    //     $kotaks = [];
    //     while ( $kotak = mysqli_fetch_assoc($result) ) {
    //         $kotaks[] = $kotak;
    //     }
    //     return $kotaks;
    //    }
    
    //    function tambahData($data){
    //     global $conn;
    //     $nama = htmlspecialchars($data["nama"]);
    //     $nis = htmlspecialchars($data["nis"]);
    //     $rombel = htmlspecialchars($data["rombel"]);
    //     $rayon= htmlspecialchars($data["rayon"]);
    //     $jk = htmlspecialchars($data["jk"]);
    
    //     $query = "INSERT INTO login(nama, nis, rombel, rayon, jenis kelamin)
    //              VALUES
    //              ('$nama', '$nis', '$rombel', '$rayon', '$jk' )
    //              ";
    //     // mysqli_query($conn, $query);
    
    //     return mysqli_affected_rows($conn);
    //    }
    
    error_reporting(0);
    
    session_start();
    
    // if (isset($_SESSION['nis'])){
    //     header("location: index.php?page=home");
    // }
    // if (isset($_POST['submit'])){
    // $nis = $_POST['nis'];
    // $nama = $_POST['nama'];
    // $rombel = $_POST['rombel'];
    // $rayon = $_POST['rayon'];
    // $jk = $_POST['jk'];

    // if (!$result->num_rows > 0) {
    //     $sql = "INSERT INTO `login` (nis, nama, rombel, rayon, status, jk)
    //         VALUES ('$nis', '$nama', '$rombel', '$rayon', '$jk')";
    // $result = mysqli_query($server, $sql);
    // if ($result) {
        // echo "<script>alert('Selamat, pendaftaran berhasil!')</script>";
    // }
    //     header("location: index.php?page=home");
        // $nis = "";
        // $_POST['nama'] = "";
        // $_POST['rombel'] = "";
        // $_POST['rayon'] = "";
        // $_POST['jk'] = "";
    

if (isset($_POST["submit"])){

 if( tambahData($_POST) > 0){
    echo "<script>alert('Selamat, pendaftaran berhasil!');
        document.location.href = 'index.php?page=login';
        </script>";
    // header("location: index.php?page=home");
 }else{
    echo "data gagal dimasukkan";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <center>
    <h3>Silahkan isi data anda terlebih dahulu!</h3>
    <form action="" method="post">
        <br>
        <label for="">Nis </label><br>
        <input type="number" name="nis"><br>
        <label for="">Nama </label><br>
        <input type="text" name="nama" ><br>
        <label for="">Rombel </label><br>
        <input type="text" name="rombel"><br>
        <label for="">Rayon </label><br>
        <input type="text" name="rayon" ><br>
        <label for="">Jenis kelamin </label><br>
        <input type="radio" name="jk" value="male">male 
        <input type="radio" name="jk" value="female" >female<br>
        <label for="">Input gambar </label><br>
        <input type="file" name="foto" ><br><br>
        <button type="submit" name="submit">Daftar</button><br>
        <p>Anda sudah punya akun? <a href="index.php?page=login">Login </a></p>
    </form>
    </center>
</body>
</html>