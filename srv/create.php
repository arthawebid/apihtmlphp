<?php
    include_once("konfigurasi.php");
    
    $hsl["error"] = 1; 
    if(isset($_POST["NIM"])){
        
        $nim = $_POST["NIM"];
        $nama = $_POST["NAMA"];
        $alamat = $_POST["ALAMAT"];
        $tgl = $_POST["TGL"];
        $jkel = $_POST["JKEL"];
        
        $sql = "INSERT INTO mhs(NIM,NAMA,ALAMAT,TGL_LAHIR,JENISKEL) VALUES('$nim','$nama','$alamat','$tgl','$jkel');";
        $hsl["sql"] = $sql;    
        $hasil = mysqli_query($cnn,$sql);
        $hsl["affectedrows"] = "affected rows: " . mysqli_affected_rows($cnn);
        if($hsl){
            $hsl["error"] = 0;    
        }
        mysqli_close($cnn);
         
    }
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($hsl);