<?php
  /* PHP Array

    Membuat array kosong
    1. $fruits = array();
    2. $fruits = [];

    Membuat array beserta isinya
    1. $fruits = array("Pepaya", "Mangga", "Delima", "Kiwi");
    2. $fruits = ["Pepaya", "Mangga", "Delima", "Kiwi"];

    Menampilkan isi array
    1. var_dump($fruits);
    2. print_r($fruits);

    # Simple array
    $fruits = ["Pisang", "Melon", "Berry"];

    # Associative array
    $fruits = [
      "Pisang" => "Kuning", 
      "Melon" => "Hijau", 
      "Berry" => "Merah"
    ];

    # Multidimensional array
    $fruits = [
      ["name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],
      ["name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar"],
      ["name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan"]
    ];
  */

    // Simple Array
     $fruits = ["pisang","melon","berry"];

    // var_dump($fruits);
    // print_r($fruits);

    foreach($fruits as $fruit){
        #code ..
        echo $fruit;
        echo '<br>';
    }

    // Asosciative array
    // istilah (key dan value)

    echo "<br></br>";

    $a_fruits = [
        "pisang" => "Kuning",
        "Melon" => "Hijau",
        "Berry" => "Merah"
    ];

    print_r($a_fruits);
    echo "<br>";

    foreach($a_fruits as $fruit){
        echo "<li>" . $fruit. "</li>";
        echo "<br>";
    }

    // Multidimensional Array
    echo "<br>";

    $m_fruits = [
        ["name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis","caption" => "Murah loh ! yokk beli"],
        ["name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar","caption" => "Murah loh ! yokk beli"],
        ["name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan","caption" => "Murah loh ! yokk beli"]
      ];

      foreach ($m_fruits as $fruit){
        echo "<li>" . $fruit["name"] . "</li>";
        echo "<li>" . $fruit["color"] . "</li>";
        echo "<li>" . $fruit["stock"] . "</li>";
        echo "<li>" . $fruit["price"] . "</li>";
        echo "<li>" . $fruit["description"] . "</li>";
        echo "<li>" . $fruit["caption"] . "</li>";
        echo "<br>";
      }

      $a_data = [
        ["name" => "Nama : Andrian Nurwana", "kp" => "Kp  : Cimanggu", "ds" =>"Ds : Tegal Wangi", "kec" => "Kec : Jasinga", "kab" => "Kab : Bogor-Perbatesan Banten", "prodi" => "Prodi : SI","caption" => "Semangat kuliahnya.." ]
      ];

      echo "<h4> Data Pribadi</h4>";

      foreach ($a_data as $a_Data){
        echo"<li>" . $a_Data["name"] . "</li>";
        echo"<li>" . $a_Data["kp"] . "</li>";
        echo"<li>" . $a_Data["ds"] . "</li>";
        echo"<li>" . $a_Data["kec"] . "</li>";
        echo"<li>" . $a_Data["kab"] . "</li>";
        echo"<li>" . $a_Data["prodi"] . "</li>";
        echo"<li>" . $a_Data["caption"] . "</li>";
      }
?>