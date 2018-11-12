<?php

for($i=24793;$i<100000;$i++){
    
    $contentId  =   '10'.$i;
    
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.indkota.com/Content/Content/content?lang=indonesian&content_id=".$contentId."&member_token=NjIwODIyMjEzMDk2MDMtLXx8LS01YTA2ODQ4NmJjZTRkNjFjYTA5OTI0OTNkNTQ4NGE2Ng%3D%3D&device_id=49b99d6f9c16428e");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    
    $headers = array();
    $headers[] = "Host: api.indkota.com";
    $headers[] = "Cookie: PHPSESSID=a2cn69poor4rbgevtk8sao0hf5";
    $headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
    $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4 Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36";
    $headers[] = "Accept-Language: id-ID,en-US;q=0.9";
    $headers[] = "X-Requested-With: com.tahu.fep";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://api.indkota.com/Content/Content/read?content_id=".$contentId."&lang=indonesian&member_token=NjIwODIyMjEzMDk2MDMtLXx8LS01YTA2ODQ4NmJjZTRkNjFjYTA5OTI0OTNkNTQ4NGE2Ng%3D%3D&device_id=49b99d6f9c16428e");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    
    $headers = array();
    $headers[] = "Host: api.indkota.com";
    $headers[] = "Cookie: PHPSESSID=a2cn69poor4rbgevtk8sao0hf5";
    $headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
    $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4 Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36";
    $headers[] = "Accept-Language: id-ID,en-US;q=0.9";
    $headers[] = "X-Requested-With: com.tahu.fep";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
    
    echo "(".$contentId.") Pesan : >>>>>".json_decode($result,true)['msg']."<<<<< \n";
}