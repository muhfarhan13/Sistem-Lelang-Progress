<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['tb_masyarakat'])) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>

    <style>
        body {
            overflow-x: hidden;
        }

        #cover {
            background-repeat: no-repeat;
            width: 95em;
            height: 18cm;
        }

        .col-4 {
            position: absolute;
            margin-left: 200px;
        }

        .col-7 {
            margin-left: 380px;
            margin-top: 57px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ps-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h2 class="text-dark text-center">Lelang<label class="text-danger">In</label></h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <img id="cover" src="img/cover.jpg" alt="">
    <div class="row">
        <div class="col-4 mt-5">
            <h1>Lelang</h1>
        </div>
        <div class="col-7">
            <hr size="8" style="color: rgb(0, 255, 21);">
        </div>
    </div>
    <div class="container mt-5" id="listproduk">
        <?php
        $sql = "SELECT * FROM tb_barang";
        $query = mysqli_query($connect, $sql);

        while ($produk = mysqli_fetch_array($query)) {
            echo '<div class="card float-start ms-4" style="width: 18rem;">';
            echo '<img src="' . $produk['gambar_barang'] . '" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">' . $produk['nama_barang'] . '</h4>';
            echo '<h5 class="card-title">Rp.' . number_format($produk['harga_awal']) . '</h5>';
            echo '<p class="card-text">' . $produk['deskripsi_barang'] . '</p>';
            echo '<a href="#" class="btn btn-primary">Lelang</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

</body>

</html>