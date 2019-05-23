<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <!-- <form action="site.php" method="post">
      Name: <input type="password" name="password">
      <input type="submit">
    </form>
    <br> -->

    <form action="site.php" method="post">
      Apples:  <input type="checkbox" name="fruits[]" value="apples">
      Oranges: <input type="checkbox" name="fruits[]" value="oranges">
      Bananas: <input type="checkbox" name="fruits[]" value="bananas">
      <input type="submit">
    </form>

    <?php
    // USING CHECKBOXES
    $fruits = $_POST["fruits"];
    echo $fruits[0];


    // ARRAY
    // $newArray = array("Kevin", "Karen", "Oscar", "Jim");
    // $newArray[1] = "Dwight";
    // echo $newArray[1];
    // $newArray[4] = "Angela";
    // echo $newArray;
    // echo count($newArray);
    // echo $newArray[4]

    // POST VS GET
    // echo $_POST["password"];


    // URL PARAMS
    // echo $_GET["name"];
    // echo $_GET["age"]; // input param into url, not into form, it populates on page

    // GET USER INFO
    // echo $_GET["name"];

    // WORKING WITH NUMBERS
    // echo 7; // whole number or integer
    // echo 7.7; // floating point number or decimal
    // echo 10 % 3; // modulo operator- gives you remainder
    // $num = 10;
    // $num += 25;
    // $num++; // adds 1 to the number, -- subtracts 1 from the number
    // echo pow(2,4); //raise to the x power
    // echo sqrt(144); //sq rt
    // echo max(2,10); //which number is bigger, min( )handles smaller
    // echo round(3.2); // standard rounding rules apply
    // echo ceil(3.3); // rounds up no matter what
    // echo floor(3.3); // rounds down always


    // WORKING WITH STRINGS
    // $phrase = "Giraffe Academy";
    // echo strtolower($phrase);
    // echo strtoupper($phrase);
    // echo strlen($phrase);
    // echo $phrase[3];
    // echo $phrase[0] = "B";
    // echo $phrase
    // echo str_replace("Giraffe", "Panda", $phrase);
    // echo substr($phrase, 8, 3);


    // DATA TYPES
    /* $phrase = "To be or not to be"; //string
    $integer = 35; //integer, positive or negative
    $float = 3.5; //any numnber with a decimal point
    $boolean = true; //true or false value
    null; //no value, is it's own data type */



    // VARIABLES
    /*  $characterName = "John";
      $characterAge  = 38;
      echo "There was once a  man named $characterName <br>";
      echo "He was $characterAge years old <br>";
      echo "He really liked the name $characterName <br>";
      echo "But he didn't like being $characterAge <br>"; */
    ?>



  </body>
</html>
