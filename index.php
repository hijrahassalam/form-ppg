<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Title -->
    <title>Landkit</title>
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style type="text/css">
        .poppins-font {
            font-family: 'Poppins', sans-serif;
            ;
        }
    </style>
    <script src="api.js" defer></script>
</head>

<body style="background-color: #0b1c33;">
    <div class="container d-flex flex-column">
        <div class="row align-items-center gx-0 min-vh-100 justify-content-center">
            <div class="col-12 col-md-10 col-lg-9 col-xl-8">
                <div class="row text-center">
                    <p class="">
                    <h1 class="poppins-font text-light">Form PPG</h1>
                    <h7 class="poppins-font text-light">Fakultas Keguruan dan Ilmu Pendidikan</h7>
                    <h7 class="poppins-font text-light">Universitas Sebelas Maret Surakarta</h7>
                    </p>
                </div>
                <div class="card px-3 py-3" style="margin: 20px;">
                    <form>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="email" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nomor UKG</label>
                                <input type="email" class="form-control" id="no-ukg" placeholder="Nomor UKG" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat" rows="3" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                                <select type="email" class="form-control" id="provinsi" onchange="updateKota(this)" required disabled>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kota</label>
                                <select type="text" class="form-control" id="kota" onchange="updateKecamatan(this)" required disabled>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                <select type="text" class="form-control" id="kecamatan" onchange="updateKelurahan(this)" required disabled>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                                <select type="text" class="form-control" id="kelurahan" required disabled>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" id="kode-pos" placeholder="Kode Pos" required>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['submit'])) {
    $no_ukg = $_POST['no_ukg'];
    $nama = $_POST['nama'];
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

</html>