<?php
// hostname or ip of server (for local testing, localhost should work)
$dbServer='localhost';

// username and password to log onto db server
$dbUser='cse3310';
$dbPass='CSE3310';

// name of database
$dbName='cse3310';

?>
<html>
    <head>
<title>Environment Variable access</title>
<style type="text/css">
td.one 
{
    border-style: solid;
    border-width: thick;
    border-color: rgb(255, 100, 100);
    font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
    background: ActiveBorder;
}
td.two 
{
border-style: dashed;
border-width: thick
}

td.three 
{
border-style: groove;
border-width: thick
}
</style>
</head>
<body>
<?php
    $link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    print "Connected successfully<br>";
    mysql_select_db("$dbName") or die("Could not select database");
    print "Database selected successfully<br>";
?>
<table>
<th>Id</th><th>First Name</th><th>Last Name</th>
<?php

    $query  = "SELECT id, fname, lname FROM example";
    $result = mysql_query($query);

    while($row = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        echo "<tr><td class='two'>{$row['id']}</td><td class='one'>{$row['fname']}</td><td class='three'>{$row['lname']}</td></tr>\n";
    } 

// close connection
mysql_close($link);
?>