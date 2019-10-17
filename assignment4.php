<html>
<head>
<title>Movie Store</title>
</head>

<body>
<h1>Movie Store</h1>
</body>
</html>

<?php

$movies = array("The Farewell","Manhattan Short","Maiden","The Last Black Man in San Francisco","BIG","Jurassic Park", 
"Star Wars","Aquaman","Rush Hour","La La Land");
shuffle($movies);
for ($i = 0; $i < 10; $i++) {
    echo $movies[$i];
    echo "<br></br>";
    
   
}

echo "\n";

$moviearray = array('The Farewell'=>1.99, 'Manhattan Short'=>2.99, 'Maiden'=>3.99, 'The Last Black Man in San Francisco'=>4.99, 'BIG'=>5.99, 'Jurassic Park'=>6.99, 
'Star Wars'=>7.99, 'Aquaman'=>1.99, 'Rush Hour'=>2.99, 'La La Land'=>3.99);
echo "<br></br>";
print_r($moviearray);
$List  = implode(', ', $moviearray);
print_r($List);
echo "<br></br>";

/* echo "\n";
echo "<pre>";
print_r($movies);
echo "</pre>"; */

echo "\n";
$rentalprice = array('The Farewell'=>1.99, 'Manhattan Short'=>2.99, 'Maiden'=>3.99, 'The Last Black Man in San Francisco'=>4.99, 'BIG'=>5.99, 'Jurassic Park'=>6.99, 
'Star Wars'=>7.99, 'Aquaman'=>1.99, 'Rush Hour'=>2.99, 'La La Land'=>3.99);
asort($rentalprice);
foreach($rentalprice as $y=>$y_value){
echo "The price of ".$y." is : ".$y_value." <br> ";
}

echo "<br></br>";
print_r($rentalprice);
$List  = implode(', ', $rentalprice);
print_r($List);

/* echo"\n";
echo "<pre>";
print_r($rentalprice);
echo "</pre>"; */

echo "<br></br>";
$avgprice =array(1.99, 2.99, 3.99, 4.99, 5.99, 6.99, 7.99, 1.99, 2.99, 3.99);
$average=array_sum($avgprice) / count($avgprice);
echo "The average rental price for a movie is: ".$average."";
echo "<br></br>";

sort($avgprice);

echo "The 2 highest rental prices are: ";
    for($i = count($avgprice) - 2; $i <= count($avgprice) - 1; $i++)
    {
        echo "$avgprice[$i], ";
    }
        echo "<br>";

echo "The 2 lowest rental prices are: ";
    for ($i = 0; $i<2; $i++) {
    echo "$avgprice[$i], ";
}
 echo "<br>";


?>
