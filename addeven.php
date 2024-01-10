<html>
<head>
<title>PHP Program To find the Sum of N even numbers</title>
</head>
<body>
<form method="post">

<input type="text" name="num" value="" placeholder="Enter a number"/> 

 <input type="submit" name="submit" value="Submit"/> 
</form>
<?php
if(isset($_POST['submit']))
{
$n = $_POST['num'];
$sum = 0;

for($i = 0; $i <= $n; $i += 2)
{
$sum = $sum + $i; 
}
echo "Sum of $n even numbers = $sum";
return 0;
}
?>
</body>
</html>
   