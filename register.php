<?php
$servername = "localhost";
$database = "data_login";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
if(isset($_POST['Username'])){
$username = $_POST["Username"];
$email = $_POST["Email"];
$password = $_POST["Password"];

$query_sql = "INSERT INTO tbl_login (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    echo "Data berhasil dimasukkan";
} else {
    echo "Error: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Register Page</title>
</head>
    
<body>
    <div class="input">
        <h1>REGISTER</h1>
        <form action="register.php" method="POST">
            <div class="box-input">
                <i class="fas fa-address-book"></i>
                <input type="text" name="Username" placeholder="Username">
            </div>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="Email" placeholder="Email">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="Password" placeholder="Password">
            </div>
            <a href="login.html"></a>
                <button type="submit" name="register" class="btn-input">Register</button>
            </a>
            <div class="bottom">
                <p>Sudah punya akun?
                    <a href="login.php">Login disini</a>
            </p>
            </div>
        </form>
    </div>
</body>

</html>