<html>
<body>
<!--Your code goes here-->
<h2>Addition</h2>
<form method=get action=addition.php>
<input type="number" name="add_first"> + 
<input type="number" name="add_second">
<input type=submit value="calculate">

<h2>Division</h2>
<input type="number" name="numerator">  /
<input type="number" name="denominator">
<input type=submit value="calculate" formaction=division.php>

<h2>Hypotenuse</h2>
Length of side a: <input type="number" name="side_a">
<br>
Length of side b: <input type="number" name="side_b">
<input type=submit value="calculate" formaction=hypotenuse.php>
</form>
<br>
<a href="index.php">Reset</a>
</body>
</html>