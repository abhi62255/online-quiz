<html>
<html>
<head>
	<title>Result</title>
</head>
<body>
<?php
$marks=0;
$correct=0;
$opt1=$_POST["option1"];
$number=count($opt1);
if($number == 2)
{
	if($opt1[0] == a && $opt1[1] == c)
	{
		$marks = $marks + 1;
		$correct = $correct +1;
	}
}	

$opt2=$_POST["option2"];
$number=count($opt2);
if($number == 2)
{
	if($opt2[0] == b && $opt2[1] == d)
	{
		$correct = $correct +1;
		$marks = $marks + 1;
	}
}	

$opt3=$_POST["option3"];
$number=count($opt3);
if($number == 2)
{
	if($opt3[0] == a && $opt3[1] == b)
	{
		$marks = $marks + 1;
		$correct = $correct +1;
	}
}	

$opt4=$_POST["option4"];
$number=count($opt4);
if($number == 1)
{
	if($opt4 == c)
	{
		$marks = $marks + 1;
		$correct = $correct +1;
	}
}	
echo " Total Marks :" . $marks;
echo "Correct Number of quesions :" . $correct;
?>

</body>
</html>