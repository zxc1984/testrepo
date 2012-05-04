<?php
$code = "SBX8273";
$email = $_POST['email'];
$name = $_POST['name']; 
$card = $_POST['card'];
$expiry = $_POST['expiry'];
$total = "2.50";
$gst = round(0.07 * $total,2);
$net_total = $total - $gst;
$desc = "Coffee Mocha";

$po = $_GET['po'];
$po_email = $_GET['po_email'];
$po_name = $_GET['po_name'];
$po_time = date('Y-m-d H:i:s');

$print_subject = "Order #1 - Starbucks Online Orders";
$print_body = "
Code : <font style=\"font-weight:bolder;color:#d32232\">$code</font> <br><br>
Starbucks Singapore Online Orders <br>
Receipt : 100016 <br>
<br>
Order Date : 2012-04-24 <br>
Name : $po_name <br>
Email : $po_email <br>
Card No. : xxxx-xxxx-xxxx-2345 <br>
Card Expiry : 07/2012 <br>
<br>
Items <br>
-------------------------------- <br>
1ea 	$desc			$$total <br>
-------------------------------- <br>
  Subtotal:     		$$total <br>
  Net Total:    		$$net_total <br>
  GST(7%):  		$$gst <br>
-------------------------------- <br>
  TOTAL SGD: 	$$total<br>
-------------------------------- <br>
Paid(Online Payment)$$total <br>
<br>
<br>
<p><b>Order Submitted At : <br>$po_time</b></p>
";

$customer_subject = "Your Order - Starbucks Coffee";
$customer_body = "
Thank you for your order.<br>
<p>To collect your order, </p>
<p><a href=\"http://getgspot.com/buy/orders-mailer.php?po=1&po_email=$email&po_name=$name\"/>CLICK HERE</a></p> 
<p>You need to present the receipt below when collecting your order<p>
**** RECEIPT ****<br>
Code : <font style=\"font-weight:bolder;color:#d32232\">$code</font> <br><br>
Starbucks Coffee <br>
Order Date : 2012-04-24 <br>
Name : $name <br>
Email : $email <br>
<br>
Items <br>
-------------------------------- <br>
1ea 	$desc			$$total <br>
-------------------------------- <br>
  Subtotal: $$total <br>
  Net Total: $$net_total <br>
  GST(7%): $$gst <br>
-------------------------------- <br>
  TOTAL SGD: $$total<br>
-------------------------------- <br>
Paid(Online Payment)$$total <br>
**** RECEIPT ****<br>
<br>
This order is redeemable at: <br>
<p>60, Stamford Road<br>
Singapore</p>
--<br>
We have also created a Hastify account for you. Please login and change your password for your next purchase.<br><br>
Click here to login: <a href=\"#\">Login To Hastify</a><br>
";
		
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: Hastify Online <team@getgspot.com>' . "\r\n";
$to_customer = "$email";
$to_merchantj = "john@getgspot.com";
$to_merchantk = "orders@getgspot.com";

if ($_POST['send_email'] == 1)
{
mail($to_merchantj, $print_subject, $print_body, $headers);
mail($to_merchantk, $print_subject, $print_body, $headers);
}
	
	
if ($po == 1)
{
	echo '<html>
	<script type="text/javascript" src="javascripts/jquery-1.6.1.min.js"></script>
	<script>
	function show_confirm()
	{
		var r=confirm(\'Ask Merchant To Prepare Your Order Now? \n\n (By clicking OK, the merchant will start preparing your order and call out your name when its ready)\');
		if (r==true)
		{
			jQuery.post("orders-mailer.php?po_email='.$po_email.'&po_name='.$po_name.'",
			{
			send_email: "1",
			},
			function(data){
			window.location = "http://getgspot.com/buy/order-complete.php?send_email=1&po_email='.$po_email.'&po_name='.$po_name.'"	
			});	
		}	
		else
		{
			window.location = "http://getgspot.com/buy/index.php?success=1&po_email='.$po_email.'&po_name='.$po_name.'"
		}
	}
	show_confirm()
	</script></html>';
}
else
{
	mail($to_customer, $customer_subject, $customer_body, $headers);
}

?>