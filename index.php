<html>
<head>
<title> PHP Homework, Exercise 2, Swati!!! </title>

<body>
<h1> My First PHP File </h1>
<p> <?php echo 'Let us learn PHP! Never too old to learn! Haha'; ?> </p>
<?php
function multiply ($x,$y)
{
	return $x * $y;
}

$values = array ( 
	4 => 2,
	0 => 4,
	900 => 32,
	29999 => 23
	);
foreach ($values as $x => $y) {
	echo "<li>" . multiply ($x,$y) . "</li>";
}

?>

<?php
function convert ($second)
{
	return $second/(31557600);
} 
$second = array(600000000,60,40000.33);
foreach ($second as $seconds) 
{
	$year = convert ($seconds);
	echo "<li>" . $seconds . " seconds is " . $year . "." . "</li>";

}

?>


<?php
function divide ($x,$y)
{
	return $x / $y;
}

$values = array ( 
	4 => 2,
	0 => 4,
	4 => 0,
	900 => 32
	);
foreach ($values as $x => $y) {
	if ($y == 0) {
		echo "<li>" . "You cannot divide by zero, duh!" . "</li>";
	}
	else {
	echo "<li>" . divide ($x,$y) . "</li>";
	}
}


?>

<?php
function compare ($x,$y)
{
	
	if ($x < $y) {
		return $x ;
	}
	elseif ($x == $y) {
	return  "The numbers are equal." ;
	}
	else {
	return	$y ;
	}
}


?>

<?php
function generate ($year)
{
	
	if ($year < 1900) {

		echo "<li>" . "I have a mattress for thee, traveller from distant lands!" . "</li>";

	}
	elseif ($year < 2020) {
	echo "<li>" . "I have a mattress for you, dear friend!" . "</li>";
	}
	else {
	echo "<li>" . "I have a mattress for ya, dude!" . "</li>";
	}


}
generate (1823);
generate (1995);
generate (3043);

?>
<?php
$address= array (
	"name"=>"Swati Chawla",
	"street"=>"Apt XYZ, 123 ABC Rd",
	"city"=>"Charlottesville",
	"state"=>"VA",
	"zipcode"=>"22903",
	) 
?>
<h2> My Address in Charlottesville </h2>
<p> <?php echo $address["name"]?> </p>
<p> <?php echo $address["street"]?> </p>
<?php echo $address["city"]?> 
 <?php echo $address["state"]?>,
 <?php echo $address["zipcode"]?>.

<h3> Authors and Death Dates </h3>
<?php
$authordeathyear= array (
	"Charles Dickens" => "1870", 
	"William Thackeray" => "1863", 
	"Anthony Trollope" => "!882", 
	"GM Hopkins" => "1889");


foreach ($authordeathyear as $author=>$deathyear) {
	echo $author. " died in " .$deathyear.". <br/>";
}
?>
</body>
</head>
</html>