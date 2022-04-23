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
        <h1 style="text-align: center;">Data Tabel</h1>
        <hr>
        <a href="create.php"><button class="btn btn-dark right">Tambah Data</button></a>
        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action" >
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_114 ORDER BY id_114") or die(mysqli_error($koneksi));
                        if(mysqli_num_rows($sql)>0){
                        $no=1;
                        while($data = mysqli_fetch_assoc($sql)){
                            echo '
                            <tr>
                                <td>'.$no.'</td> 
                                <td>'.$data['id_114'].'</td>
                                <td>'.$data['nama_114'].'</td>
                                <td>'.$data['email_114'].'</td>
                                <td>
                                    <a href="update.php?id_114='.$data['id_114'].'" class="btn btn-secondary btn-sm">Edit</a>
                                    <a href="delete.php?id_114='.$data['id_114'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data?\')">Hapus</a>
                                </td>
                            </tr>
                            ';
                            $no++;
                        }
                        }else{
                            echo '
                            <tr>
                                <td colspan="6">Tidak ada data!</td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>