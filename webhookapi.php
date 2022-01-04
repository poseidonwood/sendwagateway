<?php 
include_once("function.php");
$blacklist = array('6282140647578');
if(isset($_REQUEST['nomor'])){
 $number = $_REQUEST['nomor'];
 $port = $_REQUEST['port'];
 //get message ;
 $message = $_REQUEST['msg'];
    if (strpos($message, ';') !== false) {
        //make array 
        $arr = explode(";",$message);
        $message = "Format ; pemisah \nPerusahaan;Jalan;Kec;Ads;Job Desk\n";  
        $message .= json_encode($arr);
        $company = $arr[0];
        $street = $arr[1];
        $city = $arr[2];
        $jobdesk = $arr[4];
        $nomorhp = $number;
        $ads = $arr[3];
        $url = "http://resume.fekusa.xyz/result.php?mode=wa&company=$company&street=$street&city=$city&jobdesk=$jobdesk&nomorhp=$nomorhp&ads=$ads";
        $mode = "wa";
        $raw_getdata = getdatabyurl($mode,$company,$jobdesk,$nomorhp,$ads);
        $getdata = json_decode($raw_getdata, true );
        $file = $raw_getdata;
        $caption = $company;
        // sendMSG($number,$file);
        $send = sendMEDIA($number,$file,$company);
        // echo $send;
    }
else if(strpos(strtolower($message),"darkjoke") !== false){
        darkjoke($number,$message,$_REQUEST['port']);
    }
    else{
        $data = getcontact($number);
        $row = json_decode($data,true);
        if(isset($row['status']) && $row['status'] == true){
        $pesan = "Jika ada info yang perlu di tanyakan , bisa HUB \nPak Dilly : wa.me/6285656105560\nPak Hendra : wa.me/62895630731164";
       $message = "Mohon maaf nomor ini adalah Nomor BOT 1 arah, harap hubungi owner wa.me/6282140647578 untuk chat personal";
            // sendMSG($number,urlencode($pesan));
            sendMSG($number,urlencode($pesan),$port);
        }
	//if(in_array($_REQUEST['nomor],$blacklist){
	//}
    }
/*    else{
        //simsimi
        $message = simsimi($message);
        $message = json_decode($message,true);
        $message = $message['jawaban'];
	$port = $_REQUEST['port'];
        sendMSG($number,$message,$port);
    }*/
}else{
    echo json_encode(array('status'=>false,'message'=>'cant access'));
}

?>
