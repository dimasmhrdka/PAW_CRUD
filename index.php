<?php

$mysqli = mysqli_connect("localhost", "root", "", "db_dimas"); 

$result = mysqli_query($mysqli, "SELECT * FROM tbl_093");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
    </head>
    <body>
        <a href="create.php">Add</a><br/><br/>
        <table width='80%' border=1>
            <tr>
                <th>Nama</th> 
                <th>Email</th> 
                <th>Aksi</th>
            </tr>
            
            <?php  
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['nama_093']."</td>";
                echo "<td>".$user_data['email_093']."</td>";  
                echo "<td><a href='edit.php?id_093=$user_data[id_093]'>Edit</a> | <a href='delete.php?id_093=$user_data[id_093]'>Delete</a></td></tr>";        
            }
            ?>
        </table>
    </body>
</html>