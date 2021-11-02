<?php

abstract class name{

    abstract private function dmeo();

}

$new  =  new name();

exit();
/*
$num = 79658;

$revnum = 0;

while ($num > 1)

{
echo $num."-";
$rem = $num % 10;
echo $rem;

$revnum = ($revnum * 10) + $rem;
echo $revnum;
$num = ($num / 10);
echo $num;
exit();
}
*/
// echo "Reverse number of 79658 is: $revnum";
/*for ($i=strlen($a)-1; $i >= 0 ; $i--) {
	// code...
	// echo $i;
	echo $a[$i];
}*/
/*$x = 4;
while($x >= 0){
	// echo $x;
	$a[1];
	$x--;
}*/

/**
**
***
*****/

// for ($i=0; $i <= 4 ; $i++) {
// 	for ($j=0; $j < $i; $j++) {
// 		echo  "*";
// 	}
// 	echo"</br>";
// }

/*$x = 5;
echo $x; //5
echo "<br />";
echo $x+++$x++;  //5 + 6
echo "<br />";
echo $x;  //7
echo "<br />";
echo $x---$x--; //7 - 6
echo "<br />";
echo $x; //5*/

// $a = '1';
// echo $b = &$a;
// $b = "2$b";

/*var_dump(0123 == 123); //false
var_dump('0123' == 123); //true
var_dump('0123' === 123); // false*/

/*$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);
print_r($testArray);
// print_r($referenceTable['val2']);
$testArray = array_merge($testArray, $referenceTable['val2']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);*/

/*echo $x = 3 + "15%" + "$25"*/

/*$text = 'John ';
$text[10] = 'Doe';

echo strlen($text); // John     Doe
John      D*/


/*// var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MAX + 1)*/

// $a = "PHP";
// $a = $a + 1;
// echo $a;
/*$a = array(
	'0' => 'z1',
	'1' => 'Z10',
	'2' => 'z12',
	'3' => 'Z2',
	'4' => 'z3',
);
asort($a,SORT_STRING|SORT_FLAG_CASE|SORT_NATURAL);
print_r($a);*/

/*$x = NULL;

if ('0xFF' == 255) {
    $x = (int)'0xFF';
echo $x;
}
*/

// $arr=array("0"=>"Even","1"=>"Odd");

// $check=13;

// echo "Your number is: ".$arr[$check%2];

/*$str1 = 'yabadabadoo';
$str2 = 'yaba';
echo strpos($str1,$str2);
exit();
if (strpos($str1,$str2)) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}*/
/*$date1 = "25-09-2020";

$date2 = "31-01-2021";

echo strtotime($date1) - strtotime($date2);*/


$a = array(1,50);

echo is_array ($a);


?>