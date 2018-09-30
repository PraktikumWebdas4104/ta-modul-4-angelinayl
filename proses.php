<h6> Angelina Yona Listianingsih </h6>
<form method="POST" action=>
<tr> 
	<h2><b><center> <td> Genre Film yang Disukai	: </td> </center> </b> </h2>
<td> <center> <input type="checkbox" name="Genre[]" value="Horror"> Horror </center></td>
<br><br>
<td> <center> <input type="checkbox" name="Genre[]" value="Action"> Action <center></td>
<br><br>
<td> <center> <input type="checkbox" name="Genre[]" value="Anime"> Anime </center></td>
<br><br>
<td> <center> <input type="checkbox" name="Genre[]" value="Thriller"> Thriller </center></td>
<br><br>
<td> <center> <input type="checkbox" name="Genre[]" value="Animasi"> Animasi </center></td>
<br><br>

</tr>

---------------------------------------------------------------------------------------------------------------------------------------------
<tr>
	
<h2><b><center> <td> Tempat Wisata Tujuan Travelling	: </td> </center> </b> </h2>
<td> <center> <input type="checkbox" name="Tempat[]" value="Bali"> Bali </center></td>
<br><br>
<td> <center> <input type="checkbox" name="Tempat[]" value="Raja Ampat"> Raja Ampat <center></td>
<br><br>
<td> <center> <input type="checkbox" name="Tempat[]" value="Pulau Derawan"> Pulau Derawan </center></td>
<br><br>
<td> <center> <input type="checkbox" name="Tempat[]" value="Bangka Belitung"> Bangka Belitung </center></td>
<br><br>
<td> <center> <input type="checkbox" name="Tempat[]" value="Labuan Bajo"> Labuan Bajo </center></td>
<br><br>

<center> <input type="submit" name="Send" value="Send"> 
<input type="reset" name="Delete" value="Delete"> </center>
<br>

</form>



<?php 
if(isset($_POST['Send'])){
	$film = $_POST["Genre"];
	foreach($film as $filmini){
		echo $filmini."<br>";
	}

 	echo "<br>";
 	$tempat = $_POST["Tempat"];
 	foreach ($tempat as $tempattravelling){
 		echo $tempattravelling."<br>";
 	}
 }
 ?>
