
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style1.css" />
    
    <title>Sign in Sign Up</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <?php
            if(isset($_POST['login'])) {
              require "koneksi.php";
              $connect = mysqli_connect($server, $username, $password, $database);

              $username = $_POST['username'];
              $password = $_POST['password'];
              
              $data = mysqli_query($connect,"SELECT * FROM user WHERE username='$username' AND password='$password'");
              $cek = mysqli_num_rows($data);
              // username= admin ; password = 123
              
              if($cek > 0){
                $_SESSION['username'] = $username;
                if($username == "admin") {
                  header("location:index.html");
                }else{
                  header("Gagal");
                }
              }else{
                echo "<div class='alert alert-danger' id='alert' role='alert'>
                        Maaf, Username atau Password yang anda masukan salah!.
                      </div>";
                mysqli_close($connect);
              }
            }
            
          ?>
          <form  action="" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field" for="id">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field" for="username">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <button type="submit" class="btn btn-success mt-3 mb-4" name="login"><a href="dataAdmin.php">Login</button>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

     
    <script src="app.js"></script>
  </body>