<?php
include("connectDb.php");
?>

<!doctype html>
<html >
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biyoloji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><img  width="80px" src="img/logo.svg" alt="logo"><span style="font-family:'Courier New', Courier, monospace;" class="fs-2">NOT-BUL</span></a>
            <div class="collapse navbar-collapse">
                
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item ms-5"><a class="nav-link " href="index.php">ANASAYFA</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutUs.php">HAKKIMIZDA</a></li>
                    <li class="nav-item"><a class="nav-link" href="connect.php">İLETİŞİM</a></li>
                  </ul>
              
              <form class="d-flex py-3 py-lg-0">

                <a href="user.php"> <button class="btn btn-outline-primary rounded-pill order-0 ms-5" type="button">Giriş Yap</button></a>
                
                <a href="register.php"> <button class=" ms-3 btn btn-outline-success rounded-pill order-0" type="button">Kayıt Ol</button></a>

            </form>
            </div>
        </div>
        </nav>
    
    

            <?php
                $number=0;
                 $sql = mysqli_query($connection,"select * from note");

                 while ($data=mysqli_fetch_array($sql)){
                     $header = $data['contentHeader'];
                     $text = $data['content'];
                     $categori = $data['category'];
                     $_SESSION['id'] = $data['id'];
                     $yid = $data['user_id'];
                     $tarih = $data['releaseDate'];
                     //$tarih=date_format($tarih, 'd.m.Y');
                     $yazar =mysqli_fetch_array(mysqli_query($connection,"select u_name from user where id='$yid' "));
                     $yazarismi=$yazar['u_name'];
                     $yazarismi=mb_strtoupper($yazarismi,"UTF-8");
                     $header = mb_strtoupper($header,"UTF-8");
                     echo "<div class='accordion accordion-flush mt-5' id='accordionFlushExample'>";
                     if($categori=='Biyoloji')
                     {
                        $number=$number+1;
                        if($number%2==0)
                        {
                            echo "
                            <div class='accordion-item' style='background-color:#FFE69A'>
                                <h2 class='accordion-header' id='flush-headingOne'>
                                <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapseOne' aria-expanded='false' aria-controls='flush-collapseOne'>
                                    $header &nbsp <p class=' accordion-header fw-light' style='color:#041B39;'>$yazarismi tarafından $tarih tarihinde yazıldı</p>
                                </button>
                                </h2>
                                <div id='flush-collapseOne' class='accordion-collapse collapse' aria-labelledby='flush-headingOne' data-bs-parent='#accordionFlushExample'>
                                <div class='accordion-body'>$text</div>
                                </div>
                            </div>
                            </div>";
                        }
                        else
                        {
                           
                            echo"
                            <div class='accordion-item'>
                                <h2 class='accordion-header' id='flush-headingTwo'>
                                <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapseTwo' aria-expanded='false' aria-controls='flush-collapseTwo'>
                                $header &nbsp <p class=' accordion-header fw-light' style='color:#041B39;'>$yazarismi tarafından $tarih tarihinde yazıldı</p>
                                </button>
                                </h2>
                                <div id='flush-collapseTwo' class='accordion-collapse collapse' aria-labelledby='flush-headingTwo' data-bs-parent='#accordionFlushExample'>
                                <div class='accordion-body'>$text</div>
                                </div>
                            </div>
                            </div>";
                        }
                        
                        }

                     }
                     echo "</div>";
                  
    ?>  
    





  
 


    <div class="container-fluid mt-5" ><div class="row"></div></div>
    <div class="container-fluid mt-5" ><div class="row"></div></div>
    <div class="container-fluid mt-5" ><div class="row"></div></div>
    <div class="container-fluid mt-5" ><div class="row"></div></div>

    <div class="container-fluid mt-5" style="background-color: white;bottom:0; position:fixed;">
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