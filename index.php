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
      
      echo "<h1 style='background-color:white'> -</h1>";
      

      // Array Ex

      // 1 
      $colorList = ['green','red','white'];
      echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colorList[1] carpet, the $colorList[0] lawn, the $colorList[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

      // 2
      echo "<ul>";
      foreach ($colorList as $element5) {
            echo "<li>$element5</li>";
      }
      echo "</ul>";


      // 3

      $cities = ["italy" => "rome", "france"=> "paris", "germany" => "berlin", "greece" => "athens"];
      
      foreach ($cities as $capital => $value) {
            echo "The capital of $capital is $value <br>";
      }

      // 4
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      
      $colors2 = ['Green','Red','White'];
      echo $colors2[0];

      // 5
      echo "<br>";
      echo "<br>";
      echo "<br>";
      
      $numberArr = ["1","2","3","4"];
      $addNumberArr = ["$"];

      array_splice($numberArr,2, 0, $addNumberArr);
      print_r($numberArr);

      // 6
      echo "<br>";
      echo "<br>";

      $fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
      asort($fruits);
      foreach ($fruits as $key => $value) {
            echo "<br> $key = $value";
      }

      // 7
      echo "<br>";
      echo "<br>";
      
      $temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
      65, 64, 68, 73, 75, 79, 73);

      $sum = 0;

      for($i = 0; $i < count($temperature); $i++){
            $sum = $sum + $temperature[$i];
      }
      $avg = $sum / count($temperature);
      echo "<h3> $avg </h3>"; 
      
      // 8 
      echo "<br>";
      echo "<br>";

      $array3 = ["color"=> "red",2,4];
      $array4 = ["a","b","color" => "green", "shape" => "trapezoid", 4];
      print_r( array_merge($array3, $array4));
      

      // 9
      echo "<br>";
      echo "<br>";
      
      $colors3 = ["red","blue","white","yellow"];
      foreach ($colors3 as $elem) {
            echo strtoupper($elem), "<br>";
      }

      // 10 

      function convertLowerArray(...$arrNewOne){
            foreach ($arrNewOne as $element) {
                  echo strtolower($element);
            };
      };

      convertLowerArray("RED","BLUE","WHITE","YELLOW");

      // LOOP EX

      //1 
      echo "<br>";
      echo "<br>";

      $char4 = "1";
      for ($i=0; $i < 5; $i++) { 
            for ($j=0; $j < $i; $j++) { 
                  echo $char4++, " ";
            }
            echo $char4++, "<br>";
      }


    $year = 2013;
    if($year % 4 ===0 ){
        echo "This year is a leap year";
    } else {
        echo "This is not a leap year";
    }

    $temp = 27;
    if($temp < 20) {
        echo "We are in winter";
    } else {
        echo "We are in summer";
    }

    $x = 2;
    $y = 2;
    if($x === $y) {
        echo ($x + $y)*3;
    } else {
        echo $x + $y;
    }

    $x = 10;
    $y = 12;
    if($x + $y === 30) {
        echo $x + $y;
    } else {
        echo "false";
    }

    $num = 5;
    if(abs($num) % 3 === 0){
        echo "true";
    } else {
        echo "false";
    }

    $min_num = 20;
    $max_num = 50;
    $num = 45;
    if($num >= $min_num && $num <= $max_num){
        echo "true";
    } else {
        echo "false";
    }

    $numbers = [1,5,9];
    echo max($numbers);

    $bill = 240;
    if($bill <= 50){
        echo $bill * 2.5;
    } elseif ($bill <= 150){
        echo (50*2.5 + ($bill-50)*5);
    } elseif($bill <= 250){
        echo (50*2.5 + 100*5 + ($bill-150)*6.2);
    } else {
        echo (50*2.5 + 100*5 + 100*6.2 + ($bill-250)*7.5);
    }

    function calculator($number_one,$number_two,$operation){
        if($operation === "addition"){
            echo $number_one + $number_two;
        } elseif($operation === "subtraction"){
            echo $number_one - $number_two;
        } elseif($operation === "multiplication"){
            echo $number_two * $number_one;
        } elseif($operation === "division"){
            echo $number_one / $number_two;
        } else{
            echo "operation is not clear";
        }
    }
    calculator(5,6,"multiplication");

    $age = 16;
    if($age >= 18){
        echo "You can vote";
    } else {
        echo "you cant vote";
    }

    $number = 40;
    if($number > 0){
        echo "positive";
    } elseif($number < 0){
        echo "negative";
    } else {
        echo "number is zero";
    }

    $grades = [60,86,95,63,55,74,79,62,50];
    $average = array_sum($grades) / count($grades);
    if($average < 60){
        echo "F";
    } elseif($average <70){
        echo "D";
    } elseif($average < 80){
        echo "C";
    } elseif($average < 90){
        echo "B";
    } elseif($average < 100) {
        echo "A";
    }

    $ten = range(1,10);
    for($i = 0; $i<count($ten);$i++){
        if($i === count($ten) - 1){
            echo $ten[$i];
        } else {
            echo $ten[$i]."-";
        }
    }

    $thirty = range(0,30);
    $sum = 0;
    foreach($thirty as $val){
        $sum += $val;
    }
    echo $sum;

    $length = 5;
    for($i = 0;$i<$length;$i++){
        echo "<br>";
        for($j = 0;$j<$length;$j++){
            if($j >= ($length - 1 - $i)){
                echo chr(ord("A") + $i);
            } else {
                echo "A";
            }
        }
    }

    $length = 5;
    for($i = 0;$i<$length;$i++){
        echo "<br>";
        for($j = 0;$j<$length;$j++){
            if($j >= ($length - 1 - $i)){
                echo $i+1;
            } else {
                echo 1;
            }
        }
    }

    $length = 5;
    for($i = 0;$i<$length;$i++){
        echo "<br>";
        for($j = 0;$j<$length;$j++){
            if($j === $i){
                echo $i+1;
            } else {
                echo 0;
            }
        }
    }

    $number =5;
    $sum=0;
    for($i=0 ; $i<=$number; $i++){
        $sum *= $i;
    }
    echo $sum;

    $num1 = 0;
    $num2 = 1;
    $length = 10;
    for($i = 0; $i<$length;$i++){
        echo $num1." ";
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }

    $string = "Orange Coding Academy";
    $sum =0;
    for($i = 0;$i<strlen($string);$i++){
        if(strtolower($string[$i]) === "c"){
            $sum += 1;
        }
    }
    echo $sum;
   

  
    echo "<table border =1 style='border-collapse: collapse', cellpadding=3px>";
    for($i = 0 ; $i<6; $i++){
        echo "<tr>";
        for($j = 0;$j<5;$j++){
            echo "<td>" .($i+1).'*'.($j+1).'='.(($i+1)*($j+1)). "</td>" ;
        }
        echo "</tr>";
    }
    echo "</table>";



    $numbers = range(1,50);
    foreach($numbers as $val){
        if($val % 3 ===0){
            echo "Fizz ";
        } elseif($val % 5 === 0){
            echo "Buzz ";
        } elseif($val % 3 ===0 && $val % 5 === 0){
            echo "FizzBuzz ";
        } else{
            echo $val." ";
        }
    }



    $counter = 1;
    for($i=1;$i<=5;$i++){
        echo "<br>";
        for($j=1;$j<=$i;$j++){
            echo $counter;
            $counter++;
        }
    }

      
      
      // 2
      $char5 = "A";
      for($i=0;$i<=5;$i++){  
            for($k=5;$k>=$i;$k--){  
            echo "&nbsp";  
            }  
            for($j=1;$j<=$i;$j++){  
                echo $char5++," ";  
            }  
            echo "<br>";  
            }      
                for($i=4;$i>=1;$i--){  
                for($k=5;$k>=$i;$k--){  
                echo "&nbsp";  
            }  
            for($j=1;$j<=$i;$j++){  
            echo $char5++," ";
            }  
            echo "<br>";  
        }  
      ?>


</body>

</html>
