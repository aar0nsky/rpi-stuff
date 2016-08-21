<?php
// Script to show CPU temp in browser page

echo "<html>
<head><title></title></head>
<body style=\"background-color:black;\">";

$syscall = shell_exec('cat /sys/class/thermal/thermal_zone0/temp');

// for RPi
$newsyscall = round($syscall/1000,2,PHP_ROUND_HALF_UP);
// for Pine64
//$newsyscall = round($syscall,2,PHP_ROUND_HALF_UP);


if ($newsyscall > 65){
echo "<h1 style=\"color:#FF0000\">";
}
elseif ($newsyscall > 45){
echo "<h1 style=\"color:#d5d819\">";
}
else {
echo "<h1 style=\"color:#35d819\">";
}

echo $newsyscall . "&#176;" . "C" . "</h1>";

echo "</body>
</html>";
?>
