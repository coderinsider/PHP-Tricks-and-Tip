<?php
$datavalueS = "2020-12-28 15:00:00";
$datavalueE = "2021-12-31 15:00:00";
$startTimeStamp = strtotime(substr($datavalueS, 0, 10));
$endTimeStamp = strtotime(substr($datavalueE, 0, 10));

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);
echo "You have " . $numberDays . " days.<br/>";