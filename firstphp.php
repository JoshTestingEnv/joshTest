<!DOCTYPE html>
<html>


<h1> Steve's page</h1>

<body>

	<p>
<?php

echo "Hello.  ";

$people=array("Steve","David","Terah");

echo "My name is " . $people[0] . ". ";


echo "My wife is " . $people[2] . ". "."I am friends with " . $people[1] . ". ";

echo "I am ";

$q=20;
$r=11;
$s=$q+$r;
echo "$s" . " years old.";


?>
</p>
<p>

<?php
echo "Have a ";


$t=time();
if ($t>"5")
{
	echo "Good evening";
}
else if ($t>"12")
{
	echo "Good afternoon";	
}
 else {
echo "Good morning";
}
























?>


</body>