<html>
<head>
<title>Edit Data</title>
</head>
    <body>
    <?php
    include "koneksi.php"; 
    $connect = mysqli_connect("localhost", "root", "", "tespsikologi"); 
    $id = $_GET['id']; 
    $query = "SELECT * FROM tespsikologi WHERE id='$id'"; 
    $result = mysqli_query($connect, $query);
    ?>
    <table>
        <form method="POST" enctype="multipart/from-data" action="prosesEdit.php">
        <?php
        while($row=mysqli_fetch_array($result)){
        ?>
            <tr>
                <td> Id </td>
                <td> <input type="number" name="id" value="<?php echo $row['id']; ?>" readonly> </td>
            </tr>
            <tr>
                <td> Nama Lengkap</td>
                <td> <input type="text" name="nama" value="<?php echo $row[ 'nama' ];?>"> </td>
            </tr>
            <tr>
                <td> <input type="submit" name="edit" value="Edit Data"></td>
            </tr>
        <?php
        }
        ?>
        </form>
    </body>
</html>