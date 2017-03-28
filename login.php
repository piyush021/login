<br>
<?php

require 'connect.inc.php';

if(isset($_POST['user'])&&isset($_POST['pass']))
{
	$u=$_POST['user'];
	$p=$_POST['pass'];
	
	if(!empty($u)&&!empty($p))
	{
		$p=md5($p);
		
		$query_run=mysql_query("select * from users where username='$u' and password='$p'") or die(mysql_error());
		
		if(mysql_num_rows($query_run)>0)
			echo "welcome user";
		else
			echo "username or password is incorrect";
	}
	else
	{
		echo 'fill all values';
	}
}

?>

<hr>

<form action="login.php" method="POST">
USERNAME:<br><input type="text" name="user" placeholder="Username" maxlength="30"><br><br>
PASSWORD:<br><input type="password" name="pass" placeholder="Password" maxlength="30"><br><br>
<input type="submit" value="LOGIN"><br><br>
<input type="reset" value="RESET"><br>

</form>

<form action="signup.php" method="POST">
<input type="submit" value="SIGN UP">
</form>