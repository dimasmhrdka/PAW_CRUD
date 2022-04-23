<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <h1>Tambah Data</h1>
        <a href="index.php">Home</a>
        <br/><br/>
        <form action="create.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>

                <tr> 
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>

                <tr> 
                    <td></td>
                    <td><input type="submit" name="Submit" value="create"></td>
                </tr>
            </table>
        </form>

        <?php

        $mysqli = mysqli_connect("localhost", "root", "", "db_dimas");  

        if(isset($_POST['Submit'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];

            $result = mysqli_query($mysqli, "INSERT INTO tbl_093 VALUES('','$nama','$email')");
            
            echo "Data Berhasil Ditambahkan. <a href='index.php'>Home</a>";
        }
        ?>
    </body>
</html>