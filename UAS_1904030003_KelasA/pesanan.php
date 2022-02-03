<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <title>Pesanan</title>
</head>

<body>
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-4"><span class="font-weight-bold">Ilham Rastaurant</span></h1>
      <hr>
      <p class="lead font-weight-bold">Terima Kasih Sudah Memesan </p>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  bg-dark">
    <div class="container">
      <a class="navbar-brand text-white" href="index.html"><strong>Ilham</strong> Rastaurant</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link mr-4" href="index.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4" href="daftar_menu.html">DAFTAR MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4" href="pesanan.html">PESANAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4" href="#">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->
  <div class="container">
    <div class="judul-pesanan mt-5
      \">

      <h3 class="text-center font-weight-bold">DATA PESANAN</h3>

    </div>
    <table class="table table-bordered" id="example">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">No. Meja</th>
          <th scope="col">Nama Pesanan</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>01</td>
          <td>Salad</td>
          <td>2</td>
          <td>2022-02-03</td>
          <td>Belum Bayar</td>
          <td>
            <a href="#" class="badge badge-danger">Hapus Data</a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>10</td>
          <td>Shusi</td>
          <td>2</td>
          <td>2022-02-03</td>
          <td>Bayar</td>
          <td>
            <a href="#" class="badge badge-danger">Hapus Data</a>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>06</td>
          <td>Jus Mangga</td>
          <td>6</td>
          <td>2022-02-03</td>
          <td>Belum Bayar</td>
          <td>
            <a href="#" class="badge badge-danger">Hapus Data</a>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>02</td>
          <td>Jahe Hangat</td>
          <td>3</td>
          <td>2022-02-03</td>
          <td>Bayar</td>
          <td>
            <a href="#" class="badge badge-danger">Hapus Data</a>
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>07</td>
          <td>Coffe Capucino</td>
          <td>2</td>
          <td>2022-02-03</td>
          <td>Belum Bayar</td>
          <td>
            <a href="#" class="badge badge-danger">Hapus Data</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Akhir Menu -->


  <!-- Awal Footer -->
  <hr class="footer">
  <div class="container">
    <div class="row footer-body">
      <div class="col-md-6">
        <div class="copyright">
          <strong>Ilham Romadona</strong> <i class="far fa-copyright"></i> 2022 - Designed by Mahasiswa UNIS</p>
        </div>
      </div>

      <div class="col-md-6 d-flex justify-content-end">
        <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Footer -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
</body>

</html>