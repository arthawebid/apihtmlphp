<?php
    ///konfigurasi mysql
    define("DBHOST","localhost");
    define("DBNAME","mahasiswa");
    define("DBPWD","XezWK4RsRiTc2SkL");
    define("DBUSER","instiki");
    define("DBPORT","3306");
    
    
    $koneksi = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME,DBPORT) 
        or die("Koneksi ke DBMS Mysql gagal<br>");