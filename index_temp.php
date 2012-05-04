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
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="icon" 
type="image/ico" 
href="images/favicon_c.ico" />
<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here' rel='stylesheet' type='text/css'/>		
<link rel="stylesheet" href="stylesheets/ie.css" />
<![endif]-->


<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="javascripts/jquery-1.6.1.min.js">
</script>

</head>

<body>
<div id="desktopPageContainer">
<!-- ** hidden button to be clicked when coming back to this page from email -->
<button id="successButton" style="display:none"></button>

<!-- **SCREEN1 is order selection screen -->
<div id="screen1" style="display:block">  

<!-- **big cover picture and contact buttons area -->  
<div id="header" class="container ">
<h2>Starbucks Singapore</h2>
</div> 

<div id="contactBar">
    <ul id="contacts" class="block-grid five-up ">
        <li><a href="tel:92700850"><img src="images/phone.png" width="50"/></a></li>
        <li><a href="#" id="fbLink"><img src="images/facebookicon.png" width="50"/></a></li>
        <li><a href="#" id="twitLink"><img src="images/twittericon.png" width="50"/></a></li>
        <li><a href="#" id="mapLink"><img src="images/earth.png" width="50" /></a></li>
    </ul> 
</div>

<div id="hero-text" class="container ">
<h2>Purchase coffees at a discounted price</h2><img src="images/arrow.png" />
</div>    

<!-- **product listing START -->    
<div id="productContainer" class="container">
    <h1><span id="merchantName">Choose your purchase</span></h1>
    <hr >
    <ul class="block-grid two-up">
        <li>
            <div class="panel product" id="product_123">
				<span class="isSelected" style="display:none">false</span>
				<span class="prod_id" style="display:none">123</span>
                <img src="images/mocha.jpg" />
                <h2>
					<span class="prod_name">Caffe Mocha</span> <br/>
					($<span class="prod_price">2.50</span>)
				</h2>
                <div class="selected" >
                <img class="selectedimg" style="display:none" src="images/tick.png" width="30"/>
                </div>
            </div>
        </li>
        <li>
        	<div class="panel product"  id="product_456">
				<span class="isSelected" style="display:none">false</span>
				<span class="prod_id" style="display:none">456</span>
                <img src="images/latte.jpg" />
                <!-- <h2>Caffe Latte <br>($2.50)</h2> -->
				<h2>
					<span class="prod_name">Caffe Latte</span> <br/>
					($<span class="prod_price">2.50</span>)
				</h2>
                <div class="selected">
                <img class="selectedimg" style="display:none" src="images/tick.png" width="30"/>
                </div>
            </div>
        </li>
    </ul>
    <ul  class="block-grid two-up">
        <li>
            <div class="panel product" id="product_789">
				<span class="isSelected" style="display:none">false</span>
				<span class="prod_id" style="display:none">789</span>
				<img src="images/cappuccino.jpg" />
				<!-- <h2>Cappuccino<br>($2.50)</h2> -->
				<h2>
					<span class="prod_name">Cappuccino</span> <br/>
					($<span class="prod_price">2.50</span>)
				</h2>
				<div class="selected">
					<img class="selectedimg" style="display:none" src="images/tick.png" width="30"/>
				</div>
			</div>
        </li>
        <li>
            <div class="panel product" id="product_a12">
				<span class="isSelected" style="display:none">false</span>
				<span class="prod_id" style="display:none">a12</span>
				<img src="images/espresso.jpg" />
				<!-- <h2>Espresso<br>($3.50)</h2> -->
				<h2>
					<span class="prod_name">Espresso</span> <br/>
					($<span class="prod_price">3.50</span>)
				</h2>
				<div class="selected">
					<img class="selectedimg" style="display:none" src="images/tick.png" width="30"/>
				</div>
            </div>
        </li>
    </ul>
</div>
<!-- **product listing END -->    

<!-- **order summary START -->    
<div id="orderSummaryContainer" class="container">
	<h1><span id="merchantName">Order Summary</span></h1>
    <hr>
	<div id="selectionSummaryLine">
		<span class="prodLabel" id="no-order">No Orders Yet</span>
	</div> 
	
	<br />
    <hr>
    <input type="checkbox" id="total" name="total" value="$10.00" checked="checked" style="display:none" /><span style="display:none" class="prodLabel">TOTAL: <b><span id="totalAmt">$10.00</span></b></span><br><br>
    <button class="nice red radius button" id="pay-credits">Pay with Credits</button>
    <button class="nice red radius button" id="pay-paypal">Pay with Paypal</button>

</div>
<!-- **order summary END -->

</div>
<!-- **SCREEN1 END -->

<!-- **SCREEN2 is payment info screen -->
<div id="paymentInfo" class="container">    
<div id="screen2" style="display:none;">

	<!-- payment selection start-->
    <div id="payment-selection">
    <h2>Confirm and Pay</h2>
    <hr>
        <div class="alert-box">
            <h2><font style="color:#333">ORDER SUMMARY:</font></h2>
			<div id="orderSummaryLine" style="font-size:14px; color:#454545;">
				<span style="margin-left:20px;">test 123</span><span style="float:right;margin-right:20px;">$12.20</span><br />
				<span style="margin-left:20px;">test 456</span><span style="float:right;margin-right:20px;">$12.20</span><br />
				<span style="margin-left:20px;">test 789</span><span style="float:right;margin-right:20px;">$12.20</span><br />
			
			</div>
			<table id="orderSummaryLine2" style="width:100%;font-size:24px; color:#454545;background-color:#eee;">
			
			</table>
			<hr />
            <h2><font style="float:right;font-size:18px;color:#333;margin-right:10px;">TOTAL : $<span id="selectionTotal">10.00</span></font></h2>
			<br/><br />
        </div>
        
    <!-- pay via credits -->
    <div id="hastify-credit" style="display:none">
    	<!-- new user -->
        <div id="hastify-credit-newuser" style="display:none">
        <h2>Register to Pay Via Credits</h2>
        <ul class="block-grid two-up">
            <li>First Name:</li>
            <li>Last Name:</li>
        </ul>
        <ul style="margin-bottom:-10px;" class="block-grid two-up">
            <li><input class="input-text" id="customerFirstName-credit" name="custFirstName-credit" value=""/></li>
            <li><input class="input-text" id="customerLastName-credit" name="custLastName-credit" value=""/></li>
        </ul> 
        Email: <input class="input-text" id="customerEmail-credit" type="email" name="custEmail-credit" value=""/>
        Password: <input class="input-text" id="customerPassword-credit" type="password" name="custPassword-credit" value=""/>
        <button class="red nice radius button" id="buynow_button_credit">Register</button>
        <button class="green nice radius button" id="back-button">Back</button>
        </div>
        <!-- registered user -->
        <div id="hastify-credit-registered" style="display:block">
        <h2>Pay Via Hastify Credits</h2>
        <div id="credit-panel" class="panel">
        <h2>Current Credit : $<span id="credit_current">20.00</span><br>
        Credit Deducted : <font style="color:#d32232">$<span id="credit_deduct">10.00</span></font><br>
        </h2>
        <hr>
        <h2>Credit Left : <font style="color:#060">$<span id="credit_left">10.00</span></font></h2>
        </div>
        Password: <input class="input-text" id="customerPassword-credit" type="password" name="custPassword-credit" value=""/>
        <button class="red nice radius button" id="buynow_button_credit">Pay With Credits</button>
        <button style="display:none" class="red nice radius button" id="topup_button_credits">Top Up and Pay</button>
        <button class="green nice radius button" id="back-button">Back</button>
        </div>
    </div>
    
    <!-- pay via card -->
    <div id="credit-card" style="display:none">
        <h2>Pay With Paypal</h2>
        <ul class="block-grid two-up">
            <li>First Name:</li>
            <li>Last Name:</li>
        </ul>
        <ul style="margin-bottom:-10px;" class="block-grid two-up">
            <li><input class="input-text" id="customerFirstName" name="custFirstName" value=""/></li>
            <li><input class="input-text" id="customerLastName" name="custLastName" value=""/></li>
        </ul> 
        Email: <input class="input-text" id="customerEmail" type="email" name="custEmail" value=""/>
        Card Number: <input class="input-text" id="customerCard" type="tel" name="custCard" value="5453552231481525"/>
        Card Type: <span id="cardType" style="color:#999;font-weight:800">MasterCard</span>
        <br><br>
        <input style="display:none" id="customerCardType" type="text" name="custCardType" value="MasterCard"/>
        <input style="display:none" name="paymentType" type="text" value="sale"/>
        <ul class="block-grid two-up">
            <li>Expiry Month:</li>
            <li>Expiry Year:</li>
        </ul> 
        <ul style="margin-top:-1px;margin-bottom:-10px;" class="block-grid two-up">
            <li><input class="small input-text" id="customerExpiryMonth" name="custExpiryMonth" value="04"/></li>
            <li><input class="small input-text" id="customerExpiryYear" name="custExpiryYear" value="2017"/></li>
        </ul>
        Security Code: 
        <ul class="block-grid two-up">
            <li><input class="input-text" id="customerCode" type="tel" name="custCode" value="440"/></li>
            <li><img style="margin-top:10px;" src="http://nycsignaturelimo.com/design/image/icon-cvv.png" /></li>
        </ul>
        <button class="nice red radius button" id="buynow_button_paypal">Pay with Credit Card</button>
        <button class="green nice radius button" id="back-button">Back</button>
    </div>
    <!-- pay via card ends -->
    
    <!-- payment selection continue -->
        <button class="green nice radius button" id="back-button-screen1">Back</button>
    </div>
    
</div>
<!-- **SCREEN2 END --> 
</div>
<!-- **payment info END --> 
   
<!-- **SCREEN3 is success screen -->
<div id="screen3" style="display:none">
<div class="container">
    <h2>Thank you for your purchase.</h2>
    <p>Your <font style="color:#999;font-weight:800">receipt</font> has been sent to your email: <br><span style="font-size:20px;font-weight:500;color:#999;" id="emailaddress"></span></p>
    <p><font style="color:#000;font-weight:bold">TO COLLECT ORDER:</font></p> 
    <div class="list">
		<span id="order-complete"><button class="green nice radius button">Click Here</button></span></li>
        <br><font style="color:#999;font-weight:800">OR</font> 
        <br>
        <br>Refer to your <font style="color:#999;font-weight:800">receipt</font> to collect later.
    </div>
    <br>
    <p><font style="color:#000;font-weight:bold">COLLECT ORDER AT:</font><p>
    <img src="http://maps.googleapis.com/maps/api/staticmap?center=60+Stamford+Road+Singapore&zoom=15&size=220x100&maptype=roadmap&markers=color:red%7Ccolor:red%7Clabel:A%7C'60+Stamford+Road+Singapore'&sensor=false" />
    </p><font style="color:#000">
    Starbucks Singapore,<br>
    60, Stamford Road<br>
    Singapore.</font></p>
    <p>Please present your email receipt when you are collecting your order</p>
</div>    
</div>
<!-- **SCREEN3 END -->
</div>
<!-- **jQuery Scripts --> 
<script>
$(document).ready(function(){

//Facebook Link Button	
$("#fbLink").click(function(){
	function show_confirm(fbLink)
	{
	var r=confirm("Go to Merchant's Facebook Page?");
	if (r==true)
		{
		window.location = 'http://facebook.com/getgspot'
		}
	else
		{
		return false;
		}
	}
	show_confirm(fbLink)
});

//Twitter Link Button
$("#twitLink").click(function(){
	function show_confirm(twitLink)
	{
	var r=confirm("Go to Merchant's Twitter Page?");
	if (r==true)
		{
		window.location = 'http://twitter.com/getgspot'
		}
	else
		{
		return false;
		}
	}
	show_confirm(twitLink)
});

//GoogleMaps Link Button
$("#mapLink").click(function(){
	function show_confirm(mapLink)
	{
	var r=confirm("See Merchant's Location in Google Maps?");
	if (r==true)
		{
		window.location = 'http://google.com'
		}
	else
		{
		return false;
		}
	}
	show_confirm(mapLink)
});

//Product Selection jQuery
$(".product").each(function(){
	$(this).toggle(function(){
		$(this).find('img.selectedimg').css('display','block');
		$(this).children('img').css('opacity','0.3');
		$(this).find('span.isSelected').empty().append('true');
		// the selection summary will update whenever a selection is made.
		var prod_id = $(this).find('span.prod_id').text();
		addSelectionSummary(prod_id);
		},
	function(){
		$(this).find('img.selectedimg').css('display','none')
		$(this).children('img').css('opacity','1.0');
		$(this).find('span.isSelected').empty().append('false');
		// the selection summary will update whenever a selection is made.
		// The process of clearing and adding everything again is fast and users will not notice it.
		// However, orderSummary can also be update at the same time, if and only if users are allowed to change quantity before selecting the product.
		var prod_id = $(this).find('span.prod_id').text();
		removeSelectionSummary(prod_id);
	});	
});


	
$('button#buynow_button1').click(function (){
		$('div#screen1').css('display','none');
		$('div#screen2').css('display','block');
		window.scrollTo(0, 0);
});	

$('button#successButton').click(function (){
		$('div#screen1').css('display','none');
		$("#emailaddress").append('<?php echo $_GET['po_email'] ?>');
		$('div#screen3').css('display','block');
});

//Coming back from success email, click invisible success button and display screen 3 straightaway.
<?php if ($_GET['success'] == 1) 
{ ?>	
$('button#successButton').click()

//User click on the 'Click Here' link on the order success page (Screen 3) - send user to order processing script
$('#order-complete').click(function(){
	window.location = 'http://getgspot.com/buy/orders-mailer.php?po=1&po_email=<?php echo $_GET['po_email'] ?>&po_name=<?php echo $_GET['po_name'] ?>'
});			
<?php } ?>

//Back button screen1
$('button#back-button-screen1').click(function(){
	$('div#screen2').css('display','none');
	$('div#screen1').css('display','block');
});

//Back button
$('button#back-button').click(function(){
	$('div#screen2').css('display','none');
	$('div#hastify-credit').css('display','none');
	$('div#credit-card').css('display','none');
	$('html, body').animate({
		   scrollTop: '0px'
	   });
	$('div#screen1').css('display','block');
	$('button#pay-credits, button#pay-paypal, button#back-button-screen1').css('display','block');
});

//Pay with credits clicked on Screen1
$('button#pay-credits').click(function(){
	$('div#screen1').css('display','none');
	$('div#screen2').css('display','block');
	window.scrollTo(0, 0);
	$('button#pay-credits, button#pay-paypal, button#back-button-screen1').css('display','none');
	$('div#hastify-credit').css('display','block');
	// orderSummary will be updated once user clicks credit button
	// this allows user to make changes to the quantity first.
	updateOrderSummary();
});

//Pay with paypal clicked on Screen1
$('button#pay-paypal').click(function(){
	$('div#screen1').css('display','none');
	$('div#screen2').css('display','block');
	window.scrollTo(0, 0);
	$('button#pay-credits, button#pay-paypal, button#back-button-screen1').css('display','none');
	$('div#credit-card').css('display','block');
	// orderSummary will be updated once user clicks paypal button
	updateOrderSummary();
});

//Either paypal or credit card Buy Now button is clicked on Screen2 (payment screen)
$('button#buynow_button_paypal, button#buynow_button_credits').click(function (){
	
		//form field validation - check if all fields in the form are filled up
		$(".error").hide();
		$(".help-block").hide();
		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		var emailVal = $("#customerEmail").val();
		if(emailVal == '') {
			$("#credit-card h2").after('<div class="alert-box error">Email Address Required</div>');
			hasError = true;
		} else if(!emailReg.test(emailVal)) {	
			$("#credit-card h2").after('<div class="alert-box error">Email Address Invalid</div>');
			hasError = true;
		}
		
		var nameVal = $("#customerFirstName").val();
		if(nameVal == '') {
			$("#credit-card h2").after('<div class="alert-box error">First Name Required</div>');
			hasError = true;
		}
		
		var lastnameVal = $("#customerLastName").val();
		if(lastnameVal == '') {
			$("#credit-card h2").after('<div class="alert-box error">Last Name Required</div>');
			hasError = true;
		}
								
		var cardVal = $("#customerCard").val();
		if(cardVal == '') {
			$("#credit-card h2").after('<div class="alert-box error">Card Number Required</div>');
			hasError = true;
		}
		
		var codeVal = $("#customerCode").val();
		if(cardVal == '') {
			$("#credit-card h2").after('<div class="alert-box error">CVV2 Code Required</div>');
			hasError = true;
		}
		
		var expiryMonthVal = $("#customerExpiryMonth").val();
		if(expiryMonthVal == '') {
			$("#credit-card h2").after('<div class="alert-box error">Expiry Month Required</div>');
			hasError = true;
		}
		
		var expiryYearVal = $("#customerExpiryYear").val();
		if(expiryYearVal == '') {
			$("#credit-card h2").after('<div class="alert-box error">Expiry Year Required</div>');
			hasError = true;
		}
					
		if(hasError == false) {
			// preparing data to be send over
			var prod = [];
			$(".product").each(function() {
				var selected = $(this).find('span.isSelected').html();
				if (selected == "true") {
					var prod_name = $(this).find('span.prod_name').html();
					var prod_price = $(this).find('span.prod_price').html();
					var prod_id = $(this).find('span.prod_id').html();
					
					// calculating of total and subtotal
					var qty = $("select[name='" + prod_id + "_qty'] option:selected").val();
					
					var p = {};
					p["prod_id"] = prod_id;
					p["prod_name"] = prod_name;
					p["prod_price"] = prod_price;
					p["qty"] = qty;
					
					prod.push(p);
				}
			});
			
			  //if all fields are filled and no error, hide screen2, append loading logo and post form details to paypal.php
			  $("#screen2").hide();
			  $("#screen2").before('<div id="verify" style="text-align:center;margin-top:30px;"><h2 style="font-size:15px;color:#333;">Please wait while we are processing your order</h2><br><img id="loading" src="images/loadingit.gif" width="50"  alt="Loading" /></div>');
			  // should create the order within the database before making payment. The amount to be paid should be calculated by the backend. This is to prevent smart developers from changing the html elements to enjoy free drinks.
			  $.post("paypal.php",
					{
					custCard: cardVal,
					custExpiryMonth: expiryMonthVal,
					custExpiryYear: expiryYearVal,
					custCode: codeVal,
					custFirstName: nameVal,
					custLastName: lastnameVal,
					custEmail: emailVal,
					},
					//when response received from paypal.php, post order details to orders-mailer.php to print order in merchant's receipt printer
					function(data){
						$.post("orders-mailer.php",
						{ 
						email: emailVal, 
						name: nameVal + " " + lastnameVal, 
						card: cardVal,
						expiry: expiryMonthVal + "/" + expiryYearVal,
						prod: prod,
						},
						function(data){
								// when response received from orders-mailer.php, hide verification screen and display success screen (screen 3)
								$("#verify").hide();
								$("#emailaddress").append(""+emailVal);
								$("#screen3").css('display','block');	
								$('#order-complete').click(function(){
										window.location = 'http://getgspot.com/buy/orders-mailer.php?po=1&po_email='+emailVal+'&po_name='+nameVal
								});						
						});
					});
			return false;
		}
		});
});

updateSelectionSummary = function() {
	// clearing the element
	$('#selectionSummaryLine').empty();
	var count = 0;
	$(".product").each(function() {
		var selected = $(this).find('span.isSelected').html();
		if (selected == "true") {
			var prod_name = $(this).find('span.prod_name').html();
			var prod_price = $(this).find('span.prod_price').html();
			var prod_id = $(this).find('span.prod_id').html();
			
			// // displaying the order selection summary
			$('#selectionSummaryLine').append("<div id='" + prod_id + "_container'>")
			$('#' + prod_id + '_container').append("<span style='display:inline'>" + prod_name + " &nbsp;&nbsp;<b>($" + prod_price + ")</b></span>");
			$('#' + prod_id + '_container').append("<select name='" + prod_id +"_qty' style='display:inline;float:right;'></select>");
			
			// change to + and - button
			$("select[name='" + prod_id +"_qty']").append('<option value="1" selected>1</option>'); 
			for (var i = 2; i < 6; i++) {
				$("select[name='" + prod_id +"_qty']").append('<option value="'+ i +'">'+ i +'</option>'); 
			}
			$('#selectionSummaryLine').append("<br />");	
			count = count + 1;
		}
	});
	if (count == 0) {
		$('#selectionSummaryLine').append('<span class="prodLabel" id="no-order">No Orders Yet</span>');
		$('#selectionSummaryLine').append("<br />");
	}
}

addSelectionSummary = function(prod_id) {
	var noOrder = $('#selectionSummaryLine').find('span#no-order');
	if (typeof(noOrder) != "undefined" && noOrder != null) {
		noOrder.hide();
	}

	var product_container = $('#product_' + prod_id);
	var prod_name = product_container.find('span.prod_name').html();
	var prod_price = product_container.find('span.prod_price').html();
	
	$('#selectionSummaryLine').append("<div id='" + prod_id + "_container'>")
	$('#' + prod_id + '_container').append("<span style='display:inline'>" + prod_name + " &nbsp;&nbsp;<b>($" + prod_price + ")</b></span>");
	$('#' + prod_id + '_container').append("<select name='" + prod_id +"_qty' style='display:inline;float:right;'></select>");
	
	// change to + and - button
	$("select[name='" + prod_id +"_qty']").append('<option value="1" selected>1</option>'); 
	for (var i = 2; i < 6; i++) {
		$("select[name='" + prod_id +"_qty']").append('<option value="'+ i +'">'+ i +'</option>'); 
	}
	$('#selectionSummaryLine').append("<br />");	
}

removeSelectionSummary = function() {
	var count = 0;
	
	
}

updateOrderSummary = function() {
	// clearing the element
	$("#orderSummaryLine").empty();
	$("#orderSummaryLine2").empty();
	var total = 0;
	// looping through all loaded products
	$(".product").each(function() {
		var selected = $(this).find('span.isSelected').html();
		if (selected == "true") {
			var prod_name = $(this).find('span.prod_name').html();
			var prod_price = $(this).find('span.prod_price').html();
			var prod_id = $(this).find('span.prod_id').html();
			
			// calculating of total and subtotal
			var qty = $("select[name='" + prod_id + "_qty'] option:selected").val();
			var subtotal = parseFloat(qty) * parseFloat(prod_price);
			total = total + parseFloat(subtotal);
			
			// displaying the details
			
			$('#orderSummaryLine').append("<span style='display:inline;margin-left:20px;'>" + prod_name + " &nbsp;&nbsp;<b>($" + prod_price + ")</b> &nbsp;&nbsp; " + qty + " pcs</span>");
			$('#orderSummaryLine').append("<span style='float:right;margin-right:20px;'>$" + subtotal.toFixed(2) + "</span>");
			$('#orderSummaryLine').append("<br />");
			
			// ** may want to switch to table to give consistent view 
			/*
			$('#orderSummaryLine2').append("<tr id='summaryOrderLine_" + prod_id + "'>");
			$('#summaryOrderLine_' + prod_id).append("<td style='width:25%'>" +  prod_name + "</td>");
			$('#summaryOrderLine_' + prod_id).append("<td style='width:10%'>$" +  prod_price + "</td>");
			$('#summaryOrderLine_' + prod_id).append("<td style='width:8%'>" +  qty + " pcs</td>");
			$('#summaryOrderLine_' + prod_id).append("<td style='width:37%'></td>");
			$('#summaryOrderLine_' + prod_id).append("<td style='width:10%'>$" + subtotal.toFixed(2) + "</td>");
			*/
			
			
		}
	});
			
	// displaying the total
	$('#selectionTotal').empty().append(total.toFixed(2));
	
	// display credits
	var credit = 20.0;
	$('#credit_current').empty().append(credit.toFixed(2));
	$('#credit_deduct').empty().append(total.toFixed(2));
	var creditLeft = credit - total;
	$('#credit_left').empty().append(creditLeft.toFixed(2));

}
</script>

</body>
</html>
