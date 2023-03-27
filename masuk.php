<?php 

include 'controller.php';
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php?page=login");
}

$cruds = query("SELECT * FROM isidata INNER JOIN `login` ON isidata.id = `login`.id AND username = '$username'");
// SELECT * FROM users INNER JOIN students ON users.id = students.id AND username = '$username'"
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Masuk</title>
</head>
<body>
    <div>
        <center>
        <form action="" method="POST">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
            <h3>Data diri anda meliputi: </h3>
            <?php foreach ( $cruds as $crud ){ ?>
                nis: <?php echo $crud["nis"] ?><br>
                nama: <?php echo $crud["nama"] ?><br>
                rombel: <?php echo $crud["rombel"] ?><br>
                rayon: <?php echo $crud["rayon"] ?><br>
                Janis kelamin: <?php echo $crud["jk"] ?><br>
            
            <?php } ?>

            <div>
            <a href="logout.php">Logout</a>
            </div>
        </form>
        </center>
    </div>
</body>
</html>