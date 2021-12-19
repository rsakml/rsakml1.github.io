<html>
<head>
  <title>Data Tes Psikologi</title>
  <link rel="stylesheet" type="text/css" href="a.css"/>
</head>
<body>
    <h2 align=center>Data Tes Psikologi<h2>
    <table>
        <tr>
            <th> No. </th>
            <th> Nama </th>
            <th> Kategori 1 </th>
            <th> Kategori 2 </th>
            <th> Kategori 3 </th>
            <th> Aksi </th>
        </tr>
        <?php
            include "koneksi.php";
            $query = "SELECT * FROM tespsikologi";
            $result = mysqli_query($connect, $query) ;

            if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
            <td> <?php echo $row ["id"] ?> </td>
            <td> <?php echo $row ["nama"] ?> </td>
            <td> <?php echo $row ["kategori1"] ?> </td>
            <td> <?php echo $row ["kategori2"] ?> </td>
            <td> <?php echo $row ["kategori3"] ?> </td>
            <td><a href="hapus.php?id=<?php echo $row ['id']; ?>"> Hapus </a></td>
            <td><a href="editForm.php?id=<?php echo $row ['id']; ?>"> Edit </a></td>
            </tr>
        <?php
            }
                }else{
                echo "0 result";
                }
        ?>
            
        </tr>
    </table>
    <br>
        <button type="submit" class="btn btn-secondary mt-3 mb-4" name="submit"><a href="index.html">Logout</a></button>
</body>
</html>