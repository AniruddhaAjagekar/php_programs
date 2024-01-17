<?php
$cars = array("Volvo","BMW","Supra",10,20.55);
echo"I like".$cars[0].",".$cars[1].",".$cars[2];

$cars[2]="MgHector";
echo"<pre>";
print_r($cars);
echo"</pre>";

for($i=0;$i<=4;$i++)
{
    echo $cars[$i]."<br>";
}
?>