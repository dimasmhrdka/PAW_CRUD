<?php

$mysqli = mysqli_connect("localhost", "root", "", "db_dimas"); 

if(isset($_POST['update'])){	
	$id = $_POST['id'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];

	$result = mysqli_query($mysqli, "UPDATE tbl_093 SET nama_093='$nama', email_093='$email' WHERE id_093=$id");
	
	header("Location: index.php");
}
?>
<?php

$result = mysqli_query($mysqli, "SELECT * FROM tbl_093");

while($user_data = mysqli_fetch_array($result)){
	$nama=$user_data['nama_093'];
	$email=$user_data['email_093'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Edit Data</h1>
		<a href="index.php">Home</a>
		<br/><br/>

		<form name="update_user" method="post" action="edit.php">
			<table border="0">

				<tr> 
					<td>Nama</td>
					<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
				</tr>

				<tr> 
					<td>Email</td>
					<td><input type="text" name="email" value=<?php echo $email;?>></td>
				</tr>

				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id_093'];?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>

			</table>
		</form>
	</body>
</html>