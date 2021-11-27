<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1> Associative Array lanjutan(Materi 7) </h1>
  <?php
    $data = array("nama" =>"valdo",
                  "umur" =>21,
                  "status" =>"mahasiswa"
    );

     $data2 = array("istri" =>"belum ada",
                  "laptop" =>"hp"
    );
    print_r( array_merge($data, $data2));

  ?>
  </body>
</html> 
