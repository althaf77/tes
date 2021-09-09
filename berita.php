<?php 
include("konek.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bodi.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Web berita</title>
</head>
<body>
    <header>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-9 col-sm-9">
                <div class="menu-area">
                    <div class="limit-box">
                        <nav class="menu">
                            <ul class="menu-bar">
                                <li class="active"><a href="#home">HOME</a></li>
                                <li><a href="trending.php">Pens</a></li>
                                <li><a href="#utama">Health</a></li>
                                <li><a href="#covid">Covid 19</a></li>
                                <li><a href="lain.php">Lainnya</a></li>
                                <li><a href="#contact">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                <li class="login"><a style=text-decoration:none;color:black; href="log.php">Login</a></li>
            </div>
        </div>
    </div>
</header>
    <section id="utama">
        <div class="service">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="title">
                        <h2>Berita <strong class="black">Utama</strong></h2>
                        <span>Berita terbaru hari ini</span>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="service-box">
                        <i><img class="gmbr_fasilitas" src="gambar/1.jpg"/></i>
                        <h3>Sport</h3>
                        <p>Medali emas kedua untuk kontingen paralimpiade Indonesia ini diraih Hary/Ratri 
                            ...</p>
                            <a href="https://www.bbc.com/indonesia/indonesia-58425181" class="btn btn-info">Baca selengkapnya</a>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="service-box">
                        <i><img class="gmbr_fasilitas" src="gambar/2.jpeg"/></i>
                        <h3>Entertaiment</h3>
                        <p>Polisi menangkap Reza Pardede alias Coki Pardede yang terjerat kasus narkoba 
                            berdasarkan laporan masyarakat...
                           </p>
                           <a href="https://megapolitan.kompas.com/read/2021/09/03/17055541/polisi-penangkapan-coki-pardede-berawal-dari-laporan-warga" 
                           class="btn btn-info">Baca selengkapnya</a>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="service-box">
                        <i><img class="gmbr_fasilitas" src="gambar/3.jpg"/></i>
                        <h3>Education</h3>
                        <p>Sekolah tatap muka atau pembelajaran tatap muka (PTM) 
                            tingkat Sekolah Dasar (SD) sudah bisa digelar pada, Senin... </p>
                        </p>
                        <a href="https://zonasurabayaraya.pikiran-rakyat.com/surabaya-raya/pr-1852520657/simulasi-sekolah-tatap-muka-sd-kota-surabaya-dimulai-senin-maksimal-buka-2-kelas" 
                        class="btn btn-info">Baca selengkapnya</a>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="service-box">
                        <i><img class="gmbr_fasilitas" src="gambar/4.jfif"/></i>
                        <h3>Food</h3>
                        <p>Pernahkah Moms mendengar infused water kurma yang menjadi 
                            kesukaan Nabi? Namanya adalah nabeez ... </p>
                            <a href="https://www.orami.co.id/magazine/yuk-bikin-nabeez-infused-water-kurma-favorit-nabi/" 
                            class="btn btn-info">Baca selengkapnya</a>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="service-box">
                        <i><img class="gmbr_fasilitas" src="gambar/6.jpg"/></i>
                        <h3>Film</h3>
                        <p>dengan kemampuan untuk mengingat kehidupan pada masa sebelumnya. 
                            Mereka disebut sebagai “the Infinites ...
                            </p>
                            <a href="https://www.kompas.com/hype/read/2021/09/01/111500566/infinite-film-laga-yang-membenturkan-takhayul-ilmu-pengetahuan-dan" 
                            class="btn btn-info">Baca selengkapnya</a>
                     </div>
                  </div>
                  
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="service-box">
                        <i><img class="gmbr_fasilitas" src="gambar/7.jpg"/></i>
                        <h3>Health</h3>
                        <p>95 Persen Nakes di Maluku Sudah Divaksin, Satgas Covid-19: 
                            Mereka Harus Jadi Teladan Masyarakat ...
                            </p>
                            <a href="https://regional.kompas.com/read/2021/09/06/071117678/95-persen-nakes-di-maluku-sudah-divaksin-satgas-covid-19-mereka-harus-jadi" 
                            class="btn btn-info">Baca selengkapnya</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </section>
    <section id="covid">
        <div class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                       <div class="title">
                          <h2>Berita Covid <strong class="black">Terbaru </strong></h2>
                          <span>Perkembangan Covid 19 Di Indonesia</span>
                       </div>
                    </div>
                 </div>
                 <div class="row justify-content-center mt-5">

    <div class="table-responsive">
    <div class="row justify-content-center mt-5">
   <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="?page=<?= $aktif - 1; ?>">Previous</a></li>
    <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
    <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
    <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
    <li class="page-item"><a class="page-link"href="?page=<?= $aktif + 1; ?>">Next</a></li>
  </ul>
 <form action= "" method="POST" class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search"
        autocomplete="off" name="keyword">
        <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
      </form>
        <table id="table-datables" class="table" border="1">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Provinsi</th>
                    <th>Meninggal</th>
                    <th>Dirawat</th>
                    <th>Sembuh</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php

            $halaman=3;
            $result = mysqli_query($db, "SELECT * FROM covid");
            $jumlahcovid=mysqli_num_rows($result);
            $jumlahhalaman= ceil($jumlahcovid / $halaman);
            $aktif = (isset($_GET["page"])) ? $_GET["page"] : 1 ;
            $awal = ($halaman * $aktif) - $halaman;



            $sql= "SELECT * FROM covid LIMIT $awal, $halaman";
            $query= mysqli_query($db, $sql);
            $no=1;
            if(isset($_POST["cari"])){
               $keyword=$_POST['keyword'];
               $sql= "SELECT * FROM covid WHERE provinsi LIKE '%$keyword%' OR 
               meninggal LIKE '%$keyword%'
               LIMIT $awal, $halaman";
               $query= mysqli_query($db, $sql);
           }          
           else{
               $sql= "SELECT * FROM covid LIMIT $awal, $halaman";
               $query= mysqli_query($db, $sql);
           }  // car
            

            // car
?>
<?php
            while($member= mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$no++. "</td>";
                echo "<td>".$member['provinsi']."</td>";
                echo "<td>".$member['meninggal']."</td>";
                echo "<td>".$member['perawatan']."</td>";
                echo "<td>".$member['sembuh']."</td>";

                echo "</tr>";

            }
            ?>

            </tbody>
        </table>
    
            </div>
        </div>
    </section>
    <br>
    <section  id="contact">
          <footr>
          <div class="col-md-8 offset-md-2">
                             <div class="title">
                                <h2>You Can <strong class="black"> Contact Us</strong></h2>
                                <span>Dengan menghubungi alamat dan data dibawah ini</span>
                             </div>
                          </div>
           <div class="footer">
              <div class="container">
                 <div class="row">
                    <div class="col-md-6 offset-md-3">
                       <ul style=text-decoration:none; class="sociel">
                           <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li> <a href="#"><i class="fa fa-youtube"></i></a></li>
                       </ul>
                    </div>
              </div>
              <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="contact">
                       <h3>Alamat</h3>
                       <span>Politeknik Elektronika Negeri Surabaya<br>
                         0878 5631 7679</span>
                    </div>
                 </div>
                   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="contact">
                       <h3>Partner</h3>
                       <ul class="lik">
                           <li> <a href="www.kompas.com">kompas.com</a></li>
                           <li> <a href="detik.com">detik.com</a></li>
                           <li> <a href="bola.com">bola.com</a></li>
                           <li> <a href="zonasurabayaraya.pikiran-rakyat.com">zonasurabayaraya.pikiran-rakyat.com/</a></li>
                            <li> <a href="pens.ac.id">pens.ac.id</a></li>
                       </ul>
                    </div>
                 </div>
                   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="contact">
                       <h3>Menu</h3>
                        <ul class="lik">
                           <li> <a href="#">Pens</a></li>
                           <li> <a href="#">Health</a></li>
                           <li> <a href="#">Entertaiment</a></li>
                           <li> <a href="#">Sport</a></li>
                           <li> <a href="#">Covid 19</a></li>
                    </div>
                 </div>
                   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="contact">
                       <h3>About</h3>
                       <span>Portal Berita Althaf 2021 </span>
                    </div>
                 </div>
              </div>
           </div>
              <div class="copyright">
                 <p>Copyright 2021 Althaf</p>
              </div>
           
        </div>
        </footr>
          </section>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
</body>
</html>