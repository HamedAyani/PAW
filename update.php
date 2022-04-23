<?php
include('koneksi.php');
?>
<link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- <link href="assets/css/custom.min.css" rel="stylesheet"> -->
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
    <div class="container" style="margin-top: 20px;">
    <h2>Update Data</h2>
    <hr>

    <?php
    
    if(isset($_GET['id_114'])){
        $id_114 = $_GET['id_114'];
        
        $select = mysqli_query($koneksi, "SELECT * FROM tbl_114 WHERE id_114='$id_114'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($select) == 0){
            echo '<div class="alert alert-warning">Data tidak ditemukan.</div>';
            exit();
        }else{
            $data = mysqli_fetch_assoc($select);
        }
    }
    ?>

    <?php
        if(isset($_POST['submit'])){
            // $id_114 = $_POST['id_114'];
            $nama_114 = $_POST['nama_114'];
            $email_114 = $_POST['email_114'];

            $sql = mysqli_query($koneksi, "UPDATE tbl_114 SET nama_114='$nama_114', email_114='$email_114' WHERE id_114='$id_114'") or die(mysqli_error($koneksi));

            if($sql){
                echo '<script>alert("Berhasil mengubah data."); document.location="read.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
            }
        }
        ?>

    <form action="update.php?id_114=<?php echo $id_114; ?>" method="post">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">ID</label>
            <div class="col-md-6 col-sm-6">
                <input type="int" name="id_114" class="form-control" size="4" value="<?php echo $data['id_114']; ?>" readonly required>
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="nama_114" class="form-control" value="<?php echo $data['nama_114']; ?>" required>
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
            <div class="col-md-6 col-sm-6">
                <input type="email" name="email_114" class="form-control" value="<?php echo $data['email_114']; ?>" required>
            </div>
        </div>

        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <input type="submit" name="submit" class="btn btn-primary" value="simpan">
                <a href="read.php" class="btn btn-warning">kembali</a>
            </div>
        </div>
    </form>
</div>
</body>