<!DOCTYPE html>
<html lang="en">
<?php

$skipJSsettings = 1;
require_once("common.php");

DisableOutputBuffering();

$ip = "github.com";
$count = 5;

if (isset($_GET['ip']))
	$ip = $_GET['ip'];

if (isset($_GET['count']))
	$count = $_GET['count'];
?>

<head>
<title>
Ping
</title>
</head>
<body>
<h2>Ping <? echo htmlspecialchars($ip); ?></h2>
<pre>
==========================================================================
<?php
	system("ping -c ".escapeshellarg($count)." -n ".escapeshellarg($ip));
	#echo "==================================================================================\n";
	#system("traceroute -n $ip");
?>
==========================================================================
</pre>
</body>
</html>
