<?php
session_start();
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo'<script>';
echo'alert ("Jangan kosongkan");';
echo'window.location.href=("login.php");';
echo'</script>';}
else {
$username=$_POST['username'];
$password=$_POST['password'];

$connection = mysql_connect("localhost", "root", "");

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$db = mysql_select_db("calcu", $connection);
mysql_query($db);
$query = mysql_query("select * from loginpengguna where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; 
header("location:index2.php");

	if ($username=="admin"&&$password=="123")
	{
		header( 'Location:adminindex.php');
	}

}
else {
echo'<script>';
echo'alert ("Username dan password salah");';
echo'window.location.href=("login.php");';
echo'</script>';}
mysql_close($connection); 
}
}
?>