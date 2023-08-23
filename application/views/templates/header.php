<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UTS WEB - Zaenal Alfian</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
      
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url('examples/index') ?>">Zen Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/examples')?>">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu Toko</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('examples/data_barang')?>">Data Barang</a>
          <a class="dropdown-item" href="<?php echo site_url('examples/kategori_barang')?>">Kategori Barang</a>
          <a class="dropdown-item" href="<?php echo site_url('examples/data_pelanggan')?>">Data Pelanggan</a>
          <a class="dropdown-item" href="<?php echo site_url('examples/data_alamat')?>">Data Alamat</a>
          <a class="dropdown-item" href="<?php echo site_url('examples/tenor_cicilan')?>">Tenor Cicilan</a>
          <a class="dropdown-item" href="<?php echo site_url('examples/data_kredit')?>">Data Kredit</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('examples/about')?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('examples/contact')?>">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('examples/news')?>">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('examples/biodata')?>">Biodata</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('examples/users')?>">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('examples/testimoni')?>">Testimoni</a>
      </li>
     
    </ul>
  </div>


  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown ml-auto">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Account</a>
            <a class="dropdown-item" href="#">Update Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('/news') ?>">Log out</a>
          </div>
        </li>
        </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>