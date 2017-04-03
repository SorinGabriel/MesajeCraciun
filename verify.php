<html>

<head>
<title>Christmas spirit</title>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<style type="text/css">
	body
	{
	background-image:url('background.jpg');
	background-attachment:fixed;
	background-size:cover;
	font-size:24px;
	font-family:24px;
	}
	
	h1 {
   text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
	font-family:"Oswald";
	text-decoration:none;
	font-size:20px;
	color:white;
	}
	
	input {
	background-color:#C3E1F9;
	height:30px;
	width:200px;
	}
	
	textarea
	{
	background-color:#C3E1F9;
	}
	
	#content {
   text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
	   font-family:"Oswald";
	color:white;
	margin-top:50px;
	width:800px;
	}

	#content table {
   text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
	   font-family:"Oswald";
	color:white;
	}
</style>
</head>

<body>
<center>
<div id="content">
<?php

$pass=$_GET['p'];

if ($pass==="christmasgifts")
{
	$con = new mysqli('mysql12.000webhost.com','a3898021_1','t3lombilo','a3898021_1');
	if (mysqli_connect_errno()) {
	  exit('Conectare nereusita: '. mysqli_connect_error());
	}

	$cr = "SELECT * FROM `mesajenotcheck`";
	$result=$con->query($cr);
	if ($result->num_rows>0)
	{
		echo '<table><tr><td>Mesaj:</td><td>Nume:</td><td>Facebook:</td><td></td><td></td></tr>';
		while ($row=$result->fetch_assoc())
		{
			echo '<tr><td>'.$row['mesaj'].'</td><td>'.$row['nume'].'</td><td>'.$row['facebook'].'</td><td><a href="messageaccept.php?id='.$row['id'].'">Accept</a></td><td><a href="rejectmesage.php?id='.$row['id'].'">Reject</a></td></tr>';
		}
	}
	else 
	{
		echo 'No new messages';
	}
	
	$con->close();
}
?>
</div>
</center>
</body>

</html>