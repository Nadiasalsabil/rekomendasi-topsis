<?php

    include '../action/connection.php';

    $id      = $_GET['id'];

    $edit    = "SELECT * FROM waktu WHERE id = $id";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error($konek));
    $row     = mysqli_fetch_array($hasil);

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Data Waktu Peminjaman
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Waktu Peminjaman</a></li>
        <li class="active"> Tambah Data Waktu Peminjaman</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="../action/u_waktu.php">
                <br><br>
                <div class="box-body">
                    <input type="text" name="id" value="<?php echo $row['id'] ?>" hidden>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lama Peminjaman</label>
                        <input type="text" class="form-control" value="<?php echo $row['lama_peminjaman'] ?>" name="waktu" id="exampleInputEmail1" placeholder="Waktu Peminjaman">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>