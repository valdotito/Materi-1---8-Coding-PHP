<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <h1> Array Multi Dimensi(Materi 7) </h1>
  <?php
    $data = array(
      array("programmer", "20", "males"),
      array("designer", "20", "rajin"),
      array("manager", "20", "males banget"),
    );

    print_r($data);

    $data[2][0] ="proyek manager";
    echo $data[2][0];


  ?>
  </body>
</html> 
