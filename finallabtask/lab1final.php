<html>
    <body>
<h3>1) Calculate the area of Rectangle and perameter of a Rectangle:</h3>
<?php
$length = 5;
$width = 10;
$Rec = $length * $width; 
$para = 2 * ($length + $width);

echo "Length: $length<br>";
echo "Width: $width<br>";
echo "The area of Rectangle:  $Rec<br>";
echo "Parameter: $para";

?>

<h3>2) Calculate the VAT over an amount:</h3>

<?php
$amount = 5700;   
$vat_rate = 0.15; 

$vat = $amount * $vat_rate;       
        
echo "Original Amount: $amount<br>";
echo "VAT = 15% of the amount= $vat<br>";

?>

<h3>3) Find whether a given number is odd or even</h3>

<?php
$number = 30;

if ($number % 2 == 0) {
    echo "The given number $number is even";
} else {
    echo "The given number $number is odd";
}
?>

<h3>4) Find the largest number from three given numbers</h3>

<?php
$a=20;
$b=14;
$c=5;

echo "Three numbers:<br>";
echo "a:$a<br>";
echo "b:$b<br>";
echo "c:$c<br>";

if($a>$b && $a>$c){
    echo "The largest number is a:$a<br>";
}else if($b>$a && $b>$c){
    echo "The largest number is b:$b<br>";
}else{
        echo "The largest number is c:$c<br>";

}

?>
<h3>5) Printing all the Odd Numbers Between 10 and 100</h3>
<?php
for($i=10;$i<=100;$i++){

    if($i%2!=0){

        echo "The odd number are $i<br>";
    }
}
?>

</body>
</html>