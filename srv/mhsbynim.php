<?php
    include_once("konfigurasi.php");
    
    $hsl["error"] = 1;
    if(isset($_GET["nim"])){
        
        $nim = $_GET["nim"];
        
        $sql = "SELECT NIM,NAMA,ALAMAT,TGL_LAHIR,JENISKEL FROM mhs WHERE NIM='$nim';";
        $hasil = mysqli_query($koneksi,$sql);
        $hsl["affectedrows"] = "affected rows: " . mysqli_affected_rows($koneksi);
        if($hsl){
            $h = mysqli_fetch_assoc($hasil);
            $hsl["isi"] = [
                'NIM'=>$h["NIM"],
                'NAMA'=>$h["NAMA"],
                'ALAMAT'=>$h["ALAMAT"],
                'TGL'=>$h["TGL_LAHIR"],
                'JKEL'=>$h["JENISKEL"],
            ];
            $hsl["error"] = 0;    
        }
        mysqli_close($koneksi);
         
    }
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($hsl);