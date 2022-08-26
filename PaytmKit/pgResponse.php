<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

include_once '../config/db.php';




$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

// header("Location : http://localhost/tourguider/thankyou.php",true,301);
if($isValidChecksum == "TRUE") {
	
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		// $extract = $_POST['ORDERID'];
		// $journey_id = "TGJID".rand(1,999999999);
		// $id = $extract[1];
		$status = 'success';
		$order_id = $_POST['ORDERID'];
		// $mid = $_POST['MID'];
		$txnid = $_POST['TXNID'];
		// $amount = $_POST['TXNAMOUNT'] ;
		$payment_mode = $_POST['PAYMENTMODE']; 
		$currency = $_POST['CURRENCY']; 
		$txndate = $_POST['TXNDATE']; 
		$payment_status = $_POST['STATUS']; 
		// $respcode = $_POST['RESPCODE']; 
		// $respmsg = $_POST['RESPMSG']; 
		// $gateway_name = $_POST['GATEWAYNAME']; 
		$banktxnid = $_POST['BANKTXNID']; 
		$bankname = $_POST['BANKNAME'];

		$sql = "UPDATE `paytm` SET `txnid`='$txnid',`payment_mode`='$payment_mode',`currency`='$currency',`txndate`='$txndate',`payment_status`='$payment_status',`banktxnid`='$banktxnid',`bankname`='$bankname',`status`='$status' WHERE order_id = '$order_id'";
		if(mysqli_query($conn,$sql)){
			// header("Location: http://localhost/tourguider/thankyou.php?id=$id");
			echo "Payment Success";
		}
	}
	else {
		$extract = explode('_', $_POST['ORDERID']);
		// $journey_id = "TGJID" . rand(1, 999999999);
		// $id = $extract[1];
		$status = 'failed';
		$order_id = $_POST['ORDERID'];
		// $mid = $_POST['MID'];
		$txnid = $_POST['TXNID'];
		// $amount = $_POST['TXNAMOUNT'];
		$payment_mode = $_POST['PAYMENTMODE'];
		$currency = $_POST['CURRENCY'];
		$txndate = $_POST['TXNDATE'];
		$payment_status = $_POST['STATUS'];
		// $respcode = $_POST['RESPCODE'];
		// $respmsg = $_POST['RESPMSG'];
		// $gateway_name = $_POST['GATEWAYNAME'];
		$banktxnid = $_POST['BANKTXNID'];
		$bankname = $_POST['BANKNAME'];

		$sql = "UPDATE `paytm` SET `txnid`='$txnid',`payment_mode`='$payment_mode',`currency`='$currency',`txndate`='$txndate',`payment_status`='$payment_status',`banktxnid`='$banktxnid',`bankname`='$bankname',`status`='$status' WHERE order_id = '$order_id'";
		if (mysqli_query($conn, $sql)) {
			echo "payment failed";
		}
	}
}

?>