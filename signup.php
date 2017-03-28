<?php
require 'connect.inc.php';

if(isset($_POST['user'])&&isset($_POST['pass'])&&isset($_POST['last'])&&isset($_POST['first'])&&isset($_POST['pass1']))
{
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$p1=$_POST['pass1'];
	$fn=$_POST['first'];
	$ln=$_POST['last'];
	
	if(!empty($u)&&!empty($p)&&!empty($p1)&&!empty($fn)&&!empty($ln))
	{
		
		if(strcmp($p,$p1)!=0)
			echo 'password not match';
		else{
			$p=md5($p);
		
		$query_run=mysql_query("INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`) VALUES ('$u', '$p', '$fn', '$ln')") or die(mysql_error());
		}
	}
	else
	{
		echo 'fill all values';
	}
	
}

?>

<hr>

<form action="signup.php" method="POST">
Firstname:<br><input type="text" name="first" placeholder="Firstname" maxlength="30"><br><br>
Lastname:<br><input type="password" name="last" placeholder="Lastname" maxlength="30"><br><br>
Username:<br><input type="text" name="user" placeholder="Username" maxlength="30"><br><br>
Password:<br><input type="password" name="pass" placeholder="Password" maxlength="30"><br><br>
Re-Enter Password:<br><input type="password" name="pass1" placeholder="Password" maxlength="30"><br><br>
<input type="reset" value="RESET"><br><br>
<input type="submit" value="SIGNUP">
</form>
