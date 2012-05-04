<?php 
$total = "2.50";
$gst = round(0.07 * $total,2);
$net_total = $total - $gst;
$desc = "Coffee Mocha";

$po = $_GET['po'];
$po_email = $_GET['po_email'];
$po_name = $_GET['po_name'];
$po_time = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Set the viewport width to device width for mobile -->
	

	<title>Starbucks Singapore Online Purchase</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation_fluid.css">
	<link rel="stylesheet" href="stylesheets/app.css">
    <link rel="icon" 
      type="image/ico" 
      href="images/favicon_c.ico">
<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript" src="javascripts/jquery-1.6.1.min.js"></script>
	<style>
	@media screen and (max-width: 480px) {
	.container { text-align:left !important}
	#buynow_button1 { margin-top:-70px !important;margin-right:10px;float:right }
	#prodLabel { margin-top:-80px; margin-right:10px;float:right; }
	}
	</style>

</head>
<body style="background:none">
<div class="container" style="text-align:center;margin-top:10px;">
    <h1 style="font-size:18px"><span id="merchantName">STARBUCKS SINGAPORE</span></h1>
    <hr >
    
    <div id="screen3">
    <div class="alert-box success">
    Order Sent
    </div>
    <p>Your order has been sent to the merchant at <font style="color:#999;font-weight:800"><?php echo date('Y-m-d H:i:s') ?></font></p>
    <p>The merchant will receive your order and begin preparing your purchase for you. </p>
    <p><font style="color:#000;font-weight:bold">TO COLLECT ORDER:</font></p> 
    <div class="list" style="margin-bottom:0px;line-height:1.0">
    <li>Wait for merchant to call out your name.</li>
    <li>Show merchant <font style="color:#999;font-weight:800">this receipt.</font></li>
    </div>
    
    <div class="panel" style="padding-bottom:10px;">
    **** RECEIPT ****<br>
     Code : <font style="font-weight:800;color:#d32232">SBX8273</font><br><br>
    Starbucks Coffee <br>
    Order Date : 2012-04-24 <br>
    Name : <?php echo $_GET['po_name'] ?> <br>
    Email : <?php echo $_GET['po_email'] ?> <br>
    <br>
    Desc Qty Price Total <br>
    -------------------------------- <br>
    <?php echo $desc ?> 1ea $<?php echo $total ?> $<?php echo $total ?> <br>
    -------------------------------- <br>
      Subtotal: $<?php echo $total ?> <br>
      Net Total: $<?php echo $net_total ?> <br>
      GST(7%): $<?php echo $gst ?> <br>
    -------------------------------- <br>
      TOTAL SGD: $<?php echo $total ?><br>
    -------------------------------- <br>
    Paid(Online Payment)$<?php echo $total ?> <br>
    **** RECEIPT ****<br>
    </div>
   
    <p>Reminder: Please present the receipt when you are collecting your order</p>
    </div>
    
</div>

<script>
	$(document).ready(function(){
		
	
	});		
		
	
</script>
</body>
</html>
