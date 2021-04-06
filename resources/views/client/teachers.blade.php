<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Tạo tài liệu</title>

  <link rel="stylesheet" href="./assets/admin/css/style.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/admin/dist/css/adminlte.min.css">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>  
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-sign-out-alt"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-custom elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link a-client">
      <img src="./assets/admin/dist/img/logo_hvhq.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>HỌC VIỆN HẢI QUÂN</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
        <i class="fas fa-user-shield"></i>
          <a href="#" class="d-block a-client">Username</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link active">
            <i class="fas fa-user-graduate"></i>
              <p>
                Tài liệu
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
  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
			  <div class="row">
                    <div class="col-sm-4">
                      <!-- select -->
                      <div class="form-group">
                        <label>Khoa</label>
                        <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-building"></i></span>
                    </div>
                    <input type="text" class="form-control" value="Công nghệ thông tin" disabled>
                  </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Bộ môn</label>
                        <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-book"></i></span>
                    </div>
                    <input type="text" class="form-control" value="Toán" disabled>
                  </div>
                      </div>
                    </div>
					<div class="col-sm-4">
                    <label>Thêm tài liệu</label>
                      <div class="form-group">
                      <a href="/teacher"><button type="button" class="btn btn-custom">Thêm tài liệu</button></a>
                      </div>
                    </div>
                  </div>

                <div class="card-tools">
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Tên tài liệu</th>
					  <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					  <td>
                            <button type="button" class="btn btn-custom">Xem</button>
                            <button type="button" class="btn btn-custom">Sửa</button>
                            <button type="button" class="btn btn-custom">Xóa</button>
                            <button type="button" class="btn btn-custom">Download</button>
                        </td>
                    </tr>
                    <tr>
                      
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					  <td>
                            <button type="button" class="btn btn-custom">Xem</button>
                            <button type="button" class="btn btn-custom">Sửa</button>
                            <button type="button" class="btn btn-custom">Xóa</button>
                            <button type="button" class="btn btn-custom">Download</button>
                        </td>
                    </tr>
                    <tr>
                      
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					  <td>
                            <button type="button" class="btn btn-custom">Xem</button>
                            <button type="button" class="btn btn-custom">Sửa</button>
                            <button type="button" class="btn btn-custom">Xóa</button>
                            <button type="button" class="btn btn-custom">Download</button>
                        </td>
                    </tr>
                    <tr>
                      
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					  <td>
                            <button type="button" class="btn btn-custom">Xem</button>
                            <button type="button" class="btn btn-custom">Sửa</button>
                            <button type="button" class="btn btn-custom">Xóa</button>
                            <button type="button" class="btn btn-custom">Download</button>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="./assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="./assets/admin/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="./assets/admin/plugins/chart.js/Chart.min.js"></script>
<script src="./assets/admin/dist/js/demo.js"></script>
<script src="./assets/admin/dist/js/pages/dashboard3.js"></script>
</body>
</html>
