<?php
include_once 'db.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_ukg = $_POST['no_ukg'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $kodepos = $_POST['kodepos'];

    $sql = $conn->prepare("INSERT INTO validasi_alamat (nama,no_ukg,alamat,provinsi,kota,kecamatan,kelurahan,kodepos) VALUES (?,?,?,?,?,?,?,?)");
    $sql->bind_param('sisssssi', $nama, $no_ukg, $alamat, $provinsi, $kota, $kecamatan, $kelurahan, $kodepos);

    if ($sql->execute()) {
        header("Location: ../redirect.php");
    } else {
        echo "Error: " . $sql . " - " . mysqli_error($conn);
    }
    $sql->close();
    mysqli_close($conn);
}
