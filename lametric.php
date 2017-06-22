<?php

$url = "xxxx";
$token = "xxxx";

if(isset($_GET['valeur']))
{
    $valeur=$_GET['valeur'];
}
if(isset($_GET['icon']))
{
    $icon=$_GET['icon'];
}

$frames = array(
    "frames" => array(
            array(
                "index" => 0,
                "icon" => "$icon",
                "text" => "$valeur"
            ),
)   
);

$curl = curl_init();

$headers = array(
    "Accept: application/json",
    "Content-Type: application/json",
    "X-Access-Token: $token", 
    "Cache-Control: no-cache", 
);

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_URL, $url); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_POST, 1); 
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($frames)); 
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);


$response = curl_exec($curl);
curl_close($curl);

?>