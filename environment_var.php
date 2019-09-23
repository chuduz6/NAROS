<html>
<title>Environment Variable access</title>
<body>
<pre>
<?php

echo '$key - $arr' . "\n";
foreach ($_SERVER as $key => $arr) {
    echo "$key - $arr\n";
}

?>
</pre>
</body>
</html>