<html>
    <head>
<title>Environment Variable access</title>
<style type="text/css">
td.one 
{
border-style: solid;
border-width: thin
}
td.two 
{
border-style: solid;
border-width: thin
}
</style>
</head>
<body>
<table>
<th>
<?php
echo '$key - $arr' . "\n";
?>
</th>
<?php
foreach ($_SERVER as $key => $arr) {
    echo "<tr><td class='two'>$key</td><td>$arr</td></tr>\n";
}

?>
</table>
</body>
</html>