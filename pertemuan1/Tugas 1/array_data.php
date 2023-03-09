<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

  $a_fruits = [
    ["id" => "001","name" => "Berry", "color" => "Merah", "stock" => 50, "price" =>"1kg Rp.12000 ", "description" => "bery adalah sumber antioksidan yang hebat, seperti antosianin, asam ellagic, dan resveratrol.","caption" => "Murah loh ! yokk beli"],
    ["id" => "002" ,"name" => "Pisang", "color" => "Kuning", "stock" => 45, "price" =>"1kg Rp.15000 ", "description" =>"Pisang kaya akan potasium, mineral yang penting bagi penjagaan fungsi jantung dan sirkulasi darah.","caption" => "Murah loh ! yokk beli"],
    ["id" => "003","name" => "Melon", "color" => "Hijau", "stock" => 40, "price" =>"1kg Rp.28000", "description" => "Melon memiliki manfaat penting bagi kesehatan, Zat-zat gizi yang dikandungnya sangat baik untuk kulit, mata, saraf, ginjal, serta mampu menjadi penangkal kanker.","caption" => "Murah loh ! yokk beli"],
    ["id" => "004","name" => "Blueberry", "color" => "Biru", "stock" => 35, "price" =>"1kg Rp.32000", "description" => "blueberry mengandung antioksidan dan vitamin C yang akan menjaga kulit Moms secara keseluruhan.","caption" => "Murah loh ! yokk beli"],
    
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  <style>
    .container{
        background-color: lightgray;
        border-radius: 7px;
        width: 100em;
    }

    .text-center{
      color:crimson;

    }
    .thead-dark{
      color:navy;
    }

    .table-hover{
      border-radius:10px;
    }


  </style>

  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h2 class="text-center mt-4 mb-4"><u>Daftar Buah</u></h2>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
          <th>Caption</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */

          foreach ($a_fruits as $fruit){
            echo "<tr>";
            echo "<td>" . $fruit["id"] . "</td>";
            echo "<td>" . $fruit["name"] . "</td>";
            echo "<td>" . $fruit["color"] . "</td>";
            echo "<td>" . $fruit["stock"] . "</td>";
            echo "<td>" . $fruit["price"] . "</td>";
            echo "<td>" . $fruit["description"] . "</td>";
            echo "<td>" . $fruit["caption"] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>