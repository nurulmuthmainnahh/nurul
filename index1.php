<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td></tr>
	</table>
</form>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
 
	$data[0]['username']='ricky'; 
	$data[0]['password']='ricky';

	$data[1]['username']='resky'; 
	$data[1]['password']='resky'; 

	$data[2]['username']='ananda'; 
	$data[2]['password']='ananda';
	$login=false;
	$i=0;
	while ($i<3)
	{
		if($user==$data[$i]['username'] && $pass==$data[$i]['password']){
			echo "Login Berhasil"; $login=true;
		}
	$i++;
	} 
	if (!$login) echo "Username dan password tidak cocok";
}
?>