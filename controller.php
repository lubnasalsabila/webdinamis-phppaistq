<?php
// buat file isidata.php
$server =  mysqli_connect("localhost", "root", "", "latihan_xpplg");

function query( $query ) {
 global $server;
 $result =  mysqli_query( $server, $query);
 $kotaks = [];
 while ( $kotak = mysqli_fetch_assoc($result) ) {
     $kotaks[] = $kotak;
 }
 return $kotaks;
}
// $ab = "gambar/";
//     if(!file_exists($ab))
// // fungsi mkdir adalah untuk membuat folder atau direktory baru 
//     mkdir($ab, 0755);
// // fungsi basename adalah untuk mengembalikan nama file dari syntax
//     $target = $ab . basename($_FILES['foto']['name']);

//     $n_foto = $_FILES['foto']['name'];
//     $u_foto = $_FILES['foto']['size'];

//     $fileinfo = @getimagesize($_FILES["foto"]["ft_name"]);
//     $width = $fileinfo[0];
//     $height = $fileinfo[1];

//     if($u_foto > 81920){
//         echo "Ukuran gambar melebihi 80kb";
//     }else if ($width > "480" || $height > "640"){
//         echo "Ukuran gambar harus 480 x 640";
//     }else{
//         if (move_uploaded_file)
//     }
function tambahData($data){
 global $server;
 $nis = htmlspecialchars($data["nis"]);
 $nama = htmlspecialchars($data["nama"]);
 $rombel = htmlspecialchars($data["rombel"]);
 $rayon = htmlspecialchars($data["rayon"]);
 $jk = htmlspecialchars($data["jk"]);
 $foto = htmlspecialchars($data["foto"]);

 $query = "INSERT INTO isidata (nis, nama, rombel, rayon, jk, foto)
          VALUES
          ('$nis', '$nama', '$rombel', '$rayon', '$jk', '$foto' )
          ";
 mysqli_query($server, $query);

 return mysqli_affected_rows($server);
}

// buat file login.php
// error_reporting(0);
 
// session_start();
 
// if (isset($_SESSION['Username'])) {
//     header("Location: index.php?page=masuk");
// }
 
// if (isset($_POST['Username'])) {
//     $username = $_POST['Username'];
//     $password = $_POST['Password'];
 
//     $sql = "SELECT * FROM `login` WHERE Username='$username' AND Password='$password' ";
//     $result = mysqli_query($server, $sql);
//     if ($result->num_rows > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $_SESSION['Username'] = $row['Username'];

//         // $ceksesi = $_SESSION['Username'];
//         // echo $ceksesi;
//         echo "<script>
//             alert('Anda akan masuk ke halaman utama');
//             document.location.herf = 'index.php?page=masuk';
//             </script>";
//     } else {
//         echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
//     }
// }




?>

