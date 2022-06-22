<?php
//kayıt olma işlemi yapar
include("connectDb.php");
session_start();
if (isset($_POST["new_status"]) || isset($_POST["new_name"]) || isset($_POST["new_lastname"]) || isset($_POST["new_email"]) || isset($_POST["new_password"]) )
{
  $user_statu = $_POST["new_status"];
  $user_name=$_POST["new_name"];
  $user_lastname=$_POST["new_lastname"];
  $user_email=$_POST["new_email"];
  $user_password=$_POST["new_password"];




  $sql="INSERT INTO user (u_name,u_lastname,u_email,u_status,pass_word) VALUES ('".$user_name."','".$user_lastname."','".$user_email."','".$user_statu."','".$user_password."')";
  $cevap=mysqli_query($connection,$sql);
  if(!$cevap){
      $uyari='! Bu email başka bir kullanıcı için kullanılmış';
  }
  else{
      header("Refresh:1;url=index.php");
      exit();
  }
  mysqli_close($connection);


}



?>

<!doctype html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </head>
  <body style="background-image:url(img/backSignUp.png);background-repeat: repeat;background-attachment: fixed;background-position: top-left;">
    
  <nav class="navbar navbar-expand-lg navbar-light me-5">
      <div class="container-fluid me-5">
          <a class="navbar-brand"><img  width="80px" src="img/logo.svg" alt="logo"><span style="font-family:'Courier New', Courier, monospace;" class="fs-2">NOT-BUL</span></a>
          <div class="nav navbar-nav me-3">
                  <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item "><a class="nav-link " href="index.php">ANASAYFA</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutUs.php">HAKKIMIZDA</a></li>
                    <li class="nav-item"><a class="nav-link me-3" href="connect.php">İLETİŞİM</a></li>
                </ul>
          </div>
      </div>
      </nav>


      
            <div class="card border-0 mt-2" style="width: 20rem;margin:0 auto;">
                <form class="text-center" method="post">
                    <label class="form-label">İSİM</label> <br>
                    <input type="text" name="new_name" placeholder="Adınız"> <br>
                    <label class="form-label mt-3">SOYİSİM</label> <br>
                    <input type="text" name="new_lastname" placeholder="Soyadınız"><br>
                    <label class="form-label mt-3">E-MAİL</label> <br>
                    <input type="email" name="new_email" placeholder="example@mail.com"><br>
                    <label class="form-label mt-3">PASSWORD</label> <br>
                    <input type="password" name="new_password" minlength="4"><br>
                    <label class="form-label mt-3">ÖĞRENİM DURUMU</label> <br>
                    <select name="new_status">
                        <option value="highschool">LİSE</option> 
                        <option value="university">ÜNİVERSİTE</option>
                        <option value="secondarySchool">ORTAOKUL</option>
                        <option value="primarySchool">İLKOKUL</option>
                    </select><br>
                    <button type="submit" class="btn btn-outline-primary mt-3">KAYDOL</button>
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
      <ul class="justify-content-center  mx-auto border-bottom ">
        <li><p class="text-center text-muted">© 2022 Mahire Zühal Özdemir</p></li>
      </ul>
    </div>
  </div>
 
    
   
</body>
</html>