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

    $sql = "INSERT INTO validasi_alamat (no_ukg,nama,alamat,provinsi,kota,kecamatan,kelurahan,kodepos) VALUES('$no_ukg','$nama','$alamat','$provinsi','$kota','$kecamatan','$kelurahan','$kodepos')";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../redirect.php");
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
