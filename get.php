<?php

$con = new mysqli('host','user','pass','db');
if (mysqli_connect_errno()) {
  exit('Conectare nereusita: '. mysqli_connect_error());
}

$cr = "SELECT * FROM `mesaje`";
$result=$con->query($cr);

if ($result->num_rows > 0) {
	$max=$result->num_rows;
	$x=rand(1,$max);
	$i=1;
	while($row = $result->fetch_assoc()) {
		if ($i == $x) 
		{
			echo ",,".$row['mesaj']."''";
			if ($row['nume']!=NULL) 
			{
				echo "<br>From:".$row['nume'];	
			}
			if ($row['facebook']!=NULL)
			{
				echo "<br>Facebook:<a href=".$row['facebook'].">".$row['facebook']."</a>";
			}
			$date=date('j-F-Y');
			$ip=$_SERVER['REMOTE_ADDR'];
			$idd=$row['id'];
			
			$sql="SELECT * FROM `vizitatori` WHERE `ip`='$ip'";
			$ress=$con->query($sql);
			if ($ress->num_rows>0)
			{
					$sql= "UPDATE `vizitatori` SET `lastget`='$date' WHERE `ip`='$ip' ";
					if (!$con->query($sql)) {
						echo 'Error: '. $con->error;
					}
					$sql= "UPDATE `vizitatori` SET `getm`='$idd' WHERE `ip`='$ip' ";
					if (!$con->query($sql)) {
						echo 'Error: '. $con->error;
					}
			}
			else 
			{
				$sqq = "INSERT INTO `vizitatori` (`ip`, `lastget`, `getm`)
				VALUES ('$ip','$date','$idd')";
				if (!$con->query($sqq) === TRUE) {
				 echo 'Eroare: '. $con->error;
				 echo '<br>';
				}
			}
			
		}
		$i++;
	}
}
else 
{
	echo 'Ne pare rau dar nu exista urari :( ';
}

$con->close();

?>