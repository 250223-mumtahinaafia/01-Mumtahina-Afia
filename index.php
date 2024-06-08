<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM facilities";
	$result=$conn->query($sql);
	
?>
	<div class="announce">
		<h2> Announcement for application</h2>
		With a lot of ambition on art & craft I started may journey at 2020. I find myself on the brushes,colors make my life full with joyous.
 Even though I am a beginner I want start my business with colors. I have made houndrads of walmates,severe dresses. Now unofficially I completed 18 orders of dresses,
 20+ arts 7 crafts.After 2022 I start work with my Two friends Zeba and Shefa. Both of them really good at their work. They are the reasonabl
 thats why I found confident on my online business. Now we need more employees. So hope you will join us
		<h2>We offer:</h2>
		<ul>
		<?php
			while($row=$result->fetch_assoc()){
				echo "<li>".$row["description"]."</li>";
			}
		?>
		</ul>
	</div>
	 </div> 
   <div class="gallary">
   <img src="a.jpeg">
   <img src="b.jpeg">
   <img src="c.jpeg">
   <img src="d.jpeg">
   <img src="e.jpeg">
   <img src="f.jpeg">
   </div>	
<?php
	include "footer.php";
?>

