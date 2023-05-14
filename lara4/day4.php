<?php
$mark1=88;
$mark2="67";

echo gettype($mark1);
echo gettype($mark2);

var_dump($mark1==$mark2);
var_dump($mark1===$mark2);
$mark2=50;
var_dump($mark1<=>$mark2) ;//greater than => 1, less than=>-1, equal => 0

$student=null;

$result=$mark2 >75 ? "Distinction" : "Pass";

echo "<br>".$result;

$result1=$mark1>=50 && $mark2>=50 ? "Pass" : "Fail";
echo "<br>" . $result1;

$result2=$mark1>=75 ? "Distinction" : ($mark1>=65 ? "Credit" : ($mark1>=50 ? "Pass" : "Fail"));

echo "<br>".$result2;

$student=null;

$status1= $student ?? "default user";
echo $status1;

var_dump($mark1>=50 xor $mark2>=50);

switch(false){
    case ($mark1>=75): $status="Distinction";break;
    case ($mark1>=65): $status="Credit";break;
    case ($mark1>=50): $status="Pass";break;
    default: $status="Fail";
}
echo $status;

$unit_price=12000;
$qty=240;
switch(true){
    case ($qty>=200) : $discount=0.1*$unit_price*$qty;break;
    case ($qty>=150) : $discount=0.08*$unit_price*$qty;break;
    case ($qty>=100) : $discount=0.05*$unit_price*$qty;break;
    case ($qty>=50) : $discount=0.03*$unit_price*$qty;break;
    default: $discount=0;
}
$total_cash=($qty*$unit_price)-$discount;
echo "You have to pay this amount :". $total_cash;
echo "You get discount : ". $discount;

$marks=[78,90,88,76];
$count=0;
$totalmarks=0;
while($count<sizeof($marks))
{
$totalmarks+=$marks[$count];
$count++;
}
echo "total marks : ".$totalmarks;

$shopping=[
    [
    "name" => "Ma Ma noodle",
    "price" => 450,
    "qty"=> 180
    ],
    [
    "name" => "UFL Book",
    "price" => 1780,
    "qty"=> 130
    ],
    [
    "name" => "Lucky Water bottle",
    "price" => 2200,
    "qty"=> 12
    ]
    ];
    
//1: function definition
function calculate_total_cash($shopping_list)
{
    $total=0;
    foreach($shopping_list as $key=>$item)
    {
        $total+= $item['price'] * $item['qty'];
    }

    switch(true){
        case ($total>300000) : $discount=0.03*$total;break;
        case ($total>100000) : $discount=0.01*$total;break;
        default: $discount=0;
    }

    $total_cash=$total-$discount;
    // echo "<br>";
    // echo "Total cash is ". $total_cash;
    return $total_cash;
}

//2: function call

$total_amount=calculate_total_cash($shopping);
echo "total amount is ". $total_amount;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>