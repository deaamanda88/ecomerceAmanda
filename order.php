<?php
$servername = "localhost";
$database = "data_login";
$username = "root";
$password = "";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}

// Menangani form submission
if (isset($_POST['submit'])) {
    // Mengambil nilai dari form
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $barang = mysqli_real_escape_string($conn, $_POST['barang']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $telp = mysqli_real_escape_string($conn, $_POST['no_telp']);
    $order = mysqli_real_escape_string($conn, $_POST['order']);

    // Menjalankan query dengan prepared statement
    $query = mysqli_prepare($conn, "INSERT INTO tbl_order (nama, barang, detail, alamat, no_telp, `order`) VALUES (?, ?, ?, ?, ?, ?)");

    // Memeriksa kesalahan pada prepared statement
    if ($query) {
        // Mengaitkan parameter
        mysqli_stmt_bind_param($query, "ssssss", $nama, $barang, $detail, $alamat, $telp, $order);

        // Menjalankan prepared statement
        $success = mysqli_stmt_execute($query);

        if ($success) {
            echo '<script>alert("Pesanan telah diproses."); location.href="index.php"</script>';
        } else {
            echo '<script>alert("Pesanan gagal diproses.");</script>';
        }

        // Menutup prepared statement
        mysqli_stmt_close($query);
    } else {
        // Menampilkan pesan kesalahan jika terjadi masalah dengan prepared statement
        echo "Error: " . mysqli_error($conn);
    }
}

// Menutup koneksi
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <title>Order Form</title>
</head>
<body>
    <h2>Order Now!!</h2>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="barang">Barang:</label>
        <input type="text" name="barang" required><br>

        <label for="detail">Detail:</label>
        <textarea name="detail" required></textarea><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label for="no_telp">No. Telp:</label>
        <input type="text" name="no_telp" required><br>

        <label for="order">Order:</label>
        <input type="text" name="order" required><br>

        <input type="submit" name="submit" value="Submit Order">
    </form>
</body>
</html>
