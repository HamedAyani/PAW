<?php
include('koneksi.php');

if(isset($_GET['id_114'])){

    $id_114 = $_GET['id_114'];
    
    $cek = mysqli_query($koneksi, "SELECT * FROM tbl_114 WHERE id_114='$id_114'") or die(mysqli_error($koneksi));
    
    if(mysqli_num_rows($cek) > 0){

        $delete = mysqli_query($koneksi, "DELETE FROM tbl_114 WHERE id_114='$id_114'") or die(mysqli_error($koneksi));
        if($delete){
            echo '<script>alert("Berhasil menghapus data."); document.location="read.php";</script>';
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="read.php";</script>';
        }
    }else{
        echo '<script>alert("ID Tidak Ditemukan."); document.location="read.php";</script>';
    }
}else{
    echo '<script>alert("ID Tidak Ditemukan."); document.location="read.php";</script>';
}

?>
<link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="assets/css/custom.min.css" rel="stylesheet">