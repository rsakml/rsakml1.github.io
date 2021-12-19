<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Test Kesehatan Mental</title>
  </head>
  <body style="background: #FEFEFE">
    <div class="container mt-5 mb-5">
      <div class="row 
	      justify-content-center">
	<div class="col-lg-8">
	  <div class="card
		  bg-light
		  px-5 py-5
		  shadow-lg">
	    <h1 class="text-center">Ini Judul</h1>
	    <hr>
	    <?php
	      session_start();
              require "./koneksi.php";
	      

	      if(isset($_POST['button1'])) { 
			$jawaban1 = $_POST['p1'];
			$jawaban2 = $_POST['p2'];
			$jawaban3 = $_POST['p3'];
			$jawaban4 = $_POST['p4'];
			$jawaban5 = $_POST['p5'];
			$jawaban6 = $_POST['p6'];
			$jawaban7 = $_POST['p7'];
			$jawaban8 = $_POST['p8'];
			$jawaban9 = $_POST['p9'];
			$jawaban10 = $_POST['p10'];   
  
			$nama = $_POST['nama'];
			$_SESSION['username'] = $nama;
			$total = $jawaban1+$jawaban2+$jawaban3+$jawaban4+$jawaban5+$jawaban6+$jawaban7+$jawaban8+$jawaban9+$jawaban10;
			$query = "INSERT INTO tespsikologi(`id`,`nama`, `kategori1`) VALUES ('', '$nama', '$total')";
		if(mysqli_query($connect, $query)) {
			$_SESSION['kategori'] = 1;
		  header("Location: kategori2.php");
		}else{
		  echo "<div class='alert alert-dange>
                          Data Gagal dimasukan !
                        </div>";
                  die(mysqli_error($connect));
		}
               mysqli_close($connect);
	      }else if(isset($_POST['button2'])){
			$_SESSION['kategori'] = 1;
			header("Location: hasil.php");
		if(mysqli_query($connect, $query)) {
		  $_SESSION['kategori'] = 1;
		  header("Location: hasilAkhir.php");
		}else{
		  echo "<div class='alert alert-dange>
                          Data Gagal dimasukan !
                        </div>";
                  die(mysqli_error($connect));
		}
               mysqli_close($connect);
	      } 
            ?>
	    <form method="POST" action="">
	      <div class="mb-3">
		<label for="nama"
			class="form-label">
	  	  Nama
		</label>
		<input type="text" 
			class="form-control"
			name="nama"
			placeholder="Nama Lengkap"
			required>
	      </div>
	      <div class="mb-3"
		      id="s1">
		<p class="mb-3">
		  Bagaimana perasaanmu saat ini?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p1"
			id="p1-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p1-a">
		    Sedih
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p1"
			id="p1-b"
			value="7.5">
		  <label class="form-check-label"
			for="p1-b">
		    Resah / Khawatir
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p1"
			id="p1-c"
			value="5">
		  <label class="form-check-label"
			for="p1-c">
		    Kesepian
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p1"
			id="p1-d"
			value="0">
		  <label class="form-check-label"
			for="p1-d">
		    Senang / Gembira
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p1"
			id="p1-e"
			value="10">
		  <label class="form-check-label"
			for="p1-e">
		    Gila
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s2">
		<p class="mb-3">
		  Apa kamu bisa mengendalikan emosimu?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p2"
			id="p2-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p2-a">
		    Tergantung situasi
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p2"
			id="p2-b"
			value="7.5">
		  <label class="form-check-label"
			for="p2-b">
		    Entahlah
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p2"
			id="p2-c"
			value="0">
		  <label class="form-check-label"
			for="p2-c">
		    Tentu saja bisa
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p2"
			id="p2-d"
			value="10">
		  <label class="form-check-label"
			for="p2-d">
		    Tidak bisa
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p2"
			id="p2-e"
			value="5">
		  <label class="form-check-label"
			for="p2-e">
		    Dikit lah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s3">
		<p class="mb-3">
		  Bagaimana kamu menjalani kehidupanmu?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p3"
			id="p3-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p3-a">
		    Mengalir seperti air
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p3"
			id="p3-b"
			value="10">
		  <label class="form-check-label"
			for="p3-b">
		    Penuh tekanan
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p3"
			id="p3-c"
			value="0">
		  <label class="form-check-label"
			for="p3-c">
		    Penuh kegembiraan
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p3"
			id="p3-d"
			value="7.5">
		  <label class="form-check-label"
			for="p3-d">
		    Tidak peduli
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p3"
			id="p3-e"
			value="5">
		  <label class="form-check-label"
			for="p3-e">
		    Biasa-biasa saja
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s4">
		<p class="mb-3">
		  Masalah mental apa yang sedang kamu hadapi sekarang?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p4"
			id="p4-a"
			value="5">
  		  <label class="form-check-label"
			    for="p4-a">
		    Aku merasa sedih setiap waktu
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p4"
			id="p4-b"
			value="7.5">
		  <label class="form-check-label"
			for="p4-b">
		    Aku merasa khawatir kalau terlalu cemas
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p4"
			id="p4-c"
			value="0">
		  <label class="form-check-label"
			for="p4-c">
		    Tidak ada
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p4"
			id="p4-d"
			value="2.5">
		  <label class="form-check-label"
			for="p4-d">
		    Aku terkadang merasa cemas, terkadang tidak
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p4"
			id="p4-e"
			value="10">
		  <label class="form-check-label"
			for="p4-e">
		    Aku merasa tertekan setiap waktu
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s5">
		<p class="mb-3">
		  Quote mana yang kamu pilih?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p5"
			id="p5-a"
			value="10">
  		  <label class="form-check-label"
			    for="p5-a">
		    Hidup itu terlalu menyebalkan, mati saja lah
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p5"
			id="p5-b"
			value="5">
		  <label class="form-check-label"
			for="p5-b">
		    Sulit untuk menemukan teman sejati
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p5"
			id="p5-c"
			value="2.5">
		  <label class="form-check-label"
			for="p5-c">
		    Aku capek, istirahat saja
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p5"
			id="p5-d"
			value="0">
		  <label class="form-check-label"
			for="p5-d">
		    Selalu menatap sisi positif dari setiap peristiwa
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p5"
			id="p5-e"
			value="7.5">
		  <label class="form-check-label"
			for="p5-e">
		    Aku kesal, aku menyerah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s6">
		<p class="mb-3">
		  Dalam sebulan terakhir, seberapa sering anda merasa kesal karena sesuatu yang terjadi secara terduga?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p6"
			id="p6-a"
			value="0">
  		  <label class="form-check-label"
			    for="p6-a">
		    Tidak pernah
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p6"
			id="p6-b"
			value="2.5">
		  <label class="form-check-label"
			for="p6-b">
		    Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p6"
			id="p6-c"
			value="5">
		  <label class="form-check-label"
			for="p6-c">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p6"
			id="p6-d"
			value="7.5">
		  <label class="form-check-label"
			for="p6-d">
		    Cukup sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p6"
			id="p6-e"
			value="10">
		  <label class="form-check-label"
			for="p6-e">
		    Sangat Sering
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s7">
		<p class="mb-3">
		  Dalam sebulan terakhir, seberapa sering anda merasa bahwa anda tidak dapat mengendalikan hal-hal yang penting dalam hidup anda?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p7"
			id="p7-a"
			value="0">
  		  <label class="form-check-label"
			    for="p7-a">
		    Tidak pernah
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p7"
			id="p7-b"
			value="2.5">
		  <label class="form-check-label"
			for="p7-b">
		    Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p7"
			id="p7-c"
			value="5">
		  <label class="form-check-label"
			for="p7-c">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p7"
			id="p7-d"
			value="7.5">
		  <label class="form-check-label"
			for="p7-d">
		    Cukup sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p7"
			id="p7-e"
			value="10">
		  <label class="form-check-label"
			for="p7-e">
		    Sangat Sering
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s8">
		<p class="mb-3">
		  Dalam sebulan terakhir, seberapa sering anda merasa gelisah dan stress?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p8"
			id="p8-a"
			value="0">
  		  <label class="form-check-label"
			    for="p8-a">
		    Tidak pernah
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p8"
			id="p8-b"
			value="2.5">
		  <label class="form-check-label"
			for="p8-b">
		    Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p8"
			id="p8-c"
			value="5">
		  <label class="form-check-label"
			for="p8-c">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p8"
			id="p8-d"
			value="7.5">
		  <label class="form-check-label"
			for="p8-d">
		    Cukup sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p8"
			id="p8-e"
			value="10">
		  <label class="form-check-label"
			for="p8-e">
		    Sangat Sering
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s9">
		<p class="mb-3">
		  Dalam sebulan terakhir, seberapa sering anda merasa yakin terhadap kemampuan anda dalam menangani masalah pribadi?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p9"
			id="p9-a"
			value="10">
  		  <label class="form-check-label"
			    for="p9-a">
		    Tidak pernah
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p9"
			id="p9-b"
			value="7.5">
		  <label class="form-check-label"
			for="p9-b">
		    Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p9"
			id="p9-c"
			value="5">
		  <label class="form-check-label"
			for="p9-c">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p9"
			id="p9-d"
			value="2.5">
		  <label class="form-check-label"
			for="p9-d">
		    Cukup sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p9"
			id="p9-e"
			value="0">
		  <label class="form-check-label"
			for="p9-e">
		    Sangat Sering
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s10">
		<p class="mb-3">
		  Dalam sebulan terakhir, seberapa sering anda merasa marah karena hal-hal yang sering terjadi diluar kendali anda?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p10"
			id="p10-a"
			value="0">
  		  <label class="form-check-label"
			    for="p10-a">
		    Tidak pernah
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p10"
			id="p10-b"
			value="2.5">
		  <label class="form-check-label"
			for="p10-b">
		    Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p10"
			id="p10-c"
			value="5">
		  <label class="form-check-label"
			for="p10-c">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p10"
			id="p10-d"
			value="7.5">
		  <label class="form-check-label"
			for="p10-d">
		    Cukup sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p10"
			id="p10-e"
			value="10">
		  <label class="form-check-label"
			for="p10-e">
		    Sangat Sering
		  </label>
		</div>
	      </div>
	      <div class="row mt-5 mb-3
			justify-content-around">
		<button type="submit"
			class="btn
			col-5
			btn-lg
			btn-primary"
			name="button1">
		  Next
		</button>
		<button type="submit"
			class="bt
			col-5
			btn-lg
			btn-secondary"
			name="button2">
		  Finish
		</a>
	      </div>
	    </form>
	  </div>
	</div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </body>
</html>