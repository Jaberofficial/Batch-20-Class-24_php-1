
<?php 
echo '<a href="contact.php">Contact Us</a>';
echo'
<h1>Hello World!</h1>
<p>This is p tag</p>
<input type="text" name="" value="" placeholder="Enter Your Name">
<br>
<br>
';

$number1 = 10;
$number2 = 10;
$name = "Jaber";

$result = $number1 + $number2;
echo'The Result is ='.$result;
echo"<br>";

echo"<h1>Hello World1</h1>";
echo"<br>";
print "<h2>Hello World2</h2>"; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-24(php-1)</title>
</head>
<body>
    <h1>This is Our First Class on php</h1>
    <?php
      echo"Hello Wolrd php from html body";
      echo" <h1>This is h1 tag from html body </h1> ";

      $marks = [34, 56, 76, 86];
    //   echo $marks[0] .'<br>';
    //   echo $marks[1] .'<br>';
    //   echo $marks[2] .'<br>';
    //   echo $marks[3] .'<br>';

    for($i=0; $i<=3; $i++){
       echo $marks[$i].'<br>';
    }

    ?>
  
</body>
</html>
