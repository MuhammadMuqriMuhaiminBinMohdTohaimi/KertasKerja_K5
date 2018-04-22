<html>
<?php include('can.php');
include('session.php'); ?>

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
  <li><a href="index2.php">UTAMA</a></li>
  
	<li class="dropdown">
	   <a href="javascript:void(0)" class="dropbtn">MENU</a>
	       <div class="dropdown-content">
	   <a href="kakalator.php">KALKULATOR</a>
	   <a href="history.php">LOG KIRA-KIRA</a>
	   </div>
	   
  <li><a href="aboutadmin.php">ABOUT ADMIN</a></li>
    <li><a href="logout.php">LOG OUT</a></li>
  </li>
</ul>

</body>
</div>

<div id="kandungan">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
. {display:none;}
</style>
<body>

<div class="w3-container">
	<center>
		 <div class="w3-panel w3-leftbar w3-sand">
    <p class="w3-xxlarge w3-serif"><i>LOG KIRA-KIRA KALKULATOR</i></p>
  </div>
</center>
</div>
<center>
<?php
include('can.php');
$sql="SELECT * from kira ORDER BY n1";
$result=mysql_query($sql)or die(mysql_error());
?>
<center><body bgcolor="">
<form>


<p><center><strong>Senarai Nama User kakalator</strong></center></p>
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2" style="width:70%">
<tr>
<td align="center" bgcolor="lightgreen"><strong>Nombor 1</strong></td>
<td align="center" bgcolor="lightgreen"><strong>Nombor 2</strong></td>
<td align="center" bgcolor="lightgreen"><strong>Operasi</strong></td>
<td align="center" bgcolor="lightgreen"><strong>Hasil</strong></td>
<td align="center" bgcolor="lightgreen"><strong>Catatan</strong></td>

</tr>

<?php
while($row=mysql_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row["n1"]."</td>";
	echo"<td>".$row["n2"]."</td>";
	echo"<td>".$row["op"]."</td>";
	echo"<td>".$row["result"]."</td>";
	echo"<td>".$row["catatan"]."</td>";

}
echo"</table>";
echo"<center>";
echo"<br>";
?>
</body>
</html>

</html>