<?php
/*
 * Author: MUTHUPANDIAN
 */

/*
 * This is the ajax call, all inputs come from index.html
 */

$sms_username = $_REQUEST['userName'];
echo $sms_username;
$sms_password = $_GET["password"];
$sms_mask = $_GET["mask"];
$message = $_GET["message"];
$toNumbers = $_GET["toNumbers"];
$msgResponse = file_get_contents("http://portal.e-sms.in/library/send_sms_2.php?"
        . "UserName=" . $sms_username . "&Password=" . $sms_password 
        . "&Type=Bulk&To=" . $toNumbers 
        . "&Mask=" . $sms_mask . "&Message=" . $message);
echo "Message response: ".$msgResponse;
