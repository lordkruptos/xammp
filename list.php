<html>
<head>
<?php
$inp=($_POST['array'] );
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
for($i=0;$i<count($inp);$i++)
fwrite($myfile,"$inp[$i]|");
fclose($myfile);
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!"); 
$line = fgets($myfile); 
$oup = explode("|", $line);
echo "<table border ='1' width='400'>";
echo " <tr><th> First Name : </th>  ";
echo "<td>" . $oup[0]."</td></tr>";
echo " <tr> <th>Last Name : </th>  ";
echo "<td>" . $oup[1]."</td></tr>";
echo "<h3> <tr><th> Gender   : </th>  ";
echo "<td>". $oup[2]."</td></tr></h3>";
echo " <tr> <th colspan='2'>  Languages Known : </th><br>";
for ($i=3; $i<count($oup) ; $i++) 
echo  "</tr colspan='2'><td>". strtoupper($oup[$i]) ."</td></tr>";
echo "</table>";
?>
</head>
</html>