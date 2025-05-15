<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>

<body>
  <!---Navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-body shadow-lg fixed-top bg-opacity-25"
    data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ulasan Pembeli</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#produk">Produk</a>
          </li> -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a> -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#action">Action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#staff">Staff</a></li>
              <li>
              </li>
              <li><a class="dropdown-item" href="index1.php">Ulasan Pembeli</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
<!--         
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" style="margin-right:10px;" type="submit">search</button>
        </form> -->
        <!-- <ul class="navbar-nav navbar-right"> -->
          <!--modal Login -->
          <!-- <a class="btn btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#idLogin"><b>Login</b></a>
        </ul> -->
      </div>
    </div>
  </nav>

  <!--review pembeli-->
  <div class="container-fluid pt-5 pb-5 my-5 produk-text">
    <div class="container text-center">
      <h2 class="display-3" id="produk"><b>Review Pembeli</b></h2>
      <div class="row pt-4 gx-4 gy-4 ms-auto">
        <div class="col-md-4">
          <div class="card crop-img" style="width: 25rem;">
            <img src="img/iyu.jpg" class="card-img-top" width="200" height="" />
            <div class="card-body">
              <h5 class="card-title">Hoodie</h5>
              <p class="card-text">"Nyaman dipakai, adem & tidak panas. Tersedia dalam berbagai pilihan warna & ukuran. Tampil percaya diri & stylish dengan baju ini."
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img" style="width: 25rem;">
            <img src="img/asep.jpg" class="card-img-top" width="200" height="" />
            <div class="card-body">
              <h5 class="card-title">T-Shirt</h5>
              <p class="card-text">"Berkualitas tinggi, cocok dipakai sebagai baju keluarga. Tersedia dalam berbagai pilihan warna & ukuran."
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img" style="width: 25rem;">
            <img src="img/atep.jpg" class="card-img-top" width="200" height="" />
            <div class="card-body">
              <h5 class="card-title">Polo Shirt</h5>
              <p class="card-text">"Berkualitas tinggi, cocok dipakai sebagai baju keluarga. Tersedia dalam berbagai pilihan warna & ukuran."
              </p>
            </div>
          </div>
        </div>
        <div class="button"><a href="index.php" class="btn btn-danger">logout</a></div>

     
</body>

</html>   