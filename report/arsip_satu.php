<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Surat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM arsip WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendataan Surat Bpkad Kab.Asahan </h2>
                        <h4> Mekar Baru, Kec. Kota Kisaran Barat, Kabupaten Asahan, Sumatera Utara 21211</h4>
                        <hr>
                        <h3>DATA SURAT</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>NAMA/ID SURAT</td> <td><?= $data['no_perkara'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Data</td> <td><?= $data['ruang_arsip'] ?></td>
                                </tr>
                                
                                <tr>
                                    <td>Di beri Oleh</td> <td><?= $data['para_pihak'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
								
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Fikri Akbar S<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>