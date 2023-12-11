<?php
    // Fungsi Void
    function salam($nama = "Pengunjung"){
        echo "<h2>Assalamu'alaikum ".strtoupper($nama)."</h2>";
    }

    salam("Ali");
    salam("Fadil");
    salam();
?>