<?php
include('koneksi.php');
?>
<link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<link href="assets/css/custom.min.css" rel="stylesheet">

<head>
    <style>
        body, html {
  height: 100%;
  margin: 0;
  background-color: whitesmoke;
}
    </style>
</head>

<body>
<h1 style="text-align: center;">Tambah Data</h1>
<hr>
<?php
if(isset($_POST['submit'])){
    $id_114 = $_POST['id_114'];
    $nama_114 = $_POST['nama_114'];
    $email_114 = $_POST['email_114'];

    $cek = mysqli_query($koneksi, "SELECT * FROM tbl_114 WHERE id_114='$id_114'") or die(mysqli_error($koneksi));
    
    
    if(mysqli_num_rows($cek)==0){
        $sql = mysqli_query($koneksi, "INSERT INTO tbl_114(id_114, nama_114, email_114) values('$id_114', '$nama_114', '$email_114')") or die(mysqli_error($koneksi));

        if($sql){
            echo '<script>alert("Berhasil menambahkan data."); document.location="read.php";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses tambah data, ID Sudah Terdaftar.</div>';
    }
}
?>

<form action="create.php" method="post">
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">ID</label>
            <input type="int" name="id_114" class="form-control" size="5" required>

    </div>
    
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
        <input type="text" name="nama_114" class="form-control" required>
    </div>

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
        <input type="email" name="email_114" class="form-control" required>
    </div>

    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <input type="submit" name="submit" class="btn btn-primary" value="simpan">
            <a href="read.php" class="btn btn-warning">kembali</a>
        </div>
    </div>
</form>
</body>