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
  
			$nama = $_SESSION['username'];
			$total = $jawaban1+$jawaban2+$jawaban3+$jawaban4+$jawaban5+$jawaban6+$jawaban7+$jawaban8+$jawaban9+$jawaban10;
			$query = "UPDATE tespsikologi SET kategori2='$total' WHERE nama='$nama'";
		if(mysqli_query($connect, $query)) {
			$_SESSION['kategori'] = 2;
		  header("Location: kategori3.php");
		}else{
		  echo "<div class='alert alert-dange>
                          Data Gagal dimasukan !
                        </div>";
                  die(mysqli_error($connect));
		}
               mysqli_close($connect);
	      }else if(isset($_POST['button2'])){
			$_SESSION['kategori'] = 2;
			header("Location: hasil.php");
		if(mysqli_query($connect, $query)) {
		  $_SESSION['kategori'] = 2;
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
        Seberapa sering kamu merasa bisa meminta bantuan ke orang lain?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p1"
			id="p1-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p1-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p1"
			id="p1-b"
			value="5">
		  <label class="form-check-label"
			for="p1-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p1"
			id="p1-c"
			value="7.5">
		  <label class="form-check-label"
			for="p1-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p1"
			id="p1-d"
			value="10">
		  <label class="form-check-label"
			for="p1-d">
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p1"
			id="p1-e"
			value="0">
		  <label class="form-check-label"
			for="p1-e">
		    Tidak Pernah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s2">
		<p class="mb-3">
        Seberapa sering kamu merasa cocok dengan orang-orang di sekitarmu?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p2"
			id="p2-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p2-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p2"
			id="p2-b"
			value="5">
		  <label class="form-check-label"
			for="p2-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p2"
			id="p2-c"
			value="7.5">
		  <label class="form-check-label"
			for="p2-c">
		    Cukup Sering
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
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p2"
			id="p2-e"
			value="0">
		  <label class="form-check-label"
			for="p2-e">
		    Tidak Pernah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s3">
		<p class="mb-3">
        Seberapa sering kamu merasa tidak bisa meminta bantuan ke siapapun?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p3"
			id="p3-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p3-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p3"
			id="p3-b"
			value="5">
		  <label class="form-check-label"
			for="p3-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p3"
			id="p3-c"
			value="7.5">
		  <label class="form-check-label"
			for="p3-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p3"
			id="p3-d"
			value="10">
		  <label class="form-check-label"
			for="p3-d">
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p3"
			id="p3-e"
			value="0">
		  <label class="form-check-label"
			for="p3-e">
		    Tidak Pernah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s4">
		<p class="mb-3">
        Seberapa sering kamu merasa sendirian?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p4"
			id="p4-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p4-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p4"
			id="p4-b"
			value="5">
		  <label class="form-check-label"
			for="p4-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p4"
			id="p4-c"
			value="7.5">
		  <label class="form-check-label"
			for="p4-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p4"
			id="p4-d"
			value="10">
		  <label class="form-check-label"
			for="p4-d">
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p4"
			id="p4-e"
			value="0">
		  <label class="form-check-label"
			for="p4-e">
		    Tidak Pernah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s5">
		<p class="mb-3">
        Seberapa sering kamu merasa menjadi bagian dari kelompok pertemanan?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p5"
			id="p5-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p5-a">
                Jarang
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
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p5"
			id="p5-c"
			value="7.5">
		  <label class="form-check-label"
			for="p5-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p5"
			id="p5-d"
			value="10">
		  <label class="form-check-label"
			for="p5-d">
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p5"
			id="p5-e"
			value="0">
		  <label class="form-check-label"
			for="p5-e">
		    Tidak Pernah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s6">
		<p class="mb-3">
        Seberapa sering kamu merasa bahwa kamu memiliki banyak kesamaan dengan orang di sekitarmu?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p6"
			id="p6-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p6-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p6"
			id="p6-b"
			value="5">
		  <label class="form-check-label"
			for="p6-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p6"
			id="p6-c"
			value="7.5">
		  <label class="form-check-label"
			for="p6-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p6"
			id="p6-d"
			value="10">
		  <label class="form-check-label"
			for="p6-d">
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p6"
			id="p6-e"
			value="0">
		  <label class="form-check-label"
			for="p6-e">
		    Tidak Pernah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s7">
		<p class="mb-3">
        Seberapa sering kamu merasa bahwa kamu tidak dekat dengan siapapun lagi?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p7"
			id="p7-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p7-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p7"
			id="p7-b"
			value="5">
		  <label class="form-check-label"
			for="p7-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p7"
			id="p7-c"
			value="7.5">
		  <label class="form-check-label"
			for="p7-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p7"
			id="p7-d"
			value="10">
		  <label class="form-check-label"
			for="p7-d">
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p7"
			id="p7-e"
			value="0">
		  <label class="form-check-label"
			for="p7-e">
		    Tidak Pernah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s8">
		<p class="mb-3">
        Seberapa sering kamu merasa ide dan pendapatmu berbeda dengan orang-orang di sekitarmu?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p8"
			id="p8-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p8-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p8"
			id="p8-b"
			value="5">
		  <label class="form-check-label"
			for="p8-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p8"
			id="p8-c"
			value="7.5">
		  <label class="form-check-label"
			for="p8-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p8"
			id="p8-d"
			value="10">
		  <label class="form-check-label"
			for="p8-d">
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p8"
			id="p8-e"
			value="0">
		  <label class="form-check-label"
			for="p8-e">
		    Tidak Pernah
		  </label>
		</div>
	      </div>
	      <hr>
	      <div class="mb-3"
		      id="s9">
		<p class="mb-3">
        Seberapa sering kamu merasa sebagai orang yang ramah dan mudah bergaul dengan orang lain?
		</p>
		<div class="form-check">
  		  <input class="form-check-input"
		    	type="radio" 
		    	name="p9"
			id="p9-a"
			value="2.5">
  		  <label class="form-check-label"
			    for="p9-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p9"
			id="p9-b"
			value="5">
		  <label class="form-check-label"
			for="p9-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p9"
			id="p9-c"
			value="7.5">
		  <label class="form-check-label"
			for="p9-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p9"
			id="p9-d"
			value="10">
		  <label class="form-check-label"
			for="p9-d">
		    Sangat Sering
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
		    Tidak Pernah
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
			value="2.5">
  		  <label class="form-check-label"
			    for="p10-a">
                Jarang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p10"
			id="p10-b"
			value="5">
		  <label class="form-check-label"
			for="p10-b">
		    Kadang-kadang
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p10"
			id="p10-c"
			value="7.5">
		  <label class="form-check-label"
			for="p10-c">
		    Cukup Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p10"
			id="p10-d"
			value="10">
		  <label class="form-check-label"
			for="p10-d">
		    Sangat Sering
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input"
		    	type="radio"
			name="p10"
			id="p10-e"
			value="0">
		  <label class="form-check-label"
			for="p10-e">
		    Tidak Pernah
		  </label>
		</div>
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