<html>
<head>
<title>php program for evenodd</title>
</head>
<body>
<form method ="post">
<table border="0">
<tr>
<td><input type ="text" name="num1" value="" placeholder="enter a value"/></td>
</tr>
<tr>
<td><input type ="submit" name="submit" value="submit"/>
</td>
</tr>
</table>
</form>
<?php
if (isset($_POST["submit"]))
{
    $a=$_POST['num1'];
    if($a%2==0)
    {
        echo("The number is even");
    }
    else
    {
        echo("The number is odd");
    }
    return 0;
}
?>
</body>
</html>
