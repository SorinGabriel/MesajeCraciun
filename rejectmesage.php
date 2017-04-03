<html>

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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
function getmesage()
{	
	$.ajax({
	url: "get.php",
	type: "GET",
	success: function(response)
	{
		document.getElementById("display").innerHTML=response;
	},
	dataType: "html"
	});
}
</script>
</head>

<body>
<center>
<div id="content">
<?php
$id=$_GET['id'];

$con = new mysqli('host','user','pass','db');
if (mysqli_connect_errno()) {
  exit('Conectare nereusita: '. mysqli_connect_error());
}

$sql = "DELETE FROM `mesajenotcheck` WHERE `id`=$id";

// executa interogarea si verifica daca exista erori
if (!$con->query($sql)) {
	 echo 'Error: '. $con->error;
}
else 
{
	echo 'Deleted';
}

$con->close();
?>
</div>
</center>
</body>

</html>