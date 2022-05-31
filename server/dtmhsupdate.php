<?php
include_once("koneksi.php");

$h["error"] = true;
if(isset($_POST["txNIM"])){
    $nim = $_POST["txNIM"];
    $nama = $_POST["txNAMA"];
    $jk = $_POST["txJK"];
    $jur = $_POST["txJUR"];

    $sql = "UPDATE mhs SET
    nim = '$nim',
    nama = '$nama',
    jk = '$jk',
    jurusan = '$jur'
    WHERE nim = '$nim';";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        $h["error"] = false;
    }
}
echo json_encode($h);
   

 

