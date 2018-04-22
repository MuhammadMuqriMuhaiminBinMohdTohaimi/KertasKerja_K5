<html>
<head><title>LAMAN RASMI KOLEJ VOKASIONAL PERDAGANGAN JOHOR BAHRU</title>
<style>
body
{
	font-family:arial;
	font-size:15;
	background-color: lightblue;
}
#wraper
{
	width:1050px;
	margin:0 auto;
}
#header
{
	border:1px solid blue;
	height:250px;
}
#menu
{
	border:1px solid blue;
	background-color: #ccc;
}
#menu ul
{
	list-style-type:none;
	margin:0;
	padding:0;
}
#menu ul li
{
	list-style-type:none;
	margin:0;
	padding:0;
	display:inline-table;
}
#menu ul li:hover
{
	list-style-type:none;
	margin:0;
	padding:0;
	background-color:grey;
}
#menu ul li a
{
	list-style-type:none;
	margin:0;
	padding:0;
	text-decoration:none;
	display: block;
	line-height:40px;
	padding: 0 10px;
}
#kandungan
{
	border:1px solid blue;
	min-height:400px;
	padding:10px;
}
#footer
{
	border:1px solid blue;
	text-align:center;
	min-height:100px
	padding:10px;
	background-color: #ccc;
}


</style>
</head>
<body>
<div id="wraper">
<div id="header">

<img src="kvp.jpg" alt="kvp" style="width:1048px;height:248px;"/>

</div>
<div id="menu">

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ccc;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: blue;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:blue}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="adminindex.php">UTAMA</a></li>
  
	<li class="dropdown">
	   <a href="javascript:void(0)" class="dropbtn">MENU</a>
	       <div class="dropdown-content">
       <a href="signupadmin.php">DAFTARKAN PENGGUNA</a>
	   <a href="kakalatoradmin.php">KALKULATOR</a>
	   <a href="historyadmin.php">LOG KIRA-KIRA</a>
	   </div>
  <li><a href="about.php">ABOUT US</a></li>
    <li><a href="maklumat.php">INFO USER</a></li>
    <li><a href="logout.php">LOG OUT</a></li>
  </li>
</ul>

</body>
</div>

<div id="kandungan">
<?php include('can.php'); 
include('session.php');?>

<head>
<meta charset="UTF-8">

<body bgcolor="">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

<form id="form" name="form" method="post" action="loginproses.php">

<h1><center> Daftarkan Pengguna </center></h1>
<h4><center> Sila Masukkan Nama Pengguna dan Kata Laluan. </center></h4>
<center>
<table width="400" border="0">
<tr>
<th scope="col">Username:</th>
<th scope="col"><div align="left">
<input type="text" name="username" placeholder="username" size="20"/>
</div>
</th>
</tr>
<tr>
<th scope="col">Password:</th>
<th scope="col"><div align="left">
<input type="password" name="password" placeholder="password"  size="10"/>
</div>
</th>
</tr>
</table>
<br>
<input type="submit" name="submit" value="Sign In">
<input type="submit" name="submit" value="reset">
<br>

</form>
</body>
</center>
</html>