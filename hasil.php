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
		  shadow-lg
		  text-center">
	    <h1>Hasil Akhir</h1>
	    <hr>
	    <?php
	      session_start();
              require "./koneksi.php";
	      $nama = $_SESSION['username'];
	      $kategori = $_SESSION['kategori']; 
	      $query = "SELECT * FROM tespsikologi WHERE nama='$nama'";
	      $row = mysqli_fetch_assoc($connect->query($query));
		?>
	    <h3 class="fw-bold mx-4">
	      <?php echo $row['nama']; ?>
	    </h3>
		<p class="display-6 my-3 fw-bold">
	      Hasil Kategori 1
	    </p>
	    <p class="display-3 my-3 text-primary fw-bold">
	      <?php echo $row['kategori1'] . '%'; ?>
	    </p><hr>
	    <p class="display-6 my-3 fw-bold">
	      Hasil Kategori 2
	    </p>
	    <p class="display-3 my-3 text-primary fw-bold">
	      <?php echo $row['kategori2'] . '%'; ?>
	    </p><hr>
	    <p class="display-6 my-3 fw-bold">
	      Hasil Kategori 3
	    </p>
	    <p class="display-3 my-3 text-primary fw-bold">
	      <?php echo $row['kategori3'] . '%'; ?>
	    </p><hr>
	    <p class="display-6 my-3 fw-bold">
	      Total Hasil
	    </p>
	    <p class="display-3 my-3 text-primary fw-bold">
	      <?php
		$hitung = $row['kategori1']+$row['kategori2']+$row['kategori3'];
		echo $hitung/3 . '%';
	      ?>
	    </p><hr>
	    <div class="btn-group mt-3 col-12">
	      <a href="index.html" class="btn btn-outline-primary btn-lg">Selesai</a>
	    </div>
	  </div>
	</div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </body>
</html>