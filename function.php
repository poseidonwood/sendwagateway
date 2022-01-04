<?php 
function sendMSG($number,$message,$port = '4000'){
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://fekusa.xyz:{$port}/send",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => "number=$number&message=$message",
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
}

function getdatabyurl($mode,$company,$jobdesk,$nomorhp,$ads){
      $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://resume.fekusa.xyz/result.php',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => "mode=$mode&company=$company&jobdesk=$jobdesk&nomorhp=$nomorhp&ads=$ads",
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
}

function sendMEDIA($number,$file,$message){
        $curl = curl_init();
        curl_setopt_array($curl, array(
		CURLOPT_URL => "http://fekusa.xyz:4000/send-media",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => array('number'=>$number,'file'=>$file,'caption'=>$message),

		));
        
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
}
function simsimi($message){
    $agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.xteam.xyz/simsimi?kata=apa%2520sih&APIKEY=25ec40547ebfb96a",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_USERAGENT => $agent,
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return $response;
}
function getcontact($number){
    $agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://unilearning.my.id/cronjobnext/getdatacontact/{$number}",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_USERAGENT => $agent,
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return $response;
}
function darkjoke($number,$caption,$port = '4000'){
    $agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
    $url = "https://api.xteam.xyz/asupan/darkjoke?APIKEY=25ec40547ebfb96a";
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://fekusa.xyz:{$port}/send-media",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => "number=$number&file=".urlencode($url)."&caption=$caption",
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
}
function flashsale(){
    $agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.xteam.xyz/search/shopeeflashsale?APIKEY=25ec40547ebfb96a",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_USERAGENT => $agent,
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return $response;
}
?>
