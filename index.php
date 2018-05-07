<?php 
	include 'konek.php';
	$sql="Select * from mahasiswa";
	if ($result=mysqli_query($link,$sql))
	{
		$row=mysqli_fetch_assoc($result);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Menampilkan data</title>
 </head>
 <body>
 	<table border=1>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 		</tr>
 		<tr>
 		<?php
 			$i=1;
		//while ($row=mysqli_fetch_row($result))
		
		//{
		?>
 			<td><?=$i?></td>
 			<td><?=$row['nama']?></td>
 		</tr>
 	<?php
 		$i++;}
 		mysqli_free_result($result);
 	//}
 	mysqli_close($link);
 	?>
 	</table>
 </body>
 </html>