<?php

    include 'connection.php';

    $id         = $_POST['id'];
    $waktu      = $_POST['waktu']; 

    $update 	    = "UPDATE waktu SET lama_peminjaman='$waktu' WHERE id='$id'";
    $updatejenis	= mysqli_query($konek, $update)or die(mysqli_error($konek));
    
    if ($updatejenis)
    {
        echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/dashboard.php?halaman=waktu">';
    }
	else {
        print"
            <script>
                alert(\"Data Gagal Diubah!\");
                history.back(-1);
            </script>";
    }

?>