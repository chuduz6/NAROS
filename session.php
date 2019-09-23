<?php
session_start(); //makes us able to use sessions
$_SESSION['name'] = "Jose";
echo "Hello ".$_SESSION['name'];
?>
