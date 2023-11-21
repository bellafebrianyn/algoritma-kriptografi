<?php
session_start();

$nama_admin = $_SESSION['session_username'];

if (!isset($_SESSION['session_username'])) {
    header("location:index.php");
    exit();
}
include 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/icon.png" type="image/x-icon">
    <title>Form Data Pasien</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="assets/rs.png" alt="" style="width: 50px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataEncrypt.php">Data Enkripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataDecrypt.php">Data Dekripsi</a>
                    </li>
                </ul>
                <a class="navbar-text" href="logout.php">
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 150px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">

            <div class="card-body py-5 px-md-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h4 class="fw-bold mb-5">Data Pribadi Pasien</h4>

                        <form method="POST" action="" enctype="multipart/form-data">

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1">NIK</label>
                                        <input type="text" id="form3Example1" class="form-control" name="nik">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example2">Nama Lengkap</label>
                                        <input type="text" id="form3Example2" class="form-control" name="nama" />
                                    </div>
                                </div>
                            </div>

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1">Tanggal Lahir</label>
                                        <input type="date" id="form3Example1" class="form-control" name="tgl_lahir" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example2">No. HP</label>
                                        <input type="text" id="form3Example2" class="form-control" name="nohp" />
                                    </div>
                                </div>
                            </div>

                            <!-- Alamat input -->
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                            </div>

                            <!-- Section Rekam Medis -->
                            <h4 class="fw-bold mb-5" style="margin-top: 50px;">Data Rekam Medis</h4>
                            <!-- No Medis Input -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1">No. Rekam Medis</label>
                                        <input type="text" id="form3Example1" class="form-control" name="norm" />
                                    </div>
                                </div>
                                <!-- Gambar Medis input -->
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1">Gambar Medis</label>
                                        <input type="file" name="gambar" class="form-control" id="inputGroupFile02">
                                    </div>
                                </div>

                                <!-- Riwayat Penyakit input -->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Kondisi Medis</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kondisi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Hasil Tes Laboratorium dan Diagnostik</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="hasil"></textarea>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4" name="data_enkripsi">
                                    Submit
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<?php
if (isset($_POST['data_enkripsi'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $norm = $_POST['norm'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $kondisi = $_POST['kondisi'];
    $hasil = $_POST['hasil'];


    $gambar = (file_get_contents($tmp_file));
    if ($_FILES['gambar']['size'] > 0) {
        $fileName = explode('.', $_FILES['gambar']['name']);
        $ext = strtolower(end($fileName));

        $extention_support = array('jpg', 'jpeg', 'png', 'gif', 'bmp');
        if (in_array($ext, $extention_support)) {
            $image_location = 'image/' . $_FILES['gambar']['name'];
            try {
                $enkripRot13Nik = str_rot13($nik);
                $enkripRot13Nohp = str_rot13($nohp);
                $enkripRot13Alamat = str_rot13($alamat);
                $enkripRot13Norm = str_rot13($norm);
                $enkripRot13Hasil = str_rot13($hasil);

                $cipherType = "AES-192-CTR";
                //$iv_length = openssl_cipher_iv_length($cipherType);
                $encryption_iv = '1234567891011121';
                $encryption_key = 'kriptomenyenangkan';

                $encryptionNik =  openssl_encrypt($enkripRot13Nik, $cipherType, $encryption_key, 0, $encryption_iv);
                $encryptionNohp =  openssl_encrypt($enkripRot13Nohp, $cipherType, $encryption_key, 0, $encryption_iv);
                $encryptionAlamat =  openssl_encrypt($enkripRot13Alamat, $cipherType, $encryption_key, 0, $encryption_iv);
                $encryptionNorm =  openssl_encrypt($enkripRot13Norm, $cipherType, $encryption_key, 0, $encryption_iv);
                $encryptionHasil =  openssl_encrypt($enkripRot13Hasil, $cipherType, $encryption_key, 0, $encryption_iv);

                if (!file_exists('image/')) {
                    mkdir('image/', 0777, true);
                }
                move_uploaded_file($tmp_file, $image_location);
                $imageData = file_get_contents($image_location);
                $imageEncoded = base64_encode($imageData);
                $encryptionImage =  openssl_encrypt($imageEncoded, $cipherType, $encryption_key, 0, $encryption_iv);

                $query = mysqli_query($connect, "INSERT INTO pasien VALUES ('','$encryptionNik','$nama','$tgl_lahir','$encryptionNohp','$encryptionAlamat','$encryptionNorm','$encryptionImage','$kondisi','$encryptionHasil')");
            } catch (Exception $error) {
                echo "Error " . $error->getMessage();
            }
        }
    }
}
?>

</html>