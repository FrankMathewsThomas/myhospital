<?php
session_start();


 ?>
<?php require "assets/function.php" ?>
<?php require 'assets/db.php';?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo siteTitle(); ?></title>
  <?php require "assets/autoloader.php" ?>
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>

  </style>
  <?php 
  $notice="";
  if (isset($_POST['safeIn'])) 
  {
    $filename = $_FILES['inPic']['name'];
    move_uploaded_file($_FILES["inPic"]["tmp_name"], "photo/".$_FILES["inPic"]["name"]);
    if ($con->query("insert into categories (name,pic) value ('$_POST[name]','$filename')")) {
      $notice ="<div class='alert alert-success'>Successfully Saved</div>";
    }
    else
      $notice ="<div class='alert alert-danger'>Not saved Error:".$con->error."</div>";
  }

   ?>
</head>
<body style="background: #ECF0F5;padding:0;margin:0">
<div class="dashboard" style="position: fixed;width: 18%;height: 100%;background:#222D32">
  <div style="background:#FFFFFF;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black">
    <a href="index.php" style="color: white;text-decoration: none;"><img class="slogo" src="photo/logo.jpg" alt="logo"style="height: 90px;px;width:240px"> </a>
  </div>
 
  <div style="background: #FFF;border-top:1px solid #c8c7cc;border-bottom:1px solid #c8c7cc;font-size: 10pt;padding: 11px;color: #79978F">MAIN NAVIGATION</div>
  <div>
    <div style="background:#FFF;color: grey;border-bottom:1px solid #c8c7cc;;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i class="fa fa-dashboard fa-fw"></i> Dashboard</span></div>
    <div class="item">
      <ul class="nostyle zero">
        <a href="index.php"><li style="color: grey"><i class="fa fa-circle-o fa-fw"></i> Product Categories</li></a>
        <a href="./../../index.html"><li style="color: grey"><i class="fa fa-circle-o fa-fw"></i> Back to Home</li></a>
       
      </ul>
    </div>
  </div>
  
  <div class="item">
      
    </div>
</div>
<div class="marginLeft" >
  <div style="color:#000;background:#FFF" >
    
    <div class="clear"></div>
  </div>


  <div class="content2">
    <?php echo $notice; ?>
    <div style="margin-top: 3vw;">
      <span style="font-size: 16pt;color: #333333">Product Categories </span>
    </div>

  <?php 
    $array = $con->query("select * from categories");
    while ($row = $array->fetch_assoc()) 
    {
      $array2 = $con->query("select count(*) from inventeries where catId = '$row[id]'");
      $row2 = $array2->fetch_assoc();
  ?>
    <a href="inventeries.php?catId=<?php echo $row['id'] ?>"><div class="box2 col-md-3">
     <div class="center"> <img src="photo/<?php echo $row['pic'] ?>" style="width: 155px;height: 122px;" class='img-thumbnail'></div>
      <hr style="margin: 7px;">
      <span style="padding: 11px"><strong style="font-size: 10pt">Name</strong><span class="pull-right" style="color:blue;margin-right: 11px;"><?php echo $row['name'] ?></span></span>
      <hr style="margin: 7px;">
      <span style="padding: 11px"><strong style="font-size: 10pt">Available Qty</strong><span class="pull-right" style="color:blue;margin-right: 11px"><?php echo $row2['count(*)']; ?></span></span>
    </div></a>
  <?php
    }
   ?>
  </div>
</div>

<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Inventory</h4>
      </div>
      <div class="modal-body"> <form method="POST" enctype="multipart/form-data">
        <div style="width: 77%;margin: auto;">
         
          <div class="form-group">
            <label for="some" class="col-form-label">Name</label>
            <input type="text" name="inName" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="2" class="col-form-label">Picture</label>
            <input type="file" name="inPic" class="form-control" id="2" required>
          </div>
          
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="safeIn">Save Inventory</button>
      </div>
    </form>
    </div>

  </div>
</div>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>

