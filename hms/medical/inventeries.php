<?php
session_start();



 ?>
<?php require "assets/function.php" ?>
<?php require 'assets/db.php';?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="js/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <title><?php echo siteTitle(); ?></title>
  <?php require "assets/autoloader.php" ?>
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>

  </style>

</head>
<body style="background: #ECF0F5;padding:0;margin:0">
<div class="dashboard" style="position: fixed;width: 18%;height: 100%;background:#222D32">
  <div style="background:white;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black">
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
  <div style="color:white;background:#ffffff" >
    
    <div class="clear"></div>
  </div>

<?php 
if (isset($_GET['catId']))
{
  $catId = $_GET['catId'];
  $array = $con->query("select * from categories where id='$catId'");
  $catArray =$array->fetch_assoc();
  $catName = $catArray['name'];
  $stockArray = $con->query("select * from inventeries where catId='$catArray[id]'");
 
}
else
{
  $catName = "All Inventeries";
  $stockArray = $con->query("select * from inventeries");
}
  include 'assets/bill.php';
 ?>
  <div class="content" >
   <ol class="breadcrumb ">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?php echo $catName ?></li>
    </ol>
  <div class="tableBox" style="margin-top: 5vw;">
    <table id="dataTable" class="table table-bordered table-striped" style="z-index: -1">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th>Unit</th>
        <th>Price Per Unit</th>
        <th>Supplier Name</th>
        <th>Company</th>
        <th></th>
      </thead>
     <tbody>
      <?php $i=0;
        while ($row = $stockArray->fetch_assoc()) 
        { 
          $i=$i+1;
          $id = $row['id'];
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['unit']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['supplier']; ?></td>
            <td><?php echo $row['company']; ?></td>
            <?php 
            if (!empty($_SESSION['bill'])) 
            {
             
            foreach ($_SESSION['bill'] as $key => $value) 
            {
              if (in_array($row['id'], $_SESSION['bill'][$key])) 
              {
                echo "<td>Selected</td>";break;
              }            
               else
               {
              ?>
            <td id='selection<?php echo $i; ?>'><button class="btn btn-primary btn-xs" onclick="addInBill('<?php echo $id ?>','<?php echo $i; ?>')">Select</button></td>
              <?php break;} } } else {?>
              <td id='selection<?php echo $i; ?>'><button class="btn btn-primary btn-xs" onclick="addInBill('<?php echo $id ?>','<?php echo $i; ?>')">Select</button></td>
              <?php } ?>
              
          </tr>
      <?php
        }
       ?>
     </tbody>
    </table>
  </div>                      

  </div>  <!-- ending tag for content -->

</div> <!-- ending tag for margin left -->



</body>
</html>

<script type="text/javascript">
  function addInBill(id,place)
  { 
    var value = $("#counter").val();
    value ++;
    var selection = 'selection'+place;
    $("#bill").fadeIn();
    $("#counter").val(value);
    $("#"+selection).html("selected");
    $.post('called.php?q=addtobill',
               {
                   id:id
               }
        );

  }
  $(document).ready(function()
  {
    $(".rightAccount").click(function(){$(".account").fadeToggle();});
    $("#dataTable").DataTable();
   
  });
</script>

  <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>