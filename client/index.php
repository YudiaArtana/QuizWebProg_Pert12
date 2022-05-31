<?php
if(isset($_GET["p"])){
    if($_GET["p"]==="mhs"){
        if(isset($_GET["sp"])){
            if($_GET["sp"]=="addnew"){
                $page = "mhs-pageadd.php";
                $Tpage = "Tambah Data Mahasiswa";
            }
            if($_GET["sp"]=="edit"){
                $page = "mhs-pageupdate.php";
                $Tpage = "Edit Data Mahasiswa";
            }
            if($_GET["sp"]=="hapus"){
                $page = "mhs-pagedelete.php";
                $Tpage = "Hapus Data Mahasiswa";
            }
        }else{
            $page = "mhs-pagelist.php";
            $Tpage = "List Data Dahasiswa";
        }
    }else if($_GET["p"]==="mk"){
        $page = "#";
        $Tpage = "List Data Mata Kuliah";
    }else if($_GET["p"]==="dsn"){
        $page = "#";
        $Tpage = "List Data Dosen";
    }
}else{
    $page = "home.php";
    $Tpage = "Home";
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$Tpage;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SIM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?p=mhs">Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?p=mk">Mata Kuliah</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?p=dsn">Dosen</a>
            </li>

        </ul>
        </div>
    </div>
    </nav>

    


    <div class="container">
        <?php
        include_once("$page");
        ?>
    </div>

   
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>