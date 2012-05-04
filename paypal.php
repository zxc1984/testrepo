<?php


        define('API_USERNAME', 'pro_1335411111_biz_api1.getgspot.com');
        define('API_PASSWORD', '1335411151');
        define('API_SIGNATURE', 'An5ns1Kso7MWUdW4ErQKJJJ4qi4-ArFo7toeKPw2qKB8Fs6odCy-FuwA');
        define('API_ENDPOINT', 'https://api-3t.sandbox.paypal.com/nvp');
        define('USE_PROXY',FALSE);
        define('PROXY_HOST', '127.0.0.1');
        define('PROXY_PORT', '808');
        define('PAYPAL_URL', 'https://www.paypal.com/webscr&cmd=_express-checkout&token=');
        define('VERSION', '53.0');
        
        echo "<h3>Processing Transaction.......</h3>";

    function hash_call($methodName,$nvpStr){

    ini_set('max_execution_time', 300);
            //declaring of global variabl
            
    global $API_Endpoint,$version,$API_UserName,$API_Password,$API_Signature,$nvp_Header;
    
    $API_UserName=API_USERNAME; 
    
    $API_Password=API_PASSWORD;

    $API_Signature=API_SIGNATURE;
    
    $API_Endpoint =API_ENDPOINT;


    $version=VERSION; 
    //setting the curl parameters.
    $ch = curl_init();
            
    curl_setopt($ch, CURLOPT_URL,$API_Endpoint);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
        
            //turning off the server and peer verification(TrustManager Concept).
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
                    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POST, 1);
            //if USE_PROXY constant set to TRUE in Constants.php, then only proxy will be enabled.
           //Set proxy name to PROXY_HOST and port number to PROXY_PORT in constants.php 
            
    if(USE_PROXY)
            //echo CURLOPT_PROXY; 
        curl_setopt ($ch, CURLOPT_PROXY, PROXY_HOST.":".PROXY_PORT); 
        
            
            //NVPRequest for submitting to server
            //echo $version;
        $nvpreq="METHOD=".urlencode($methodName)."&VERSION=".urlencode($version)."&PWD=".urlencode($API_Password)."&USER=".urlencode($API_UserName)."&SIGNATURE=".urlencode($API_Signature).$nvpStr; 
            
            //setting the nvpreq as POST FIELD to curl
             //CURLOPT_POSTFIELDS; 
        curl_setopt($ch,CURLOPT_POSTFIELDS,$nvpreq); 
            
            //getting response from server
        $response = curl_exec($ch); 
    
            // echo gettype($response);
        //echo "lkj"; die;
            //convrting NVPResponse to an Associative Array
        $nvpResArray=deformatNVP($response); 
            
        $nvpReqArray=deformatNVP($nvpreq);
            //print_r($nvpReqArray); 
        $_SESSION['nvpReqArray']=$nvpReqArray;
        
        if (curl_errno($ch)) {
                
                // moving to display page to display curl errors
            echo $_SESSION['curl_error_no']=curl_errno($ch) ;
            echo $_SESSION['curl_error_msg']=curl_error($ch); die;
                  
            $location = "error.php";
                  header("Location: $location");
        }else{
                 //closing the curl
            curl_close($ch);
        }
        
        return $nvpResArray;
}
function deformatNVP($nvpstr){
            

    
    $intial=0;
    $nvpArray = array();
        
    while(strlen($nvpstr)){
        //postion of Key
        $keypos= strpos($nvpstr,'=');
        //position of value
        $valuepos = strpos($nvpstr,'&') ? strpos($nvpstr,'&'): strlen($nvpstr);
    
        /*getting the Key and Value values and storing in a Associative Array*/
        $keyval=substr($nvpstr,$intial,$keypos);
        $valval=substr($nvpstr,$keypos+1,$valuepos-$keypos-1);
        //decoding the respose
        $nvpArray[urldecode($keyval)] =urldecode( $valval);
        $nvpstr=substr($nvpstr,$valuepos+1,strlen($nvpstr));
    }
    
    return $nvpArray;
	
}
        $amount = "10.00";
		$paymentType = "sale";
         $creditCardType= "MasterCard";
         $creditCardNumber = $_POST['custCard'];
         $expDateMonth = $_POST['custExpiryMonth'];
         $expDateYear = $_POST['custExpiryYear'];
         $cvv2Number = $_POST['custCode'];
		 //$custname = $_POST['custName'];
         $firstname =	$_POST['custFirstName'];
         $lastname	=  $_POST['custLastName'];    
         //$addr=   $_POST['hidShippingAddress1'];
         //$addr1=  $_POST['hidShippingAddress2'];
         //$address1=$addr.' '.$addr1;
         //$city =   $_POST['hidShippingCity'];
         //$state =  $_POST['hidShippingState'];
        // $zipcode =   $_POST['hidShippingPostalCode'];
        // $phone =   $_POST['hidShippingPhone'];
         $email=   $_POST['custEmail'];
          $countryCode = "US";
        $invoice = $orderId;
        $padDateMonth = str_pad($expDateMonth, 2, '0', STR_PAD_LEFT);
        $currencyCode="USD";
        $paymentType=urlencode($_POST['paymentType']);    
        $nvpstr="&PAYMENTACTION=$paymentType&AMT=".$amount."&CREDITCARDTYPE=$creditCardType&ACCT=$creditCardNumber&EXPDATE=".$padDateMonth.$expDateYear."&CVV2=$cvv2Number&FIRSTNAME=$firstname&LASTNAME=$lastname&COUNTRYCODE=$countryCode&CURRENCYCODE=$currencyCode&EMAIL=$email&INVOICE=$invoice&";
        
        $resArray=hash_call("doDirectPayment",$nvpstr); 


        $ack = strtoupper($resArray["ACK"]);
        $amt = $resArray["AMT"];
        $transactionid = $resArray['TRANSACTIONID'];
        $failureMessage = $resArray['L_LONGMESSAGE0'];

        if($ack=='FAILURE'){
        echo "Transaction Failed<br>";
        echo "<b>PayPal Failure Message:</b> ".$failureMessage."<br>";
        echo "<br><br>Kindly check for the above details and Try Again<br>";
        }
        else
            {
            echo "Transaction has been completed successfully<br>";
            echo "Paypal Transaction ID: ".$transaction_id."<br>";
            echo "Thank you for shopping with us.";
            }        
?>