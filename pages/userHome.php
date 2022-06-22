<?php
    // Session başlatır
    include("connectDb.php");
    session_start();
    
    //$mysqli->set_charset("utf8");

?>
<!doctype html>
<html >
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light me-5">
        <div class="container-fluid me-5">
            <a class="navbar-brand"><img  width="80px" src="img/logo.svg" alt="logo"><span style="font-family:'Courier New', Courier, monospace;" class="fs-2">NOT-BUL</span></a>
            <div class="nav navbar-nav me-3">
                  <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item "><a class="nav-link " href="userIndex.php">ANASAYFA</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutUs.php">HAKKIMIZDA</a></li>
                    <li class="nav-item"><a class="nav-link me-3" href="connect.php">İLETİŞİM</a></li>
                </ul>
                <div class="dropdown navbar-nav me-3 " >
                    <a data-bs-toggle="dropdown"  style="display: flex; justify-content: flex-end">
                        <img  src="img/person.svg" width="35">
                    </a>
                    <ul class="dropdown-menu text-small" style="background-color:#FFE69A">
                    <li><a href="userIndex.php"class="dropdown-item" >Anasayfa</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a href="userHome.php"class="dropdown-item" >Not Ekle</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a href="exit.php" class="dropdown-item">Çıkış Yap</a></li>
                      <li><hr class="dropdown-divider"></li>
                    </ul>
                </div>
            </div>
        </div>
        </nav>

        <?php
include( "connectDb.php");
$user_id=$_SESSION['id'];
if(isset($_POST["new_categori"]) || isset($_POST["new_not"]) || isset($_POST["new_header"]))
{
    $user_categori = $_POST["new_categori"];
    $user_not=$_POST["new_not"];
    $user_header=$_POST["new_header"];
    //$user_header = mb_strtoupper($user_header,"UTF-8");
    
    $sql="INSERT INTO note (content,contentHeader,user_id,category) VALUES ('".$user_not."','".$user_header."','".$user_id."','".$user_categori."')";
  
    $cevap=mysqli_query($connection,$sql);
    if(!$cevap){
        echo '<br>HATA:' .mysqli_error($connection);
    }
    else{
      
        header('Location: userHome.php');
        exit();
    }
    mysqli_close($connection);
  
  
  }
?>
<div class="container-fluid">
  <div class="row">
    <div class=" col-sm-6">
    <div class="card border-0 mt-5 ms-3" >
      <!-- bu kısım not yayınlama -->
                <form class="text" method="post">
                    <label class='form-label mt-3 text-monospace' style='font-size: 20px;font-family:Century Gothic,Franklin Gothic Medium,Times New Roman;'>BAŞLIK</label> <br>
                    <input type="text" class="border-warning" style="border-width:medium;" name="new_header" placeholder="Başlık tek kelime olmalıdır"><br>
                    <label class='form-label mt-3 text-monospace' style='font-size: 20px;font-family:Century Gothic,Franklin Gothic Medium,Times New Roman;'>NOTUNUZ</label> <br>
                    <textarea style="width:25rem;height:25rem;border-width:medium;"class="rounded scrollabletextbox border-success" name="new_not"></textarea><br>
                    <label class="form-label mt-3">Kategori</label> <br>
                    <select name="new_categori">
                        <option value="Biyoloji">Biyoloji</option> 
                        <option value="Fizik">Fizik</option>
                        <option value="Matematik">Matematik</option>
                        <option value="Kimya">Kimya</option>
                        <option value="Tarih">Tarih</option> 
                        <option value="Coğrafya">Coğrafya</option>
                        <option value="Geometri">Geometri</option>
                        <option value="Yabancı Dil">Yabancı Dil</option>
                    </select><br>
                    <button type="submit" class="btn btn-outline-primary mt-2">YAYINLA</button>
                </form>
            </div>
            </div>
            <div class=" col-sm-6">
              <!-- bu kısım not güncelleme -->
            <div class="card col-sm-6 border-0 mt-5 ms-3" >
                <form class="text" method="post">
                    <label class='form-label mt-3 text-monospace' style='font-size: 20px;font-family:Century Gothic,Franklin Gothic Medium,Times New Roman;'>NOTLARINIZ</label> <br>
                    <?php
                      include( "connectDb.php");
                      $sql="SELECT * FROM note WHERE user_id=$_SESSION[id]";
                      $result = mysqli_query($connection,$sql);
                      echo "<select name='categories' class='border-warning' style='border-width:medium;'>
                      <option>Notunuzu Seçin</option>";
                    while ($data=mysqli_fetch_array($result)){
                        $noteid=$data['id'];
                        $header = $data['contentHeader'];
                        $text = $data['content'];
                        //$tarih=date_format($tarih, 'd.m.Y');
                        //$header = mb_strtoupper($header,"UTF-8");
                        echo "<option value=$header>$header</option>";
                 }
                 echo "</select><br>";
                 if(isset($_POST["categories"]))
                 {
                  $header=$_POST["categories"];
                 }
                 
                 //$tarih = "SELECT 'releaseNote' FROM  note WHERE contentHeader='$header'";
                 echo "
                    <label class='form-label mt-3 text-monospace' style='font-size: 20px;font-family:Century Gothic,Franklin Gothic Medium,Times New Roman;'>GÜNCEL NOTUNUZ</label><br> 
                    <textarea style='width:25rem;height:25rem;border-width:medium;' name='updatingNote' class='rounded scrollabletextbox border-info'></textarea><br>";
                    echo "<button type='submit' name='updateNote' class='btn btn-outline-primary mt-2'>Güncelle</button>
                    <button type='submit' name='deleteNote' class='btn btn-outline-danger mt-2'>Sil</button>";
                    //güncelleme
                    if(isset($_POST["updateNote"])|| isset($_POST["updatingNote"]))
                    {
                      $updateText=$_POST["updatingNote"];
                      $sql="UPDATE note SET content ='".$updateText."' WHERE contentHeader='$header'";
                      //$sql="UPDATE note SET 'releaseNote' WHERE contentHeader='$header'";
                      $cevap=mysqli_query($connection,$sql);
                    }
                    //silme
                    if(isset($_POST["deleteNote"]))
                    {
                      $deleteText=$_POST["updatingNote"];
                      $sql="DELETE FROM note WHERE contentHeader='$header'";
                      //$sql="UPDATE note SET 'releaseNote' WHERE contentHeader='$header'";
                      $cevap=mysqli_query($connection,$sql);
                    }
                echo"    
                </form>
            </div>
            </div>
  </div>
</div>

";

?>
<hr/>
<!-- bu kısım not listeleme -->

        <?php
        
        echo "<p class='text-left ms-3' style='font-size:20px;'>YAYINLADIĞINIZ NOTLAR</p> <hr/>"; 
        include( "connectDb.php");
                $sql="SELECT * FROM note WHERE user_id=$_SESSION[id]";
                 $result = mysqli_query($connection,$sql);
                 $number=0;
                 while ($data=mysqli_fetch_array($result)){
                     $noteid=$data['id'];
                     $header = $data['contentHeader'];
                     $text = $data['content'];
                     $categori = $data['category'];
                     $yid = $data['user_id'];
                     $tarih = $data['releaseDate'];
                     //$tarih=date_format($tarih, 'd.m.Y');
                     $yazar =mysqli_fetch_array(mysqli_query($connection,"select u_name from user where id='$yid' "));
                     $yazarismi=$yazar['u_name'];
                     $yazarismi=mb_strtoupper($yazarismi,"UTF-8");
                     $header = mb_strtoupper($header,"UTF-8");
                     echo "<div class='accordion accordion-flush mt-5' id='accordionFlushExample'>";
                     
                        if($number%2==0)
                        {
                          $noteid=$data['id'];
                            echo "
                            <div class='accordion-item' style='background-color:#FFE69A'>
                                <h2 class='accordion-header' id='flush-headingOne'>
                                <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapseOne' aria-expanded='false' aria-controls='flush-collapseOne'>
                                    $header &nbsp <p class=' accordion-header fw-light' style='color:#041B39;'>Kategori: $categori   $yazarismi tarafından $tarih tarihinde yazıldı</p> 
                                </button>
                                </h2>";
                                

                                echo"<div id='flush-collapseOne' class='accordion-collapse collapse' aria-labelledby='flush-headingOne' data-bs-parent='#accordionFlushExample'>
                                <div class='accordion-body'>$text</div>
                                </div>
                            </div>
                            </div>";
                            
                        }
                        else
                        {
                          $noteid=$data['id'];
                            echo"
                            <div class='accordion-item'>
                                <h2 class='accordion-header' id='flush-headingTwo'>
                                <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapseTwo' aria-expanded='false' aria-controls='flush-collapseTwo'>
                                $header &nbsp <p class=' accordion-header fw-light' style='color:#041B39;'>Kategori: $categori   $yazarismi tarafından $tarih tarihinde yazıldı</p> 
                                </button>
                                </h2>";
                               
                                echo"
                                <div id='flush-collapseTwo' class='accordion-collapse collapse' aria-labelledby='flush-headingTwo' data-bs-parent='#accordionFlushExample'>
                                <div class='accordion-body' name='cardText'>$text</div>
                                </div>
                            </div>
                            </div>";
                            
                        }
                        $number=$number+1;
                        
                        }

            
                     echo "</div>";
                  
    ?>  


    

        
      
 
    
    

  
 


<div class="container-fluid mt-5 " style="background-color: white;">
    <div class="row shadow-1-strong">
      <ul class="nav justify-content-center mx-auto border-bottom pb-2 mb-2">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
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