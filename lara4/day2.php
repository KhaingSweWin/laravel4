<?php
define('pi',3.141);
echo pi;

$name="David";
echo $name;

const pi1=3.1412;
echo pi1;
//pi1=3.141;
//arithmetic operators
//+,-,*,/,%,**

$marks=[67,88,89,90];
$total=$marks[0]+$marks[1]+$marks[2]+$marks[3];
$avg=$total/count($marks);
echo "<br>";
echo "total is $total <br>";
echo "avg is $avg <br>";

$student_marks=[
    [67,66,89,90],
    [63,88,78,90],
    [78,83,52,90],
    [67,88,90,90]
];

for($row=0;$row<sizeof($student_marks);$row++)
{
    $total_marks=0;
    for($col=0;$col<sizeof($student_marks[$row]);$col++)
    {
        $total_marks=$total_marks+$student_marks[$row][$col];
    }
    $avg_mark=$total_marks/sizeof($student_marks[$row]);
    echo "<br>average mark is $avg_mark";
}

$categories=["Herbs","Electrical devices","Hair Accessories",'Makeup','Lipsticks','Medicine'];
$invoice=[
    [
        'name'=>"monthly subscription",
        'price'=>15,
        'qty'=> 3

    ],
    [
        'name'=>"Theme Customization",
        'price'=>50,
        'qty'=> 1

    ],
    [
        'name'=>"Addition Service",
        'price'=>35,
        'qty'=> 2

    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Sub 1</th>
                        <th>Sub 2</th>
                        <th>Sub 3</th>
                        <th>Sub 4</th>
                        <th>Total</th>
                        <th>Avg</th>
                        <th>sub1-avg</th>
                    </tr>
                </thead>
                <?php
                for($row=0;$row<sizeof(($student_marks));$row++)
                {
                    $total_marks=0;
                    echo "<tr>";
                    echo "<td>".($row+1)."</td>";
                    for($col=0;$col<sizeof(($student_marks[$row]));$col++)
                    {
                        echo "<td>";
                        echo $student_marks[$row][$col];
                        echo "</td>";
                        $total_marks=$total_marks+$student_marks[$row][$col];
                    }
                    echo "<td>$total_marks</td>";
                    echo "<td>". $total_marks/sizeof($student_marks[$row]) . "</td>";
                    if(($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row])<0))
                        echo "<td class='bg-danger'>". $student_marks[$row][0]-$total_marks/sizeof($student_marks[$row]) ."</td>";
                    else
                    echo "<td>". $student_marks[$row][0]-$total_marks/sizeof($student_marks[$row]) ."</td>";
                    echo "<td>". ($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row]))**2 ."</td>";
                    echo "</tr>";
                }
                ?>

            </table>
        </div>
    </div>
    <div class="row">
        <?php

                for($col=0;$col<sizeof($categories);$col++)
                {
                    if($col%2!=0)
                    {
                        echo "<div class='col-2 border bg-warning'>";
                        echo $categories[$col];
                        echo "</div>";  
                    }
                    else
                    {
                        echo "<div class='col-2 border'>";
                    echo $categories[$col];
                    echo "</div>";
                    }
                    
                }
?>
    </div>
   </div> 
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>