<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $query = "UPDATE tespsikologi SET nama='$nama' WHERE id='$id'";
    $result = mysqli_query ($connect, $query) ;

    if($result) {
        echo "Berhasil update data";
?>
    <a href="dataAdmin.php"> Lihat data </a>
<?php
    }
    else{
        echo "Gagal update data" . mysqli_error($connect) ;
    }
?>