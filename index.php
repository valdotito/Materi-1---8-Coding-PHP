<html>
  <head>
    <meta charset="utf=8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan For Looping(Materi 8)</h1>

    <?php 

    for ($i=0; $i<5; $i++)
    {
      echo "-----------------";
      echo "Rivaldo koding $i";
      echo "----------------- <br>";
    }
    ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan For dan Array(Materi 8)</h1>

    <?php 

    $hewan = ['anjing','babi','cicak','domba'];

    for ($i=0; $i < count($hewan); $i++)
    {
      echo "-----------------";
      echo $hewan[$i];
      echo "----------------- <br>";
    }
    ?>
  </body>
</html>

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

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan Foreach untuk Array asosiatif(Materi 8)</h1>

    <?php 

   
    $data = ['nama' => 'rivaldo',
             'umur'=>21,
             'sifat'=>'humble'];

      foreach($data as $key => $value){
        echo $value ."<br>"; 
      }
      
    ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1>Pengulangan While dan Do While(Materi 8)</h1>

    <?php 
   $hewan = ['anjing','babi','cicak','domba','kuda'];
   
   $i = 5;

   do{
     echo '------';
     echo $hewan[$i]. "<br>";
     $i++;
   }while( $i < count($hewan));
    
  ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

    <?php
    echo "<h1>Dasar PHP : HTML dan PHP(materi 4)</h1>";
    echo  "Halo <br>";
    echo  "Member";
    ?>

semuanya!
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <?php
        $nama = "Rivaldo Koding 123";
        $_123 = "Dasar PHP : Komentar dan Variabel(Materi 4)";

        echo "<h1>$_123</h1>";
        echo "Halo ". $nama ."<br>";
        echo "Member";
      ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   
   <?php
    $nama  = "Rivaldo Coding";
    $nama2 = 'Materi PHP Pemula - Tipe Data Dan String(materi 4)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di Rivaldo koding"; 
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Rivaldo Coding";
    $nama2 = 'Materi PHP Pemula - Tipe Data Integer dan float(Materi 4)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama <br>"; 

    $angka  =1000;
    $angka2 =100.123;

    echo $angka + $angka2;
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Rivaldo Coding";
    $nama2 = 'Materi PHP Pemula - Operator Matematika(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2;

    $angka *= $angka2;

    echo $angka;
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Rivaldo Coding";
    $nama2 = ' Materi PHP Pemula - Metode Matematika(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Rivaldo Coding";
    $nama2 = ' Materi PHP Pemula: Metode Penanganan String(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

  <?php
  $nama = "Belajar Dasar Dasar PHP";
  $_123 = "Materi PHP Pemula: Metode String(Materi 5)";

  echo "<h1>$_123</h1>";
  echo "Halo ". $nama."<br>";
  echo "Member";
  ?>
  </body><html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Rivaldo Coding";
    $nama2 = 'Bermain Coding';

    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    $text = "Hai Semuanya Di sini";
    echo str_repeat(str_replace("Hai","Hello" , $text), 10);
   ?>
  </body>
</html>
</html> 

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1>Materi PHP Pemula - Perkenalan Array(Materi 6)</h1>

  <?php
   
    $kotak  =array('anjing', 'kurakura', 'koala');
    $nama   =['Rivaldo', 'septer', 'aufar'];

    
    print_r(  $kotak);
    echo $nama[0]

  ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1>Materi PHP Pemula - Metode Array(Materi 6)</h1>

  <?php
    $angka  =[5, 10, 2, 1, 6];
    $kotak  =array('anjing', 'kurakura', 'koala');
    $nama   =['Rivaldo', 'septer', 'aufar'];

    sort($angka);
    print_r( $angka);
     

  ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Associative Array(Materi 6) </h1>

    <?php 

   
    $data = ['nama' => 'rivaldo',
             'umur'=>21,
             'sifat'=>'humble'];

    $data ['nama'] = " Rivaldo Da Silva";
    echo"Nama adalah".$data ['nama'];
      
      
    ?>
  </body>
</html>

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

    

    $data[2][0] ="proyek manager";
    echo $data[2][0];


  ?>
  </body>
</html> 

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

    <h1> Materi Super Global Array (Tingkat Lanjut)(Materi 7) </h1>
   <?php
    echo $_SERVER['REMOTE_ADDR'];
    die();
    session_start();

     $user ='Hilman';
     $password ='123';

     if (isset($_POST['submit']) ){
       if($_POST['nama']== $user &&
       $_POST['password']==$password){

         setcookie('nama_user', $_POST['nama'], time()+120);

         $SESSION['nama_user'] = $_POST['nama'];

         header('location: profile.php');

         }else{

           echo 'login gagal';
         }
     }


   ?>
   <form action="index.php" method="post">
   <input type="text" name="nama">
   <input type="password" name="password">
   <input type="submit" name="submit">
  </body>
</html>


