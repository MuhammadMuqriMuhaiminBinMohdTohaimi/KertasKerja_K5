


<?php
include ('can.php');
$username=$_GET['username'];
$query="delete from loginpengguna where username='$username'";
$result=mysql_query($query);



if ($result==TRUE){ 
echo'<script>';
echo'alert ("Berjaya");';
echo'window.location.href=("maklumat.php");';
echo'</script>';
}
if ($result==FALSE){ 
echo'<script>';
echo'alert ("Gagal");';
echo'window.location.href=("maklumat.php");';
echo'</script>';
}
?>
