<?php
session_start ();

if(isset($_SESSION['name']))
{
	if(isset($_POST['submit']) && ($_POST['submit'] = "erase my name!"))
	{
		session_destroy ();
?>
		<META HTTP-EQUIV=REFRESH CONTENT='1; URL=http://<?php echo $_SERVER['SERVER_NAME']; echo $_SERVER['PHP_SELF'];?>'>
<?php
	}
	else
	{
		echo "Ola ".$_SESSION['name'] . " ";
	}
?>
	<form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
	<input type='submit' value='erase my name!' name='submit'>
	</form>
<?php
}
else
{
	if(isset($_POST['submit']))
	{
		$_SESSION['name'] = $_POST['name'];
		?>
		<META HTTP-EQUIV=REFRESH CONTENT='1; URL=http://<?php echo $_SERVER['SERVER_NAME'];	echo $_SERVER['PHP_SELF'];?>'>
		<?php
	}
	else
	{	
?>
	<form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
	<b>Name:</b> <input type='text' name='name'> <input type='submit' value='save my name!' name='submit'>
	</form>
<?php
	}
}?>
