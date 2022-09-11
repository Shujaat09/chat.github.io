<?php 
$ip_address = '180.188.246.92';
$api_access_key = 'e103cbf41b2ce79a98e9120e20af9506';
$ch = curl_init('https://api.ipstack.com/'.$ip_address.'?access_key='.$api_access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_data = curl_exec($ch);
curl_close($ch);
$result_data = json_decode($resultData, true);
echo $result_data['location']['capital'];
?>
