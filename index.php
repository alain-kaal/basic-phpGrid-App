<?php  require "inc/header.php"; ?>
<?php 
  require_once("phpGrid/conf.php"); 
  
  $dg_path = "phpGrid/server/classes/cls_datagrid.php";
  require_once($dg_path); 
?>

<h2>salut</h2>
<?php   
$dg = new C_DataGrid("SELECT * FROM Orders", "orderNumber", "Orders");
$dg->display();
?>

<?php  require "inc/footer.php"; ?>