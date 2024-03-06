<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administator</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
    <center>
  <h1>DASHBOARD</h1>
    </center>
  <?php
  //ambil koneksi
  include "../config.php";

  //hitung jumlah barang dari tb_barang
  $barang = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_barang");
  $jumlahBarang = mysqli_fetch_assoc($barang);

  //hitung jumlah pembelian dari tb_penjualan
  $penjualan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_penjualan");
  $jumlahPenjualan = mysqli_fetch_assoc($penjualan);

  //hitung jumlah pengguna dari tb_pelanggan
  $pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_pelanggan");
  $jumlahPelanggan = mysqli_fetch_assoc($pelanggan);
  ?>
      <!-- <div class="col">
        <div class="card" style="width: 10rem;">
          <img src="../foto/dashboard.admin.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            </p>
          </div>
        </div>
      </div> -->

      <!-- <div class="card">
      <div class="card-header">
        ID : <?= $_SESSION['id_login']; ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Pengguna</p>
          <footer class="blockquote-footer"><?= $_SESSION['nama_pengguna']; ?></footer>
        </blockquote>
      </div> -->
    
      <div class="row">
      <div class="col">
        <div class="card" style="width: 10rem;">
          <img src="../foto/barang.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <button type="button" class="btn btn-primary">
                Barang <span class="badge text-bg-secondary"> <?= $jumlahBarang['Jumlah']; ?></span>
              </button>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 10rem;">
          <img src="../foto/pembelian.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <button type="button" class="btn btn-primary">
                Pembelian <span class="badge text-bg-secondary"> <?= $jumlahPenjualan['Jumlah']; ?></span>
              </button>
            </p>
          </div>
        </div>

      </div>
      <div class="col">
        <div class="card" style="width: 10rem;">
          <img src="../foto/pelanggan.png" class="card-img-top" alt="..." height="135">
          <div class="card-body">
            <p class="card-text">
              <button type="button" class="btn btn-primary">
                Pelanggan <span class="badge text-bg-secondary"> <?= $jumlahPelanggan['Jumlah']; ?></span>
              </button>
            </p>
          </div>
        </div>
      </div>

      <div class="card">
      <div class="card-header">
        ID : <?= $_SESSION['id_login']; ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Pengguna</p>
          <footer class="blockquote-footer"><?= $_SESSION['nama_pengguna']; ?></footer>
        </blockquote>
      </div>
    </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</div>
</body>

</html>