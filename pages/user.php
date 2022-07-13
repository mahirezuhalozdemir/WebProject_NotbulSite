<?php
//giriş yapma
include("connectDb.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $usermail = $_POST["user_mail"];
  $userpass = $_POST["user_pass"];
  if(empty($usermail))
      $uyari=' Mailinizi yazınız.';
  else if(empty($userpass))
      $uyari=' Şifrenizi yazınız.';
  else
  {
    $sql="SELECT * FROM `user` WHERE u_email='$usermail' AND pass_word='$userpass' ";
    $result=mysqli_query($connection,$sql);
    $row=mysqli_fetch_array($result);
    if ($row['u_email'] == $usermail && $row['pass_word'] == $userpass )
    {
        $_SESSION['id'] = $row['id'];
        header("location:userHome.php");
        exit();
   } 
   else
     $uyari= ' Giriş yapılamadı.Lütfen kullanıcı adınızı ve şifrenizi kontrol edin';

  }
}

//mysqli_close($connection);
//$sorgu1 = $connection->query("SELECT * FROM user WHERE email='$maill'");
//$sorgu2 = $connection->query("SELECT * FROM user WHERE pass_word='$passs'");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </head>
  <body style="background-image:url(img/backSignUp.png);background-repeat: repeat;background-attachment: fixed;background-position: top-left;">
    <nav class="navbar navbar-expand-lg navbar-light shadow-1-strong " >
      <div class="container-fluid">
          <a class="navbar-brand"><img  width="80px" src="img/logo.svg" alt="logo"><span style="font-family:'Courier New', Courier, monospace;" class="fs-2">NOT-BUL</span></a>
          <div class="collapse navbar-collapse">
              
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"></li>
                  <li class="nav-item ms-5"><a class="nav-link " href="index.php">ANASAYFA</a></li>
                  <li class="nav-item"><a class="nav-link" href="aboutUs.php">HAKKIMIZDA</a></li>
                  <li class="nav-item"><a class="nav-link" href="connect.php">İLETİŞİM</a></li>
                </ul>
            
          </div>
      </div>
      </nav>


      
            <div class="card border-0 mt-5 mb-5" style="width: 20rem;margin:0 auto;opacity:0.7;filter:alpha(opacity=60);">
                <form class="text-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <label class="form-label mt-3">E-MAİL</label> <br>
                    <input type="email" name="user_mail"  placeholder="example@mail.com"><br>
                    <label class="form-label mt-3">PASSWORD</label> <br>
                    <input type="password" name="user_pass" minlength="4"><br>
                    <button type="submit" class="btn btn-outline-primary mt-2">GİRİŞ YAP</button>
                </form>
            </div>
       
<?php
if(isset($uyari))
{
  echo"
  <div style='width: 300px; margin:auto;' class='alert alert-warning alert-dismissible fade show mt-5 mb-5' role='alert'>
  <strong>Uyarı</strong>$uyari
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>


      
 
    
    
 
  
 
  
            <div class="container-fluid mt-5" ><div class="row"></div></div>
    <div class="container-fluid mt-5" ><div class="row"></div></div>
    <div class="container-fluid mt-5" ><div class="row"></div></div>
    <div class="container-fluid mt-5" ><div class="row"></div></div>

    <div class="container-fluid mt-5" style="background-color: white;bottom:0; position:fixed;opacity:0.7;filter:alpha(opacity=60);">
    <div class="row shadow-1-strong">
      <ul class="nav justify-content-center  shadow-1-strong mx-auto border-bottom pb-2 mb-2">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="aboutUs.php" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav item"><a href="https://www.linkedin.com/in/mahire-z%C3%BChal-%C3%B6zdemir-2919002z9" class="nav-link px-2 text-muted">LinkedIn</a></li>
        <li class="nav item"><a href="https://github.com/mahirezuhalozdemir" class="nav-link px-2 text-muted">GitHub</a></li>
      </ul>
      <p class="text-center text-muted class="justify-content-center">© 2022 Mahire Zühal Özdemir</p>
    </div>
  </div>
</body>

</html>