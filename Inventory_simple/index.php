<?php
ob_start();
require_once("./config/conn.php");
require_once("./models/database.php");
$connection = new Database($host, $user, $pass, $dbnm);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <!-- JavaScript -->

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- <script src="assets/js/bootstrap.js"></script> --> <!-- Bootstrap.js Tubrukan dengan dataTable.js harus di hilangkan salah satu -->
    <script src="assets/dataTables/datatables.min.js"></script>
    
    
  </head>

  <body>

    <!-- <div id="wrapper"> -->
    <div id="wrapper" class="d-flex flex-column">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SB Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="?page=dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Barang <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=barang">Data Banrang</a></li>
                <li><a href="?page=barang_grafik">Grafik</a></li>
                <li><a href="#">Report</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User 10 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
        <?php
        if(@$_GET['page'] == 'dashbord' || @$_GET['page'] == ''){
          include('views/dashbord.php');
        }elseif (@$_GET['page'] == 'barang') {
          include('views/barang.php');
        }elseif (@$_GET['page'] == 'barang_grafik') {
          include('views/barang_grafik.php');
        }
        ?>
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <hr>
<!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container text-center my-auto">
        <div class="text-center my-auto">
          <span>❰❱ with 🖤 by <a href="https://github.com/ilyanazalun/"> <strong>Ilyan Aza-lun</strong></a> 2019</span>
        </div>
      </div>
    </footer>
 
     
    <script>
      $(document).ready(function(){
        $("#dataBarang").DataTable();
      });
    </script>

  </body>
</html>