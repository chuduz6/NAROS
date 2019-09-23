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
</style>
</head>
<body>
<table>
<th>
<?php
echo '$key </th><th> $arr' . "\n";
?>
</th>
<?php
foreach ($_SERVER as $key => $arr) {
    echo "<tr><td class = 'one'>$key</td><td class = 'two'>$arr</td></tr>\n";
}

?>
</table>
</body>
</html>