<?php
    // Membuat fungsi
    function perkenalan($nama, $salam="Assalamu'alaikum"){
        echo $salam.",";
        echo " Perkenalan, nama saya ".$nama."<br/>";
        echo " Senang berkenalan dengan anda<br/>";
    }

    // memanggil fungsi yang sudah dibuat 
    perkenalan("Jarwo", "Hai");

    echo "<hr/>";

    $saya = "Bambang";
    $ucapkanSalam = "Selamat Pagi";

    // memanggilnya lagi tanpa mengisi parameter salam
    perkenalan($saya);
?>