<?php 
    $tglaw = $_GET['tglaw'];
    $tglak = $_GET['tglak'];
	include 'config/db.php';
    $query = mysqli_query($conn, "SELECT * FROM tb_suratkeluar WHERE tgl_keluar BETWEEN '$tglaw' AND '$tglak'");
    $query2 = mysqli_query($conn, "SELECT * FROM tb_instansi");
    $it = mysqli_fetch_array($query2);
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        h1, h2, h5, p, table {
            color: black;
            font-family:'Times New Roman';
        }
        .table td, .table th {
            color: black;
            border: 1px solid black;
        }
        table, tr, th, td {
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-2">
                <img src="assets/img/Dishub.png"<?=$it['logo']?>" alt="<?=$it['logo']?>" width="100%">
            </div>
            <div class="col-md-9">
                <h1 class="text-center"><?=$it['institusi']?></h1>
                <p class="text-center"><?=$it['alamat']?><br>
                Telp <?=$it['notelp']?>
                Email <?=$it['email']?></p>
            </div>
			<div class="col-md-1"></div>
        </div>
        <hr style="border:3px solid #000">
        <h5 class="text-center font-weight-bold">LAPORAN SURAT KELUAR</h5>
        <p class="text-center">Laporan Surat Keluar dari tanggal 
        <?php 
        $newDate3 = date("d-m-Y", strtotime($tglaw));  
        echo $newDate3;
        ?> sampai dengan tanggal 
        <?php 
        $newDate3 = date("d-m-Y", strtotime($tglak));  
        echo $newDate3;
        ?></p>
        <div class="row">
            <table class="table table-bordered text-dark" width="100%">
                <tr align="center">
                    <th>No</th>
                    <th>No. Surat Keluar</th>
                    <th>No. Agenda</th>
                    <th>Perihal Surat</th>
                    <th>Tujuan Surat</th>
                    <th>Bidang</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Keluar</th>
                    <th>Keterangan</th>
                </tr>
                <?php 
                     $no = 1;
                    while($row=mysqli_fetch_assoc($query)){
                ?>
                <tr align="center">
                    <td><?=$no++?></td>
                    <td><?= $row['no_suratkeluar'] ?></td>
                    <td><?= $row['no_agenda'] ?></td>
                    <td><?= $row['isi_surat'] ?></td>
                    <td><?= $row['tujuan_surat'] ?></td>
                    <td><?= $row['judul_klasifikasi'] ?></td>
                    <td><?php 
                            $newDate = date("d-m-Y", strtotime($row['tgl_surat']));  
                            echo $newDate;
                        ?>
                    </td>
                    <td><?php 
                            $newDate2 = date("d-m-Y", strtotime($row['tgl_keluar']));  
                            echo $newDate2;
                        ?>
                    </td>
                    <td><?= $row['ket_suratkeluar'] ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
    <script>
		window.print();
	</script>
</html>