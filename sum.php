
<html>
    <body>
        <form  method="post">
        <input type="text" name="first" placeholder="enter no">
        <input type="text" name="sec" placeholder="enter no">
        <input type="submit" name=""  >
        </form>
        <?php
    $num =$_POST['first'];
    
    $num2 =$_POST['sec'];
    echo$num2+$num;
        ?>
    </body>
</html>