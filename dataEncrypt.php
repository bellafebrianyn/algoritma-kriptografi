<?php
session_start();

$admin_name = $_SESSION['session_username'];

if (!isset($_SESSION['session_username'])) {
    header("location:index.php");
    exit();
}

$urut = 1;
include 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/icon.png" type="image/x-icon">
    <title>Data Pasien Enkripsi</title>
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
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="dataEncrypt.php">Data Enkripsi</a>
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
                    <div class="col-lg-12">
                        <h4 class="fw-bold mb-5">Data Pasien</h4>
                        <table class="table table-success table-striped">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">No. HP</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. Rekam Medis</th>
                                        <th scope="col">Gambar Medis</th>
                                        <th scope="col">Kondisi Medis</th>
                                        <th scope="col">Hasil Lab & Diagnostik</th>
                                    </tr>
                                </thead>

                                <?php
                                $query = mysqli_query($connect, "SELECT * FROM pasien");
                                while ($data = mysqli_fetch_array($query)) {
                                    $decoded_image = ($data['gambar']);
                                ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <center><?php echo $urut ?>.</center>
                                            </td>
                                            <td><?php echo "$data[nik]" ?></td>
                                            <td>
                                                <?php echo "$data[nama]" ?>
                                            </td>
                                            <td>
                                                <?php echo "$data[tgl_lahir]" ?>
                                            </td>
                                            <td>
                                                <?php echo "$data[nohp]" ?>
                                            </td>
                                            <td style=" text-align: left; padding: 8px;max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                <?php echo "$data[alamat]" ?>
                                            </td>
                                            <td>
                                                <center><?php echo "$data[norm]" ?></center>
                                            </td>
                                            <td style=" text-align: left; padding: 8px;max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                <?php echo "$data[gambar]" ?>
                                                <?php echo ($decoded_image) ?>
                                            </td>
                                            <td>
                                                <?php echo "$data[kondisi]" ?>
                                            </td>
                                            <td style=" text-align: left; padding: 8px;max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                <?php echo "$data[hasil]" ?>
                                            </td>
                                            <?php
                                            $urut++;
                                            ?>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </table>
                    </div>
                </div>
                <button type="button" class="btn btn-primary"><a href="home.php" style="color: white; text-decoration:none;">Kembali</a></button>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>