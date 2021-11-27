<!DOCTYPE html>
<html>
<head>
	<title>Membuat Web Blog </title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>	
	<style type="text/css"></style>
        <!-- membuat menu navigasi -->
    <nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <body>  
            <!-- membuat menu navigasi -->
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Pemrograman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Html</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Css</a>
                </li>
                </ul>
              </ul>

            </div>
            <ul class="navbar-nav navbar-right">
                    <li class="nav-item"><a class="nav-link" href="login.html" data-toggle="modal" data-target="#modal-login">Login</a></li>
        
                    <li class="nav-item"><button type="button" class="btn btn-primary navbar-btn" href="register.html" data-toggle="modal" data-target="#modal-daftar">Daftar</button></li>
                </ul>
          </div>
        </nav> 
                      
		<div class="container">			
    <!-- membuat jumbotron -->
    <div class="jumbotron">
        <center>	
            <h2>Selamat Datang di Dunia Cooding | Tugas 2</h2>
            <p>Blog aman dan terpercaya</p><br/><br/>
			<img src="assets/img/welcome.jpg"style="width:400px;"><br>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Rekomendasi !</a></p>
        </center>

        
    </div>
    <!-- akhir jumbotron -->
       <!-- end slide gambar -->

        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
                <img src="{{ asset('assets/img/anjay.png')}}"style="width:400px;"><br> 
              <div class="card-body">
                <h5 class="card-title">Pengertian HTML</h5>
                <p class="card-text">HTML adalah bahasa standar pemrogaman yang digunakan untuk membuat halaman website, yang diakses melalui internet. Singkatan dari "Hypertext Markup Language" atau "bahasa markup".</p>
                <p><a href="pengertian.html" class="btn btn-primary" role="button">More</a></p>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
            <img src="assets/img/apa.png" style="width:400px;"><br> 
              <div class="card-body">
                <h5 class="card-title">Pengertian CSS</h5>
                <p class="card-text">CSS adalah kepanjangaan dari Cascading Style Sheets yang berguna untuk menyederhanakan proses pembuatan website dengan mengatur elemen yang tertulis di bahasa markup.</p>
                <p><a href="https://www.niagahoster.co.id/blog/pengertian-css/?amp" class="btn btn-primary" role="button">More</a></p>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="assets/img/cuk.png" style="width:400px;"><br>
              <div class="card-body"> 
                <h5 class="card-title">Pengertian PHP MYSQL</h5>
                <p class="card-text">PHP merupakan bahasa pemrograman berbasis web. Umumnya PHP digunakan untuk membuat website yang dinamis. Bahasa pemrograman PHP biasanya disisipkan pada dokumen HTML tetapi tag HTML juga bisa disisipkan pada PHP. Lalu apa pengertian MySQL? MySQL merupakan sebuah perangkat lunak sistem manajemen basis data SQL (bahasa Inggris: database management system) atau DBMS yang multithread, multi-user. Intinya Sistem yang digunakan untuk mengolah database.</p>
                <p><a href="https://surabaya.proxsisgroup.com/pengertian-php-mysql-untuk-pemula/#:~:text=Bagikan%3A,untuk%20membuat%20website%20yang%20dinamis.&text=MySQL%20merupakan%20sebuah%20perangkat%20lunak,yang%20multithread%2C%20multi%2Duser." class="btn btn-primary" role="button">Lihat</a></p>
          </div>
          </div>
         

          

</div>
<br/>
    
    </body>
    </html>