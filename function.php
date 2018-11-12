<?php
first:
echo "\r\nTahu Baca Bot by \033[32m Dani Hidayat \033[0m | Special for SGB TEAM\r\n";
echo "Visit https://github.com/meetdani for more bots\r\n";
echo "\r\n";
echo "Masukkan Member Token : ";$member_token = trim(fgets(STDIN));
echo "Masukkan Device ID : ";$device_id = trim(fgets(STDIN));
echo "Masukkan Jeda Waktu    : ";$jeda = trim(fgets(STDIN));
if(empty($member_token) or empty($jeda)){
    echo "\033[31mError : \033[0m Anda belum memasukan jumlah worker/jeda waktu\n";
    goto first;
}
function getList($cid,$page,$member_token,$device_id){
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.indkota.com/Content/Content/content_list?lang=indonesian&cid=".$cid."&page=".$page."&member_token=".$member_token."&device_id=".$device_id."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json, text/javascript, */*; q=0.01",
    "Accept-Encoding: gzip, deflate",
    "Accept-Language: id-ID,en-US;q=0.8",
    "Connection: keep-alive",
    "Cookie: PHPSESSID=a2cn69poor4rbgevtk8sao0hf5",
    "Host: api.indkota.com",
    "Postman-Token: 1c18dadb-72b3-4262-8e0a-0009f553204c",
    "User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4 Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36",
    "X-Requested-With: com.tahu.fep",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
}else{
    return $response;
}
}
function claim($ctn_id,$member_token,$device_id){
$curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.indkota.com/Content/Content/read?content_id=".$ctn_id."&lang=indonesian&member_token=NjIwODIyMjEzMDk2MDMtLXx8LS01YTA2ODQ4NmJjZTRkNjFjYTA5OTI0OTNkNTQ4NGE2Ng%3D%3D&device_id=49b99d6f9c16428e",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Accept: application/json, text/javascript, */*; q=0.01",
      "Accept-Encoding: gzip, deflate",
      "Accept-Language: id-ID,en-US;q=0.8",
      "Connection: keep-alive",
      "Cookie: PHPSESSID=a2cn69poor4rbgevtk8sao0hf5",
      "Host: api.indkota.com",
      "Postman-Token: 89a8fba5-3e08-4d68-875e-480419a37702",
      "User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4 Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36",
      "X-Requested-With: com.tahu.fep",
      "cache-control: no-cache"
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    return $response;
  }
}
function getCid($member_token,$device_id){
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.indkota.com/Content/Category/get_hot_category?lang=indonesian&device_id=49b99d6f9c16428e",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json, text/javascript, */*; q=0.01",
    "Accept-Encoding: gzip, deflate",
    "Accept-Language: id-ID,en-US;q=0.8",
    "Connection: keep-alive",
    "Cookie: PHPSESSID=a2cn69poor4rbgevtk8sao0hf5",
    "Host: api.indkota.com",
    "Postman-Token: 4b5891f8-19ce-43e2-a795-48e9b368f636",
    "User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4 Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36",
    "X-Requested-With: com.tahu.fep",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  return $response;
}
}