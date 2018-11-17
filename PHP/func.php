<?php

  //index.php sayfasında random bir şekilde söz gösteren kısımdır
  function ShowMotivationText()
  {
    $myfile = file("./PHP/speech.txt");
    $rand = rand(0 , count($myfile)-1);

    list($text,$writer) = explode("-" , $myfile[$rand]);
    echo '<h1 class="cover-heading">' . $writer . ' şöyle söyler...</h1>';
    echo '<p class="lead">' . $text . '</p>';

  }
  //verilen data'yı eğer speech.txt içerinde yoksa dosyanın sonuna ekleyen funch.
  function AddMotivationText($text)
  {

    $status = true;
    $read = file('./PHP/speech.txt');

    foreach ($read as $value) {
      if ($value == $text){
        echo "<script>alert('Böyle bir girdi zaten vardır');</script>";
        $status = false;
        break;
      }

    }

    if ($status){

      $myfile = fopen("./PHP/temporary-speech.txt" , "a+");
      fwrite($myfile , $text);
      fclose($myfile);
      echo "<script>alert('Eklediğiniz söz editörün onayından sonra eklenecektir.Teşekkürler');</script>";
    }

    /*
    */
  }

  /*
  add.php sayfasından name ve text adlı parametre alıp eğer içleri dolu ise AddMotivationText fonksiyonuna
  gönderir.
  */
  function Takedata()
  {
    if (isset($_POST["name"]) and isset($_POST["text"]) and ($_POST["name"] != "" or $_POST["text"] != "") )
    {
      //datayı tmp içinde speech.txt'de diğer data syntax'larına benzer hale getiriyorum
      $tmp = '"' . $_REQUEST["text"] . '"-' . $_REQUEST["name"] ."\n" ;
      if ( strpos($tmp,"<") === false )
      {
        AddMotivationText($tmp);
      }
      else
      {
        echo "<script>alert('Geçersiz bir girişl algılandı');</script>";
      }
    }

  }

 ?>
