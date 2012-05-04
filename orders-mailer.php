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
$prod = $_POST['prod'];

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
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
  <title>Receipt</title>
</head>
<body style=\"margin: 0; padding: 0; background-color:#bec1c3;\">
<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"border-collapse:collapse; border-spacing:0; background-color:#bec1c3;\">
  <tr>
    <td height=\"20\" colspan=\"3\" style=\"background-color:#bec1c3;\"></td>
  </tr>
  <tr>
    <td width=\"50%\" style=\"background-color:#bec1c3;\">&#160;</td>
    <td width=\"300\">
      <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"border-collapse:collapse; border-spacing:0; background-color:#ffffff; border:1px solid #9a9d9e; border-bottom-color: #686a6b\">
        <tr>
          <td>
            <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"300\" style=\"border-collapse:collapse; border-spacing:0;\">
              <tr>
                  <td width=\"60\" valign=\"top\" style=\"font-variant: normal; font-weight: normal; font-size: 13px; line-height: 20px; font-family: helvetica, arial, sans-serif; vertical-align: top; font-style: normal; padding: 22px 22px 21px\">
                    <img alt=\"Logo\" src=\"http://www.banks-kenya.com/images/logos/citigroup.jpg\" width=\"50\" />
                  </td>
                <td style=\"font-variant: normal; font-weight: normal; font-size: 13px; line-height: 20px; font-family: helvetica, arial, sans-serif; font-style: normal; padding: 10px 10px 9px 0\">
                  <p style=\"font-size: 18px; font-weight: bold; margin:0; padding: 0; color:#191f24;\">Starbucks Singapore</p>
                  <p style=\"font-size: 11px; line-height: 19px; margin:0; padding: 0 0 2px; color: #50585e;\">May 2, 2012 at 9:12am</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td width=\"302px\" style=\"padding: 0 10px\">
          	<a href=\"http://getgspot.com/buy/orders-mailer.php?po=1&po_email=$email&po_name=$name\"/><div style=\"
            font-family: helvetica, arial, sans-serif;
border: 1px solid #0593DC;
background: #00A6FC;
display: inline-block;
text-align: center;
padding: 12px 10px 12px;
width:302px;
margin-left:auto;
margin-right:auto;
color: white;
text-decoration: none;
font-weight: bold;
font-size: 13px;
font-size: 1.0rem;
position: relative;
cursor: pointer;
margin-bottom: 20px;
border: 1px solid #4A6B2D;
background-color: #5B8737;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;\">Click Here To Collect Your Order</div></a>
          	<div style=\"display: block; overflow: hidden; border: 1px solid #969ca1;\">
            <h1 style=\"font-size:40px;text-align:center;font-family: helvetica, arial, sans-serif;padding-top:0px;margin-top:5px;color:#d32232\">SBUX829</h1>
            <div style=\"font-size:10px;padding:20px;padding-top:-0px;margin-top:-10px;margin-bottom:30px; font-family: helvetica, arial, sans-serif;\">
            Starbucks Coffee <br>
            Order Date : 2012-04-24 <br>
            Name : $name <br>
            Email : $email <br>
            <br>
            Items <br>
            -------------------------------- <br>";
            //1ea 	$desc			$10.00 <br>
			$total = 0.0;
			foreach ($prod as $arr) {
				//echo "Value: $value<br />\n";
				$prod_name = $arr['prod_name'];
				$qty = $arr['qty'];
				$prod_price = $arr['prod_price'];
				$subtotal = floatval($qty) * floatval($prod_price);
				$total = $total + $subtotal;
				$customer_body = $customer_body . $qty . "ea 	$prod_name			$$subtotal <br>";
			}
			$gst = $total * 0.07;
			$net_total = $total - $gst;
            $customer_body = $customer_body . "
            -------------------------------- <br>
              Net Total: $$net_total <br>
              GST(7%): $$gst <br>
            -------------------------------- <br>
              TOTAL SGD: $$total<br>
            -------------------------------- <br>
            Paid(Online Payment)$$total <br>
            **** RECEIPT ****<br>
            <br>
            This order is redeemable at: <br>
            <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=60+Stamford+Road+Singapore&zoom=15&size=270x100&maptype=roadmap&markers=color:red%7Ccolor:red%7Clabel:A%7C'60+Stamford+Road+Singapore'&sensor=false\"\" />
            <p>60, Stamford Road<br>
            Singapore</p>
            --<br>
			</div>
			</div>
			</td>
        </tr>
        <tr>
          <td width=\"302px\" style=\"padding: 10px; border-bottom: 1px dotted #a5a8ae;\">
            <div>
              <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"border-collapse:collapse; border-spacing:0; width:302px;\">
                <tr>
                  <td align=\"center\" valign=\"middle\" style=\"font-variant: normal; font-weight: bold; font-size: 26px; margin: 0; line-height: 20px; font-family: helvetica, arial, sans-serif; padding: 0 0 10px; vertical-align: middle; text-align: center; font-style: normal; color:#191f24;\">
                    $$total
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
        

      </table>
    </td>
    <td width=\"50%\" style=\"background-color:#bec1c3;\">&#160;</td>
  </tr>
  <tr>
    <td width=\"50%\" height=\"4\" style=\"background-color:#bec1c3; font-size: 1px; line-height: 0;\">&#160;</td>
    <td width=\"302px\" height=\"4\" style=\"background-color:#bec1c3; font-size: 1px; line-height: 0; text-align:center;\"><img alt=\"Shadow\" width=\"330\" src=\"https://d1g145x70srn7h.cloudfront.net/static/b22f9b5864617ca1bfa1fd958781d669684018c6/images/receipt/email/shadow.png\" style=\"padding-bottom: 14px\" /></td>
    <td width=\"50%\" height=\"4\" style=\"background-color:#bec1c3; font-size: 1px; line-height: 0;\">&#160;</td>
  </tr>
  <tr>
    <td width=\"50%\" height=\"4\" style=\"background-color:#bec1c3; font-size: 1px; line-height: 0;\">&#160;</td>
    <td width=\"302px\" style=\"text-align: center; padding-bottom: 20px; font-variant: normal; font-weight: normal; font-size: 14px; font-family: helvetica, arial, sans-serif; vertical-align: top; font-style: normal;\">
      <a href=\"https://squareup.com/receipt/L9pBH5nepMv66BzF0azI\" style=\"text-decoration: none; color:#6B7073;\">View Full Receipt</a>
    </td>
    <td width=\"50%\" height=\"4\" style=\"background-color:#bec1c3; font-size: 1px; line-height: 0;\">&#160;</td>
  </tr>
  <tr>
    <td width=\"50%\" height=\"4\" style=\"background-color:#bec1c3; font-size: 1px; line-height: 0;\">&#160;</td>
    <td width=\"302px\" height=\"4\" style=\"text-align: center; background-color:#bec1c3; font-size: 1px; line-height: 0;\">
      <img width=\"302px\" alt=\"Jewel\" src=\"https://d1g145x70srn7h.cloudfront.net/static/b22f9b5864617ca1bfa1fd958781d669684018c6/images/receipt/jewel.jpg\" style=\"padding-bottom: 20px;display:none\" />
    </td>
    <td width=\"50%\" height=\"4\" style=\"background-color:#bec1c3; font-size: 1px; line-height: 0;\">&#160;</td>
  </tr>
</table>


</body>
</html>
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