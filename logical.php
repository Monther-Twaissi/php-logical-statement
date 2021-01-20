<html>

<body>
<?php

function billCalculator($units) {
    $firstCost = 2.50;
    $secondCost = 5.00;
    $thirdCost = 6.20;
    $forthCost = 7.50;

    if($units <= 50) {
        $bill = $units * $firstCost;
        echo $bill;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $firstCost;
        $unitsRemain = $units - 50;
        $bill = $temp + ($unitsRemain * $secondCost);
        echo $bill;
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $secondCost);
        $unitsRemain = $units - 150;
        $bill = $temp + ($unitsRemain * $thirdCost);
        echo $bill;
    }
    else {
        $temp = (50 * 3.5) + (100 * $secondCost) + (100 * $thirdCost);
        $unitsRemain = $units - 250;
        $bill = $temp + ($unitsRemain * $forthCost);
        echo $bill;
    }
}
billCalculator(50);

echo "<br>"."**********************************"."<br>";

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($number1) && is_numeric($number2)) {
    switch ($operator) {
        case "Add":
           $result = $number1 + $number2;
            break;
        case "Subtract":
           $result = $number1 - $number2;
            break;
        case "Multiply":
            $result = $number1 * $number2;
            break;
        case "Divide":
            $result = $number1 / $number2;
    }
}
echo "<br>"."**********************************"."<br>";

function isEligible($person){
    if($person >= 18){
        echo "You are allowed to vote!";
    }else{
        echo "Try agin next year!";
    }
}
isEligible(20);

echo "<br>"."**********************************"."<br>";

function isPositive($vlaue){
    if($vlaue > 0){
        echo "Number is Positive";
    }elseif($vlaue < 0){
        echo "Number is Negative";
    }else {
        echo "ZERO";
    }
}
isPositive(-5);
?>

<div>
<h1>My Calculator</h1>
  <form action="" method="post" id="quiz-form">
        <p>First Number
        </p>
            <input type="number" name="number1" id="number1" required="required" value="<?php echo $number1; ?>" /> 
        <p>Second Number
        </p>
            <input type="number" name="number2" id="number2" required="required" value="<?php echo $number2; ?>" /> 
        <p>Result
        </p>
            <input readonly="readonly" name="result" value="<?php echo $result; ?>"> 
        <br>
        <br>
        <input type="submit" name="operator" value="Add" />
        <input type="submit" name="operator" value="Subtract" />
        <input type="submit" name="operator" value="Multiply" />
        <input type="submit" name="operator" value="Divide" />
  </form>
  <hr>
</div>
</body>
</html>