<?php
include_once("../_header.php");

// use Ramsey\Uuid\Uuid;
// use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

// // Generate a version 4 (random) UUID object
// $uuid4 = Uuid::uuid4();
// echo $uuid4->toString() . "\n"; // i.e. 25769c6c-d34d-4bfe-ba98-e0ee856f3e7a
?>
<!--START TAMBAH DATA OBAT -->
    <div class="box">
        <h1>Dokter
            <h4>
                <small>Edit Data Dokter</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs">
                        <i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php
            $id = @$_GET['id'];
            $sql_dokter = mysqli_query($con, "SELECT *  FROM tb_dokter WHERE id_dokter = '$id'")or die(mysqli_error($con));
            $data = mysqli_fetch_array($sql_dokter);
            ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Dokter</label>
                    <input type="hidden" name="id" value="<?=$data['id_dokter']?>">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nama_dokter']?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="spesialis">Spesialis</label>
                    <input type="text" name="spesialis" id="spesialis" class="form-control" value="<?=$data['spesialis']?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" name="alamat" id="alamat" class="form-control" required><?=$data['alamat']?></textarea>
                </div>
                <div class="form-group">
                    <label for="telp">No Telepon</label>
                    <input type="number" name="telp" id="telp" class="form-control" value="<?=$data['no_telp']?>" required>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" value="Simpan" name="edit" class="btn btn-success" >
                </div>
            </form>
        </div>
    </div>
<!--START TAMBAH DATA OBAT -->
<?php 
include_once("../_footer.php");
 ?>