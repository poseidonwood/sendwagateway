<?php 
include_once("function.php");

if(isset($_REQUEST['nomor'])){
 $number = $_REQUEST['nomor'];
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
    /*else{
        $message = "Mohon maaf nomor ini adalah Nomor BOT 1 arah, harap hubungi owner wa.me/6282140647578 untuk chat personal";
        sendMSG($number,urlencode($message));
    }*/
}else{
    echo json_encode(array('status'=>false,'message'=>'cant access'));
}

?>
