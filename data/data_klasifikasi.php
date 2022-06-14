<?php
    include '../config/db.php';
    if($_GET['act']== 'tambah'){
        $judul = $_POST['judul'];
        $keterangan = $_POST['keterangan'];
    
        //query tambah
        $querytambah =  mysqli_query($conn, "INSERT INTO tb_klasifikasi VALUES(NULL , '$judul' , '$keterangan')");
    
        if ($querytambah) {
            echo "<script language='javascript'>alert('Berhasil Menambah Data'); document.location.href='../bidang.php'; </script>";
        }
        else{
            echo "<script language='javascript'>alert('Gagal Menambah Data');". mysqli_error($conn);
        }
    }
    elseif ($_GET['act'] == 'hapus'){
        $id = $_GET['id'];
    
        //query hapus
        $queryhapus = mysqli_query($conn, "DELETE FROM tb_klasifikasi WHERE id_klasifikasi = '$id'");
    
        if ($queryhapus) {
            echo "<script language='javascript'>alert('Berhasil Menghapus Data'); document.location.href='../bidang.php'; </script>";
        }
        else{
            echo "<script language='javascript'>alert('Gagal Menghapus Data');". mysqli_error($conn);
        }
    
        mysqli_close($koneksi);
    }
    elseif($_GET['act']=='edit'){
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $keterangan = $_POST['keterangan'];

        //query edit
        $queryedit = mysqli_query($conn, "UPDATE tb_klasifikasi SET judul_klasifikasi='$judul' , keterangan='$keterangan' WHERE id_klasifikasi='$id' ");
    
        if ($queryedit) {
            echo "<script language='javascript'>alert('Berhasil Mengedit Data'); document.location.href='../bidang.php';</script>";    
        }
        else{
            echo "<script language='javascript'>alert('Gagal Mengedit Data');". mysqli_error($conn);
        }
    }
?>