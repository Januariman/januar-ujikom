<?php include 'header.php'; ?>

<link rel="stylesheet" href="vendor/fontawesome/css/all.css">

<style>
html {
  scroll-behavior: smooth;
}

.btn-kirim {
  padding: 16px 24px;
  border: 1px solid #50C88F;
  background-color: #50C88F;
  color: #fff;
  border-radius: 5px;
  text-decoration: none;
  margin-right: 25px;
}
.btn-kirim:hover {
  padding: 16px 24px;
  border: 1px solid #50C88F;
  background-color: transparent;
  color: #50C88F;
  text-decoration: none;
}

.sosmed {
	margin-right: 25px;
	font-size: 27px;
	margin-top: 50px;
	color: #50C88F;
}
.sosmed:hover {
	margin-right: 25px;
	font-size: 27px;
	margin-top: 50px;
	color: #72F2B5;
}

.hero-section {
  height: 600px;
  position: relative;
}

.hero-section .hero-img {
  position: absolute;
  top: 70px;
  right: -100px;
  border-radius: 90px 0 0 0;
}

.hero-title {
  margin-top: 170px;
}

.hero-title h4 {
  font-size: 25px;
  color: #50C88F;
  font-weight: bold;
  font-family: 'Poppins', serif;
}

.hero-title h1 {
  font-size: 50px;
  font-weight: 700;
  color: #373B4B;
  font-family: 'Merriweather' , serif;
  margin-bottom: 35px;
}

.hero-title p {
  color: #50C88F;
  margin-top: 22px;
}

.icon-1 {
  width: 70px;
  height: 70px;
  background-color: #fff;
  border-radius: 50px;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  top: 370px;
  right: 430px;
  -webkit-animation: up-down 3s infinite;
          animation: up-down 3s infinite;
  -webkit-box-shadow: 0px 10px 60px rgba(255, 255, 255, 0.466);
          box-shadow: 0px 10px 60px rgba(255, 255, 255, 0.466);
}

@-webkit-keyframes up-down {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  50% {
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
  }
  100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes up-down {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  50% {
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
  }
  100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

.email {
	padding-top: 90px;
}

.text-kirim-email {
  color: #50C88F;
  font-family: 'Poppins', serif;
  font-weight: 600;
  margin-bottom: 25px;
}

.form-control {
  height: 47px;
  border-color: #50C88F; }
  .form-control:active, .form-control:focus {
    border-color: #50C88F; }
  .form-control:hover, .form-control:active, .form-control:focus {
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }

.kotak-wrap {
  margin-left: 80px;
}

.bg-box {
  background-color: #50C88F;
  padding: 15px;
  
}    

.text-catatan-1 {
  color: #fff;
  font-family: 'Poppins', serif;
  font-weight: bold;
}

.text-catatan-2 {
  color: #fff;
  font-family: 'Poppins', serif;
  font-weight: 400;
}

</style>


<div class="container" id="home">
    <div class="row">

        <div class="col-lg-6 col-12">
            <div class="hero-title">
              
                <h4 class="text-kecil" data-aos="fade-right" data-aos-delay="0">
                    SMK CITRA NEGARA
                </h4>
                <h1 class="hero" data-aos="fade-right" data-aos-delay="100">
					          Selamat Datang di Website Pembayaran Spp Online.
                </h1>
                
				<a href="#email" class="btn-kirim mt-4 mb-5 scroll">Kirim Pesan</a>
				<a href="https://www.instagram.com/januariman/" target="_blank" class="sosmed"><i class="fab fa-instagram"></i></a>
				<a href="#" class="sosmed"><i class="fab fa-facebook"></i></a>
				<a href="#" class="sosmed"><i class="fab fa-twitter"></i></a>
				<a href="#" class="sosmed"><i class="fab fa-youtube"></i></a>
            
				<p class="desc mt-4" data-aos="fade-right" data-aos-delay="200">
                    klik kirim pesan untuk mengirim email kepada seseorang
                </p>
                
            </div>
        </div>
      
        <div class="col-lg-6 hero-section d-lg-block d-none" data-aos="zoom-in" data-aos-delay="300">
            <img class="hero-img d-none d-lg-block " src="img/foto_shape.png" alt="">
        </div>

        <div class="bungkusan d-lg-block d-none">
          <div class="icon-1 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="300">
            <img src="img/dollar-sign.svg" alt="">
          </div>
        </div>

    </div>
</div>

<div class="email" id="email">
    <div class="container">
      <div class="row">
  
        <div class="col-md-12 col-lg-7 mb-5">
  
        <h4 class="text-kirim-email">Kirim Email kepada Seseorang</h4>
  
          <form action="email.php" method="post" class="contact-form">
  
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Nama Anda</label>
                <input type="text" class="form-control" placeholder="Nama Anda" name="namaanda" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Email Anda</label>
                <input type="text" class="form-control" placeholder="Email Anda" name="emailanda">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Nama Penerima</label>
                <input type="text" class="form-control" placeholder="Nama Penerima" name="nama_penerima">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email Penerima</label>
                <input type="email" class="form-control" placeholder="Email Penerima" name="email_penerima">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Subjek</label>
                <input type="text" class="form-control" placeholder="Masukan Subjek" name="subjek">
              </div>
            </div>
  
  
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Pesan Anda</label>
                <textarea name="pesan" cols="30" rows="5" class="form-control"
                  placeholder="Katakan Pesan Anda"></textarea>
              </div>
            </div>
  
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" name="kirim" value="Kirim Pesan" class="btn btn-kirim">
              </div>
            </div>
  
  
          </form>
        </div>
  
        <div class="col-lg-4 kotak-wrap">
          <div class="mb-3 bg-box">
            <h3 class="text-catatan-1">Catatan</h3>
            <p class="text-catatan-2">Kirim Pesan Kepada Orang Tua Murid Untuk Menanyakan Kabar Pembayaran.</p>
          </div>
        </div>
      </div>
    </div>
  </div>














<!-- <section class="email" id="email">
<div class="container">
<div class="panel-body">
	<h4> Kirim Email kepada Seseorang</h4>
	<form action="email.php" method="post">
	

			<h3>Nama Anda</h3>
			<input type="text" class="form-control" name="namaanda" required>

      <h3>Email Anda</h3>
      <input type="text" class="form-control" name="emailanda">

      <h3>Nama Penerima</h3>
      <input type="text" class="form-control" name="nama_penerima">

      <h3>Email Penerima</h3>
      <input type="text" class="form-control" name="email_penerima">

      <h3>Pesan Anda</h3>
      <input type="text" name="subjek" placeholder="Subjek email">
			<textarea name="pesan" cols="14" rows="10" class="form-control"></textarea>
			<button class="btn btn-primary btn-block" name="kirim">KIRIM</button>


</form>
</div>
</div>
</section> -->

<!-- <script src="vendor/jquery-3.4.1.min.js"></script>
<script src="vendor/jquery-easing.js"></script>
<script src="js/main.js"></script> -->


<?php include 'footer.php'; ?>