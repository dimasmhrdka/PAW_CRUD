<?php

$mysqli = mysqli_connect("localhost", "root", "", "db_dimas");  

$id = $_GET['id_093'];

$result = mysqli_query($mysqli, "DELETE FROM tbl_093 where id_093 = $id");

header("Location:index.php");
?>