<?php
    // Tipe data variabel
    /*Variabel system
   ( Variabel built in PHP )
    */

    // echo $_server["DOCUMENT_ROOT"];

    /*Variabel User
    Variabel Yang dibuat oleh user
    */
    echo '<br></br>';
    $name = 'Andri';
    $age = 15;
    $weight = 50.5;

    echo 'Nama saya adalah ' . $name;

    /*
    Variabel konstan
    variabel yang tidak bisa diubah nilainya

    1. Menggunakan define() define('Fruit','apel');
    2. menggunakan const    const fruit = 'Apel';
    */
    echo "<br></br>";
    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME;
    echo "<br><br/>";
    echo BASE_URL;
?>