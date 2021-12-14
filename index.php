<?php
if(isset($_REQUEST['mode']) && $_REQUEST['mode'] =='GROUP'){
    if (isset($_REQUEST['number']) && isset($_REQUEST['message'])){
        //$number = $_REQUEST['number'];
        $number = "6282335494254-1616256755@g.us";
        $message = $_REQUEST['message'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
		CURLOPT_URL => "http://fekusa.xyz:4000/send-group-message",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => array('id'=>$number,'message'=>$message),

		));
        
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    }else{
        echo json_encode(array('status'=>false,'message'=>'Fail'));
    }
}else if(isset($_REQUEST['mode']) && $_REQUEST['mode'] =='MEDIA'){
        $number = $_REQUEST['number'];
        $file  = $_REQUEST['file'];
        $message = $_REQUEST['message'];
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
        echo $response;

}else{
    if (isset($_REQUEST['number']) && isset($_REQUEST['message'])){
        $number = $_REQUEST['number'];
        $message = $_REQUEST['message'];
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
        echo $response;
    }else{
        echo json_encode(array('status'=>false,'message'=>'Fail'));
    }
}


