<?

//Working with arrays

$array = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");

foreach($array as $val)	{
	//Make this echo out each val on a new line
}


//You can also do it this way:
$x = count($array);
for ($i=0; $i < $x; $i++) { 
	echo $array[$i] . '<br />';
}


//Now try and echo out just the third value in the array.


//not print out the whole array


?>