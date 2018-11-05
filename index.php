<?php 
$sum=0;
for($i=1;$i<=100;$i++)
{
    $sum=$sum+$i;
}
echo $sum;
 
function sum($n)
{
	if($n>1)
	{
     return $n+sum($n-1);
	}else{
     return 1;
	}
}
echo sum(100);
 
$size=0;
$fact=0;
for($size=-1;$size<10;$size++)
{
	echo "$size!=";
	if($size<0)
	{
		echo "error<br/>";
		continue;
	} 
    $result = 1;
    for($fact=2;$fact<=$size;$fact++)
    {
    	$result*=$fact;
    	echo $result."<br/>";
    }
}

function fact($n)
{
	if($n<0)
	{
		return "error";
	}
	if($n==0)
	{
		return 1;
	}
	return $n*fact($n-1);
}
for($i=-1;$i<10;$i++)
{
	echo "$i!=".fact($i)."<br/>";
}

function hui($str)
{
$len =strlen($str);
$l=1;
$k=intval($len/2)+1;
for($j=0;$j<$k;$j++)
{
	if(substr($str,$j,1)!=substr($str,$len-$j-1,1))
	{
      $l=0;break;
	}
}
if($l==1)
{
	return 1;
}else{
	return 0;
}
}
$str=123321;
echo hui($str);


class Person
{
	  public $name;
      public $age;
}

interface Walk
{
   public functian walk()
}

class Student extends Person
{
	news student1();
	news student2();
	news student3();
	news student4();
	news student5();
	news student6();
	news student7();
	news student8();
}

 ?>
