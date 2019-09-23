<?php
// hostname or ip of server (for local testing, localhost should work)
$dbServer='localhost';
// username and password to log onto db server
$dbUser='cse3310';
$dbPass='CSE3310';

// name of database
$dbName='cse3310';

    $link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    print "Connected successfully<br>";
    mysql_select_db("$dbName") or die("Could not select database");
    print "Database selected successfully<br>";
    
    $query  = "SELECT id, fname, lname FROM example";
    $result = mysql_query($query);

// close connection
mysql_close($link);
?>