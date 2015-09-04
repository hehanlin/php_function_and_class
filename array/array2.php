<?php
//array array_keys ( array $array [, mixed $search_value [, bool $strict = false ]] )

//array_keys() 返回 input 数组中的数字或者字符串的键名。 

//如果指定了可选参数 search_value，则只返回该值的键名。否则 input 数组中的所有键名都会被返回。

$arr = ['fruit'=>'apple',
        'name'=>'hehanlin'];
$res = array_keys($arr,'apple'); 

var_dump($res);

echo "\n//////////////////////////////////////////////////////////////////////\n";

//array array_map ( callable $callback , array $arr1 [, array $... ] )

//array_map() 返回一个数组，该数组包含了 arr1 中的所有单元经过 callback 作用过之后的单元。callback 接受的参数数目应该和传递给 array_map() 函数的数组数目一致。 
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
echo "\n//////////////////////////////////////////////////////////////////////\n";


//array array_merge_recursive ( array $array1 [, array $... ] )

//array_merge_recursive() 
//将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。 

//如果输入的数组中有相同的字符串键名，则这些值会被合并到一个数组中去，这将递归下去，因此如果一个值本身是一个数组，本函数将按照相应的条目把它合并为另一个数组。然而，如果数组具有相同的数组键名，后一个值将不会覆盖原来的值，而是附加到后面。 
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);
echo "\n//////////////////////////////////////////////////////////////////////\n";

//array array_merge ( array $array1 [, array $... ] )

//array_merge() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。 

//如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。然而，如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。 

//如果只给了一个数组并且该数组是数字索引的，则键名会以连续方式重新索引。 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n//////////////////////////////////////////////////////////////////////\n";
	

//bool array_multisort ( array &$arr [, mixed $arg = SORT_ASC [, mixed $arg = SORT_REGULAR [, mixed $... ]]] )

//array_multisort() 可以用来一次对多个数组进行排序，或者根据某一维或多维对多维数组进行排序。 

//关联（string）键名保持不变，但数字键名会被重新索引。 

//排序顺序标志： 
//◦ SORT_ASC - 按照上升顺序排序 
//◦ SORT_DESC - 按照下降顺序排序 


//排序类型标志： 
//◦ SORT_REGULAR - 将项目按照通常方法比较 
//◦ SORT_NUMERIC - 将项目按照数值比较 
//◦ SORT_STRING - 将项目按照字符串比较 


//每个数组之后不能指定两个同类的排序标志。每个数组后指定的排序标志仅对该数组有效 - 在此之前为默认值 SORT_ASC 和 SORT_REGULAR。 

//输入数组被当成一个表的列并以行来排序——这类似于 SQL 的 ORDER BY 子句的功能。第一个数组是要排序的主要数组。数组中的行（值）比较为相同的话就按照下一个输入数组中相应值的大小来排序，依此类推。 

//本函数的参数结构有些不同寻常，但是非常灵活。第一个参数必须是一个数组。接下来的每个参数可以是数组或者是下面列出的排序标志。 
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

var_dump($ar1);
var_dump($ar2);
echo "\n//////////////////////////////////////////////////////////////////////\n";
$ar = array(
       array("10", 11, 100, 100, "a"),
       array(   1,  2, "2",   3,   1)
      );
array_multisort($ar[0], SORT_ASC, SORT_STRING,
                $ar[1], SORT_NUMERIC, SORT_DESC);
var_dump($ar);
echo "\n//////////////////////////////////////////////////////////////////////\n";

///////////////////////////////////////end 2015/8/20////////////////////////////////////////


//number array_product ( array $array )

//array_product() 以整数或浮点数返回一个数组中所有值的乘积。 
$a = array(2, 4, 6, 8);
echo "product(a) = " . array_product($a) . "\n";
echo "product(array()) = " . array_product(array()) . "\n";

echo "\n//////////////////////////////////////////////////////////////////////\n";
//////////////////////////////////////////////////////////////////////////////////////
//mixed array_rand ( array $input [, int $num_req = 1 ] )

//从数组中取出一个或多个随机的单元，并返回随机条目的一个或多个键。
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

echo "\n//////////////////////////////////////////////////////////////////////\n";
//////////////////////////////////////////////////////////////////////////////////////
//mixed array_reduce ( array $input , callable $function [, mixed $initial = NULL ] )

//array_reduce() 将回调函数 function 迭代地作用到 input 数组中的每一个单元中，从而将数组简化为单一的值
function rsum($v, $w)
{
    $v += $w;
    return $v;
}

function rmul($v, $w)
{
    $v *= $w;
    return $v;
}

$a = array(1, 2, 3, 4, 5);
$x = array();
$b = array_reduce($a, "rsum");
$c = array_reduce($a, "rmul", 10);
$d = array_reduce($x, "rsum", "No data to reduce");
var_dump($b,$c,$d);
echo "\n//////////////////////////////////////////////////////////////////////\n";

//////////////////////////////////////////////////////////////////////////////////////
	
