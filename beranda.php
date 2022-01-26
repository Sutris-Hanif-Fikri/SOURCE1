<div class="container">
    <div class="row">
        <div class ="col-xs-12">
        <body>  
        </div>
         
  
    <div class="container">
      <div class="container-fluid"><br>  
        <div class="row">    
    
            
       
        </div>
    </div>
    <div class="row">
        
        <!--akhir colomn kedua-->
        
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>
           
   
            <div class="panel panel-success">
                <div class="panel-heading">
        
                <h3 class="panel-title">SIPS BPKAD KAB.ASAHAN</h3>
                <hr>
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_vckswclv.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
                <hr>
                <marquee width="250" height="40">#CEGAHCOVID-19 #PAKAIMASKER</marquee>
    
                    <h3 class="panel-title">Masuk Ke Sistem</h3>

                </div>
                <div class="panel-body">
                    <form class="form-center" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>
                            <br>
                            
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                    
                                </button>
                                <hr>
                                Copyright &COPY; <?= date('Y')?> Developer Kampoeng 
       
                            </div>
                         
                            
                    </form>
                    
                </div>
            </div>
            
        </div>
            <?php } ?>
    </div>
    <img center alt="image-sample" src="img/bpkad.png" class="img-responsive" width="35%" > 
    <video style="border:0px; width:600px; height:20  0px; margin:20px 50px;" src=img/ash.mp4 autoplay loop muted >>
   
</div>
<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner">
                        <h2 class="section-title mb-5" style="color: Black">Layanan Publik</h2>
                        <hr>
                      </div>
                      <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                            <div class="banner-image">
                              <img alt="cover-image" src="Assets/LAPOR.png" class="img-fluid" width="60%">
                            </div>
                            <div class="card-body text-center">
                              <h5><a href="https://www.lapor.go.id/" >LAPOR</a></h5>
                            </div>
                          </div>

                          <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                            <div class="banner-image">
                              <img alt="cover-image" src="Assets/ppid.png" class="img-fluid" width="60%">
                            </div>
                            <div class="card-body text-center">
                              <h5><a href="http://ppid.asahankab.go.id/" >PPID</a></h5>
                            </div>
                          </div>
                      
                          <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                           <div class="banner-image">
                            <img alt="cover-image" src="Assets/e-planning.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="http://eplanning.asahankab.go.id/" >E-Planning</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/buletin.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="https://e-buletin.asahankab.go.id/home" >E-Buletin</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/asada.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="https://data.asahankab.go.id/" >Asada</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/kliping.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="https://kliping.asahankab.go.id/" >E-Kliping</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/perizinan.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="http://eperizinan.asahankab.go.id/" >E-Perizinan</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/subdomain-opd-.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="https://opd.asahankab.go.id/" >OPD</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/radio-online.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="https://radio.asahankab.go.id/" >Radio Streaming</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/cctv.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="http://cctv.asahankab.go.id/" >CCTV Online</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/pajak.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="http://smartpajak.asahankab.go.id/" >Smart Pajak</a></h5>
                          </div>
                        </div>
                         <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/lpse.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="http://103.15.243.151/eproc4/" >LPSE</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                          <div class="banner-image">
                            <img alt="cover-image" src="Assets/subdomain-opd-.png" class="img-fluid" width="60%">
                          </div>
                          <div class="card-body text-center">
                            <h5><a href="https://www.kominfo.go.id/content/all/laporan_isu_hoaks" target=__blank>Laporan Isu Hoaks</a></h5>
                          </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                            <div class="banner-image">
                              <img alt="cover-image" src="Assets/ppdb.png" class="img-fluid" width="60%">
                            </div>
                            <div class="card-body text-center">
                              <h5><a href="https://ppdb.asahankab.go.id/" >PPDB</a></h5>
                            </div>
                          </div>
                          <!-- corona -->
                          <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                            <div class="banner-image">
                              <img alt="cover-image" src="Assets/corona.png" class="img-fluid" width="60%">
                            </div>
                            <div class="card-body text-center">
                              <h5><a href="https://corona.asahankab.go.id/" >Portal COVID-19</a></h5>
                              <a href="https://saberliasahan.id"></a>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                            <div class="banner-image">
                              <img alt="cover-image" src="Assets/sisnaker.png" class="img-fluid" width="60%">
                            </div>
                            <div class="card-body text-center">
                              <h5><a href="https://kemnaker.go.id/" >SISNAKER</a></h5>
                            </div>
                          </div>
                          <div class="col-xl-2 col-lg-2 col-md-2 site-content-inner text-center">
                            <div class="banner-image">
                              <img alt="cover-image" src="Assets/gowisata.png" class="img-fluid" width="60%">
                            </div>
                            <div class="card-body text-center">
                              <h5><a href="https://asahangowisata.asahankab.go.id/" >GO WISATA ASAHAN</a></h5>
                        
                  
                            </div>