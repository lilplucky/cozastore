<!DOCTYPE html>
<html>
<?php
  include('adminpartials/session.php');
  include('adminpartials/head.php');

?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
?>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class ="col-sm-9">

<?php 
include("../partials/connect.php");

$id=$_GET['pro_id'];
$sql="select * from tradein where id='$id'";
$results=$connect->query($sql);
$final=$results->fetch_assoc();

?>
<h3>Name: <?php echo $final['name']?></h3><hr><br>
<h3>Contact Email: <?php echo $final['email']?></h3><hr><br>
<h3>Description: <?php echo $final['description']?></h3><hr><br>
<h3>Customer Valued Price: KSH <?php echo $final['price']?></h3><hr><br>
<img src="../handler/<?php echo $final['picture']?>" alt="No File" style="height:300; width:300px">




        </div>


          <div class="col-sm-3">
          </div>

    </section>
    <!-- /.content -->
  </div>

<?php
include('adminpartials/footer.php')
?>
  </body>
</html>
