<?php
$names=($_POST['array'] );
$n=count($names);
print("<h2> The unsorted array is: "."<br>");
for($i=0;$i<$n; $i++)
echo "<h3> $names[$i] <br>";
echo "<h2> Array count is : $n <br>";
for ($i=1; $i<$n;$i++)
{
for($j=0;$j<$n-$i;$j++)
 {
 if(strcmp($names[$j] ,$names[$j+1])>0)
 {
 $temp=$names[$j];
 $names[$j]= $names[$j+1];
 $names[$j+1]=$temp;
 }
}
}
print("<h2> Array after sorting is : </h2>");
for($i=0;$i<$n; $i++)
echo "<h3> $names[$i] <br>";
?>