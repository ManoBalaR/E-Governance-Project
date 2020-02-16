<?php
date_default_timezone_set("Asia/Calcutta"); $datew="hour minute : ";
list($msec, $sec)=explode(' ',microtime());
$datestr = date('Ymdhis', $sec).sprintf("%06d",$msec);
$serialno = base_convert($datestr, 10, 16);
echo $serialno;
echo '<br>'.$datestr;
echo '<br>'.date("y");
echo ''.date("Y-m-d").' '.date("h:i:sa ").'';
?>