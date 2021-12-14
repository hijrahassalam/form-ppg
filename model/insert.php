<?php

// Check If form submitted, insert form data into users table.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $no_ukg = $_POST['no_ukg'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $kodepos = $_POST['kodepos'];

    // include database connection file
    include_once("db.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO peserta (no_ukg,nama,alamat,provinsi,kota,kecamatan,kelurahan,kodepos) VALUES('$no_ukg','$nama','$alamat','$provinsi','$kota','$kecamatan','$kelurahan','$kodepos')");

    // Show message when user added
    echo "User added successfully.";
}
?>