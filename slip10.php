<?php
	echo"parth";
	$a=$_POST['a'];
	$b=$_POST['b'];
	$ch=$_POST['ch'];
	
	echo "First Number is $a";
	<br>;
	echo "Second Number is $b";
	
	switch($ch)
	{
		case 1: functon mod($a,$b)
			{
				$c=$a%$b;
				echo "MOD of two no.: $c<br>";
				break;
			}
		case 2: functon power($a,$b)
			{
				$c=$a**$b;
				echo "Pwoer of $a by $b is : $c<br>";
				break;
			}
		case 3: functon sum($a)
			{
				$sum=0;
				for($i=1;$i<=$a;$i++)
					$sum=$i + $a;
				echo "sum of first $a numbers is : $sum<br>";
				break;
			}
		case 4: functon fact($b)
			{
				$fact=1;
				for($i=1;$i<=$a;$i++)
					$fact=$i * $b;
				echo "Factorial of Sceond of $b is : $fact<br>";
				break;
			}
		
	}
	mod($a,$b);
	power($a,$b);
	sum($a);
	fact($b);
?>
