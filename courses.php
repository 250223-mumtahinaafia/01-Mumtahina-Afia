<?php
	include "header.php";
	include "dbconnect.php";

	$sql = "SELECT * FROM courses";
	$result = $conn->query($sql);
?>

<h1 align="center">Offered work List</h1>
<table>
	<tr>
		<th>SL</th>
		<th>Work mane</th>
		<th>Type</th>
		<th>Salary</th>
		<th>Duration (hours)</th>
	</tr>
	<?php
		while($row=$result->fetch_assoc()){
			
			echo "<tr>"; 
			echo "<td>".$row["id"] ."</td>";	
			echo "<td>".$row["title"] ."</td>";	
			echo "<td>". $row["content"]."</td>";	
			
			echo "<td>". $row["salary"]."</td>";	
			echo "<td>". $row["duration"]."</td>";	
			echo "</tr>"; 
		}
	
	?>
			
<table>
		
<?php
	include "footer.php";
?>		


