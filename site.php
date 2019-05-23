<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <!-- <form action="site.php" method="post">
      <input type="text" name="student">
      <input type="submit">
    </form>
    <br> -->

    <!-- <form action="site.php" method="post">
      Apples:  <input type="checkbox" name="fruits[]" value="apples">
      Oranges: <input type="checkbox" name="fruits[]" value="oranges">
      Bananas: <input type="checkbox" name="fruits[]" value="bananas">
      <input type="submit">
    </form> -->

    <!-- <form class="" action="site.php" method="post">
      What was your Grade?
      <input type="text" name="grade" value="">
      <input type="submit">
    </form> -->

    <?php
    // WHILE LOOP
    // $index = 1;
    // while($index <= 5){
    //   echo "$index <br/>";
    //   $index++;
    // }

    // DO WHILE LOOP
    // $num = 6;
    // do{
    //   echo "$num <br/>";
    //   $num++;
    // }while($num <= 5);

    // SWITCH STATEMENTS
    // $grade = $_POST["grade"];
    // switch($grade){
    //   case "A":
    //     echo "You Got an A! You did great!";
    //     break;
    //   case "B":
    //     echo "You got a B! Good Job!";
    //     break;
    //   case "C":
    //     echo "You got a C! Try harder Next time!";
    //     break;
    //   case "D":
    //     echo "You got a D! You suck dick!";
    //     break;
    //   case "F":
    //     echo "You got an F! You're an absolute failure!";
    //     break;
    //   default:
    //     echo "You did not put in a valid input";
    //     break;
    // }



    // IF STATEMENTS CONTINUED
    // function getMax($num1, $num2, $num3){
    //   if ($num1 >= $num2 && $num1 >= $num3) {
    //     echo $num1;
    //   } else if ($num2 >= $num1 && $num2 >= $num3) {
    //     echo $num2;
    //   } else {
    //     echo $num3;
    //   }
    // }
    //
    // getMax(7,7,22);

    // IF STATEMENT
    // $isMale = true;
    // $isTall = false;
    // if ($isMale && $isTall){
    //   echo "You are male";
    // } else if($isMale && !$isTall){
    //   echo "You aren't tall bro";
    // } else {
    //   echo "You are female";
    // }

    // RETURN STATEMENTS
    // function cube($num) {
    //   return pow($num, 3);
    // }
    //
    // $cubeResult = cube(8);
    //
    // echo $cubeResult;


    // FUNCTION
    // function sayHi($name, $age){
    //   echo "Hello $name, you are $age";
    // }
    //
    // sayHi("Mike", 40);

    // ASSOCIATIVE ARRAY - key value pairs
    // $grades = array("Jim"=>"A+", "Karen"=>"B+", "Oscar"=>"C-");
    // echo $grades[$_POST["student"]]
    // $grades["Jim"] = "F";
    // echo $grades["Jim"];
    // echo count($grades);

    // USING CHECKBOXES
    // $fruits = $_POST["fruits"];
    // echo $fruits[0];


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
