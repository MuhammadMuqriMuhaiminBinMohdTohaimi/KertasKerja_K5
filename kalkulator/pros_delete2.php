


<?php
include ('can.php');
$n1=$_GET['n1'];
$query="delete from kira where n1='$n1'";
$result=mysql_query($query);



if ($result==TRUE){ 
echo'<script>';
echo'alert ("Berjaya");';
echo'window.location.href=("historyadmin.php");';
echo'</script>';
}
if ($result==FALSE){ 
echo'<script>';
echo'alert ("Gagal");';
echo'window.location.href=("historyadmin.php");';
echo'</script>';
}
?>
