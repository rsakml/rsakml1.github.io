<?php
    include "koneksi.php";
    $id = $_GET ['id'] ;

    $query = "DELETE FROM tespsikologi WHERE id='$id'";
    $result = mysqli_query ($connect, $query) ;
    if ($result) {
        echo "Data berhasil dihapus";
?>
    <a href="dataAdmin.php"> Lihat data </a>

<?php
    }
    else{
        echo "Data gagal dihapus" . mysqli_error ($connect) ;
    }
?>