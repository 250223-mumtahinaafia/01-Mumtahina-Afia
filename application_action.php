<?php
	include "dbconnect.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name=$_POST["name"];
		$eml=$_POST["email"];
		$phon=$_POST["phone"];
		$gen=$_POST["gender"];
		$dob=$_POST["dob"];
		$course_id=$_POST["course"];
		
		$sql="INSERT INTO applicant(id, name, email, phone, gender,dob, course_id)
		values(NULL, '$name', '$eml', '$phon', '$gen','$dob','$course_id')";
		$result=$conn->query($sql);
		if($result)
		{
			//echo "Success";
			header("Location:applicant_list.php");
		}
		else
		{
			echo "Application failed";
		}
	}
	
?>