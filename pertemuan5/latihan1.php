<?php
    // array
    // variable yang dapat memiliki banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // keynya adalah index, yang dimulai dari nol
    
    // membuat array
    // cara lama

    $hari = array("Senin", "Selasa", "Rabu");
    
    // cara baru

    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "wana", false];

    // Menampilkan Array
    // var_dump() / print_r()
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";
    // // Menampilkan 1 elemen pada array
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1]

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    echo "<br>";
    var_dump($hari)

?>