<?php
$age=array("Peter"=>35,"Ben"=>45,"Jon"=>55);

echo"<pre>";
print_r($age);
echo"</pre>";
foreach($age as $x=>$val)
{
    echo"$x = $val<br>";
}
?>