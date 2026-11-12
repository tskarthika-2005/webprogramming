<?php
$names=array(
"s1"=>"gopu",
"s2"=>"karthika",
"s3"=>"ameya",
"s4"=>"fidha");
echo"<center>";
echo"<h2>original student list</h2>";
echo"<pre>";
print_r($names);
echo"</pre>";
asort($names);
echo"<h2>ascending order:</h2><br>";
echo"<pre>";
print_r($names);
echo"</prev>";
arsort($names);
echo"<h2>descending order:</h2><br>";
echo"<pre>";
print_r($names);
echo"</prev>";
echo"</center>";
?>
