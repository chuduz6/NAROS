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
    border-width: thin;
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
    
    if(isset($_POST['add']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        $query = "INSERT INTO example (id, fname, lname, address, address2, dob) VALUES (0, '$fname', '$lname', 'A', 'B', '2007-10-10 00:00:00')";
        mysql_query($query);

        $query = "FLUSH PRIVILEGES";
        mysql_query($query);
    }

?>
<form method='post' action='/db_add.php'>
<table>
<th>Id</th><th>First Name</th><th>Last Name</th>
<?php

    $query  = "SELECT id, fname, lname FROM example";
    $result = mysql_query($query);

    while($row = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        echo "<tr><td class='two'>{$row['id']}</td><td class='one'>{$row['fname']}</td><td class='three'>{$row['lname']}</td></tr>\n";
    } 
    echo "<tr>
        <td class='two'>New</td>
        <td class='one'><input type='text' name='fname' value='Default' /></td>
        <td class='three'><input type='text' name='lname' value='' /></td>
        </tr>\n";
    echo '<tr><td><input name="add" type="submit" id="add" value="Add New User"></td></tr>';

// close connection
mysql_close($link);
?>
</table>
</form>
</body>
</html>