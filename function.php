<?php 
function sendMSG($number,$message){
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://fekusa.xyz:4000/send',
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
?>