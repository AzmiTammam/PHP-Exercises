<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php  $name; ?></title>
</head>

<body style="background-color: orange; color: black; font-size: 21px;">
      <?php

      // 1

      $name = "azMi";
      $fullName = "azmi al-tammam";
      echo strtoupper($name);
      echo "<br>";
      echo strtolower($name);
      echo "<br>";
      echo strtolower($fullName);
      echo "<br>";
      echo ucwords($fullName);
      
      // 2 

      echo "<br>";
      echo "<br>";

      $inputDate = "2022/1/18 130156";
      $dateOutbut = strtotime($inputDate);
      echo date('Y/M/d h:i:s');

      // 3

      echo "<br>";
      echo "<br>";

      $fullstring = "Hey my name is Azmi";
      $word = "Azmi";

      if(strpos($fullstring, $word) !== false){
            echo "Word Found";
      } else {
            echo "Word Not Found";
      }

      // 4 

      echo "<br>";
      echo "<br>";

      $path = "http://localhost/test1/index.php";
      $file = basename($path);

      echo $file;

      // 5 
      echo "<br>";
      echo "<br>";

      $email = "AzmiTammam@gmail.com";
      $usernameCheck = strstr($email, "@" ,true);
      echo $usernameCheck;

      // 6
      echo "<br>";
      echo "<br>";

      $justText = substr("Academy", -3);
      echo $justText;

      // 7 

      echo "<br>";
      echo "<br>";

      function passwordGenerate($psw) {
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
            return substr(str_shuffle($data), 0, $psw);
      }
      echo "Password: ", passwordGenerate(8);

      // 8

      echo "<br>";
      echo "<br>";

      $text = "That new trainee is so genius";
      echo str_replace("That","Our",$text);

      // 9

      echo "<br>";
      echo "<br>";
      
      $stringOne = "Google";
      $stringTwo = "Google";

      if (strcasecmp($stringOne, $stringTwo,) == 0) {
            echo "String One equal string Two";
      } else {
            echo "String One not equal string Two";
      }

      // 10

      echo "<br>";
      echo "<br>";
      
      $stringOld = "Hello world, Good morning";
      $stringNew = explode(" ", $stringOld);
      echo var_dump($stringNew);

      // 11

      echo "<br>";
      echo "<br>";

      $cha = 'b';
      $next_cha = ++$cha; 
      if (strlen($next_cha) > 1) 
      {
      $next_cha = $next_cha[0];
      }
      echo $next_cha;
      
      // 12
      echo "<br>";
      echo "<br>";

      $stringX = "The brown fox";
      $theWord = "quick ";

      echo substr_replace($stringX, $theWord, 4, 0);
      
      // 13 
      echo "<br>";
      echo "<br>";

      $number = "000065722.24";
      echo ltrim($number, "0");

      // 14
      echo "<br>";
      echo "<br>";

      $originalString = "The quick brown fox jumps over the lazy dog";
      echo str_replace("fox", " ", $originalString);

      // 15 

      echo "<br>";
      echo "<br>";

      $originalString2 = "The quick brown fox jumps over the lazy dog------";
      echo str_replace("-", " ", $originalString2);
      
      // 16
      echo "<br>";
      echo "<br>";

      $numberOld = "1+2/3*2:2-3/4*3";
      echo str_replace(array("/","+","*","-",".",":"), " ", $numberOld);
      
      // 17
      echo "<br>";
      echo "<br>";

      $stringX2 = "The quick brown fox jumbs over the lazy dog";
      echo substr($stringX2,0, 19);
      
      // 18
      echo "<br>";
      echo "<br>";

      $numberOld2 = "2,543.12";
      echo str_replace(",", "",$numberOld2);

      // 19
      echo "<br>";
      echo "<br>";

      $char2 = "a";

      for ($i=0; $i<26; $i++) { 
            echo $char2++." ";
      }
      
      ?>


</body>

</html>