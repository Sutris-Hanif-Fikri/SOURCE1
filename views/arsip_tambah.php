<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Surat Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_arsip" class="col-sm-3 control-label">DATA</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruang_arsip" class="form-control">
                                <option value="Data Kepegawaian">Data Kepegawaian</option>
                                    <option value="Data Kantor">Data Kantor</option>
									<option value="Data Pendatapan Daerah">Data Pendapatan Daerah</option>
									<option value="Data Pengeluaran Daerah">Data Pengeluaran Daerah</option>
                                </select>
                            </div>
                        </div>
						 
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Di beri Oleh</label>
                            <div class="col-sm-9">
                                <input type="text" name="para_pihak" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">NAMA/ID SURAT</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_perkara"class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>

                     


                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Tersedia</option>
									<option value="Di Terima">Di Terima</option>
									<option value="Penghapusan">Telah di hapus</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Surat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $ruang=$_POST['ruang_arsip'];
	$rak=$_POST['no_rak'];
	$laci=$_POST['no_laci'];
	$boks=$_POST['no_boks'];
  $arsip=$_POST['para_pihak'];
	$noperkara=$_POST['no_perkara'];
  $tglmasuk=$_POST['tgl_masuk'];
  $pengantar=$_POST['pengantar'];
	$penerima=$_POST['penerima'];
  $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO arsip VALUES ('','$ruang','$rak','$laci','$boks','$arsip','$noperkara','$tglmasuk','$penerima','$pengantar','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
