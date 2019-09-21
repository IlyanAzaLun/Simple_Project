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
        <h1>Obat
            <h4>
                <small>Edit Data Obat</small>
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
            $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat WHERE id_obat = '$id' ") or die (mysqli_error($con));
            $data = mysqli_fetch_array($sql_obat)
            ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?=$data['id_obat']?>">
                    <label for="nama">Nama Obat</label>
                    <input type="text" name="nama" class="form-control" value="<?=$data['nama_obat']?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <textarea type="text" name="ket" class="form-control" required><?=$data['ket_obat']?></textarea>
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