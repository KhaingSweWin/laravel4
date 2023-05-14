<?php
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


function calSubTotal($shopping)
{
    $subtotal=0;
    foreach($shopping as $data)
    {
        $subtotal+=$data['price']*$data['qty'];
    }
    function calVAT($amount,$rate)
    {
        $tax=$amount * $rate/100;
        return $tax;
    }
    return $subtotal;
}

//$subtotal=calSubTotal($shopping);

$rate=12.5;
$subtotal=380000;
$tax=calVAT($subtotal,$rate);

$total=$subtotal+$tax;
echo "Total amount is $total";

?>