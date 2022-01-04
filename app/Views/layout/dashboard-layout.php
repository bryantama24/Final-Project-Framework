<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></title>
  <base href="/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= route_to('user.home') ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= route_to('user.profile') ?>" class="nav-link">Profile</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= route_to('mahasiswa') ?>" class="nav-link">Mahasiswa</a>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= route_to('buku') ?>" class="nav-link">Buku</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= route_to('peminjaman') ?>" class="nav-link">Peminjaman</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= route_to('pengembalian') ?>" class="nav-link">Pengembalian</a>
        </li>
      </ul>




      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Perpustakaan STMIK</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/logo.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?= route_to('user.profile') ?>" class="d-block">Laporan Kelompok</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="<?= route_to('user.home') ?>" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= route_to('user.profile') ?>" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profile

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('mahasiswa') ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Mahasiswa
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('buku') ?>" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Buku
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('peminjaman') ?>" class="nav-link">
                <i class="nav-icon fas fa-book-reader"></i>
                <p>
                  Peminjaman
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('pengembalian') ?>" class="nav-link">
                <i class="nav-icon fas fa-archive"></i>
                <p>
                  Pengembalian
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $pageTitle ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= route_to('user.home') ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $pageTitle ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

          <?= $this->renderSection('content'); ?>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Page Spesific Script -->
  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>