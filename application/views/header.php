<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SILADES | <?php echo $tittle ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="breadcrumb-item"><a href="<?php echo site_url('Login') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active"><?php echo $tittle ?></li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo site_url('Login') ?>" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/logo.jpeg" alt="SILADES" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">Silades</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['username'] ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar nav-justified flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard Button -->
            <li class="nav-item">
              <a href="<?php echo site_url('Login') ?>" class="nav-link">
                <div class="d-flex justify-content-start align-items-center">
                  <i class="fa fa-home mr-2"></i>
                  <p>Dashboard</p>
                </div>
              </a>
            </li>

            <!-- Insert Data Button -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('program/tambah'); ?>">
                <div class="d-flex justify-content-start align-items-center">
                  <i class="fas fa-plus mr-2"></i>
                  <p>Tambah Program</p>
                </div>
              </a>
            </li>

            <!-- Tampil Data Button -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('program/tampil_data'); ?>">
                <div class="d-flex justify-content-start align-items-center">
                  <i class="fas fa-eye mr-2"></i>
                  <p>Daftar Program</p>
                </div>
              </a>
            </li>

            <!-- Logout Button -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login/logout') ?>">
                <div class="d-flex justify-content-start align-items-center">
                  <i class="fas fa-sign-out-alt mr-2"></i>
                  <p>Keluar</p>
                </div>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">