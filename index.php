<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <style media="screen">
    body{
      background: purple;
      color: white;
    }
    h1{
      text-align: center;
      width: 1170;
      margin: auto;
    }
    .padding-20{
      padding: 20px;
    }
  </style>
  <title></title>
</head>

<body>
  <h1>

  <?php
  //per creare le variabili si usa $nomeVariabile = valore
  // echo $_GET[pluto]; //con il get prendiamo la chiave nell'url es. .../?pluto=bro; %20 = spazio
  // // echo " ";
  // echo $_GET[value];
  $sentence = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $badword = $_GET[badword];
  $goodsentence = str_replace($badword, '***', $sentence);
  // $words = explode (' ', $sentence, 3); //tipo split in js, edivide a partire da cio che si trova tra '' e crea un array tra gli elementi separati
  echo $sentence;
  // echo " ";
  // echo $words[0];
  // echo '<br>';
  // echo $words[1];
  // echo '<br>';
  // echo $words[2];

?>
  </h1>
  <div class="padding-20">
    <h1><?php var_dump($sentence); ?></h1>
  </div>
  <div class="padding-20">
    <h1><?php echo $goodsentence; ?></h1>
    <h1><?php echo $badword; ?></h1>
  </div>
</body>

</html>
