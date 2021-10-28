<?php 
echo " ___                  _              _   _   _ _   _       _    
 |   \ _____ __ ___ _ | |___  __ _ __| | | |_(_) |_| |_ ___| |__ 
 | |) / _ \ V  V / ' \| / _ \/ _` / _` | |  _| | / /  _/ _ \ / / 
 |___/\___/\_/\_/|_||_|_\___/\__,_\__,_|  \__|_|_\_\\__\___/_\_\ 
      
                    - code by ruks -                  "
$url = readline('Enter url ');
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://godownloader.com/api/tiktok-no-watermark-free?url=".$url."&key=godownloader.com",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
]);
$response = curl_exec($curl);
curl_close($curl);
$res= json_decode($response);
echo $res->video_no_watermark;

?>
