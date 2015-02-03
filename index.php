<html>
<head>
<title> PHP Homework, Exercise 1, Swati!!! </title>

<body>
<h1> My First PHP File </h1>
<p> <?php echo 'Let us learn PHP! Never too old to learn!'; ?> </p>
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
$author= array ("Charles Dickens", "William Thackeray", "Anthony Trollope", "GM Hopkins");
$deathdate= array ("1870", "1863","1882", "1889");

foreach ($author as $key=>$name) {
	echo $name. " died in " .$deathdate[$key].". <br/>";
}
?>
</body>
</head>
</html>