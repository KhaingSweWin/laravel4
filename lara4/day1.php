<?php
ob_start();
// to display strings
echo "PHP lessons..." . '<br>';
echo 'Day1 for Laravel'."<br>";
echo '<h1>Heading 1</h1>';
// comment
/*
for project
developer:David
starting date: .....
*/
print_r("Hello. Welcome to php lessons");
var_dump("Hello");
$name="Host Myanmar";
$address="Garden City Condo";
$mail="admin@hostmm.tech";
echo gettype($name);
echo "<br>";
$age=22;
echo "$age :" . gettype($age);
echo "<br>";
$rate=0.05;
echo gettype($rate);
echo "<br>";
$status=true;
echo gettype($status);
echo "<br>";
//array
$students=['mg mg','david','thiri'];
echo gettype($students);
echo $students[0];
echo "<br>";
echo $students[1];

$marks=array('60',88,79,94);
echo gettype($marks);
var_dump($marks);

$student=[
    'name'=> 'David',
    'age'=>25,
    'position'=> 'PM',
    'marks'=>[76,80,90,95]
];
echo "associative array";
echo gettype($student);
echo "<br>";
echo $student['name']. ",". $student['age'];
echo sizeof($student);
print_r($student['marks']) ;

$employees=[
    ['david',25,'PM'],
    ['Bruce',30,'Network Engineer'],
    ['Keith',28,'data scientist']
];

echo sizeof($employees);
echo sizeof($employees[1])
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
    Strating PHP Lesssons
    <?php
    echo "<div class='container bg-primary'>";
    echo "<div class='row'>";
    echo "<div class='col-6'>";
    echo "<div class='row'>";
    echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsum nulla rerum deserunt, porro sint vero doloremque quisquam! Dolorum nulla corporis, impedit quisquam quam recusandae suscipit doloribus alias in animi.";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-4'>";
    echo "<img src='images/Pink_flower.jpg' width='100%'>";
    echo "</div>";
    echo "<div class='col-4'>";
    echo "<img src='images/Pink_flower.jpg' width='100%'>";
    echo "</div>";
    echo "<div class='col-4'>";
    echo "<img src='images/Pink_flower.jpg' width='100%'>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "</div>";
    echo "</div>";
    echo "<div class='col-6'>";
    echo $name;
    echo "</div>";
    echo "</div>";
    echo "</div>";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 border">
                <?php
                echo $name;
                ?>
            </div>
            <div class="col-md-4">
                <?php
                echo $address;
                ?>
            </div>
            <div class="col-md-4">
               <?php
               echo $mail;
               ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>