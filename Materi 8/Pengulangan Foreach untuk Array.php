<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1>Pengulangan Foreach untuk Array(Materi 8)</h1>

    <?php 

    $hewan = ['anjing','babi','cicak','domba'];

    for ($i=0; $i < count($hewan) - 1; $i++)
    {
      echo "-----------------";
      echo $hewan[$i];
      echo "----------------- <br>";
    }

      foreach($hewan as $h){
        echo "-----------------";
        echo $h;
        echo "----------------- <br>";
    }
    ?>
  </body>
</html>