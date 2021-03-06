<?php
	//Cleaning Business

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cleaning Service Billing</title>
	<link rel="stylesheet" type="text/css" href="../boostrap3/font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		body {
			font-family: arial;
		}
		.container {
			width: 1200px;
			height: auto;
			max-width: 100%;
			margin: 0 auto;
			background: #f5f5f5;
			padding: 10px;
			border: thin solid #ccc;
		}
		.menu {
			/*background-color: rgba(0, 0, 0, 0.5);*/
			margin-bottom: 30px;
		}
		.menu li {
			list-style-type: none;
			display: inline;
			padding: 5px;
		}
		.menu li a {
			text-decoration: none;
			color: #339;
			background: -webkit-linear-gradient(#fff, #eee);
			border-radius: 5px;
			padding: 5px 8px;
			border: thin solid #bbb;
		}
		.drop-menu {
			position: absolute;
			top: 30px;
			/*left: 60px;*/
			width: 100px;
			max-width: 100%;
			/*background-color: #eee;*/
			/*border: thin solid #ccc;*/
			/*box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);*/
			display: none;
		}
		.item-list {
			list-style-type: none;
			display: block !important;
			background: -webkit-linear-gradient(#fff, #eee);
			padding: 10px;
		}
		.content {
			position: relative;
			top: 0;
			/*width: 850px;*/
			height: auto;
			max-width: 100%;
			background-color: #fff;
			border: thin solid #ddd;
			padding: 20px 10px;
			display: inline-block;
			border-radius: 4px;
			/*box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.4);*/
		}
		.content-header {
			font-size: 1.3em;
			color: #555;
			margin-bottom: 30px;
		}
		.side-bar {
			float: right;
			width: 250px;
			height: auto;
			max-width: 100%;
			background-color: #fff;
			border: thin solid #ddd;
			/*box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.4);*/
			padding: 10px;
			display: inline-block;
			border-radius: 4px;
		}
		.side-head {
			background: -webkit-linear-gradient(#fff, #eee);
			padding: 20px 5px;
			color: #777;
			border-bottom: thin solid #ccc;
			font-weight: lighter;
			text-align: center;
			margin: -10px -10px 15px -10px;
		}
		.bar-item {
			padding: 5px;
			margin-top: 5px;
			color: #555;
		}
		.bar-item:last-child {
			border-top: thin solid #ccc;
			margin-top: 20px;
			padding-top: 20px;
			font-size: 1.4em;
		}
		.totalprice {
			font-weight: bold;
			float: right;
		}
		.requested {
			color: #22dd22;
		}
		.btn {
			width: 80px; 
			background: -webkit-linear-gradient(#fff, #eee);
			padding: 10px;
			text-align: center;
			color: #777;
			border: thin solid #ccc;
			border-radius: 4px;
			cursor: pointer;
			font-size: 1.2em;
		}
		.btn.btn-lg {
			width: 150px !important;
			/*padding: 25px 5px;*/
		}
		.icon {
			font-size: 3em !important;
		}
		.time {
			font-size: .85em !important;
		}
		.active {
			background: green;
			color: #fff;
			box-shadow: inset 1px 2px 2px rgba(0, 0, 0, 0.4);
		}
		table {
			text-align: center;
			color: #555;
		}
		.horizontal-rule {
			border-bottom: thin solid #ddd;
			padding: 10px 0;
			margin-top: 10px;
			margin-bottom: 30px;
		}
		.bedprice, .bathprice, .services {
			float: right;
		}
	</style>
</head>
<body>
	<div class="container">
		<nav class="menu">
			<li><a href=""><i class="fa fa-home"></i></a></li>
			<li>
				<a href="javascript:void(0);">Service Details <i class="fa fa-caret-down"></i></a>
				<ul class="drop-menu">
					<li class="item-list">Item 1</li>
					<li class="item-list">Item 2</li>
					<li class="item-list">Item 3</li>
					<li class="item-list">Item 4</li>
				</ul>
			</li>
		</nav>
		<div class="content">
			<div class="content-header">How big is your home?</div>
			<table border="0" width="100%" cellpadding="5px">
				<tr>
					<td width="400px" align="left"><strong>Bedrooms</strong></td>
					<td><div class="btn bedrooms" data-rooms="1" onclick="getService(this)">1</div></td>
					<td><div class="btn bedrooms" data-rooms="2" onclick="getService(this)">2</div></td>
					<td><div class="btn bedrooms" data-rooms="3" onclick="getService(this)">3</div></td>
					<td><div class="btn bedrooms" data-rooms="4" onclick="getService(this)">4</div></td>
				</tr>
				<tr>
					<td width="400px" align="left"><strong>Bathrooms</strong></td>
					<td><div class="btn bathrooms" data-rooms="1" onclick="getService(this)">1</div></td>
					<td><div class="btn bathrooms" data-rooms="2" onclick="getService(this)">2</div></td>
					<td><div class="btn bathrooms" data-rooms="3" onclick="getService(this)">3</div></td>
					<td><div class="btn bathrooms" data-rooms="4" onclick="getService(this)">4</div></td>
				</tr>
			</table>
			<div class="horizontal-rule"></div>
			<table border="0" width="100%" cellpadding="5px">
				<tr>
					<td colspan="2" align="left"><span style="font-size: 1.5em;">Request extra services</span><br/>(Note that this will extend the cleaning time)</td>
					<td colspan="2" align="right">Services Included by default <a href="#"><i class="fa fa-info-circle"></i></a></td>
				</tr>
				<tr>
					<td align="center">
						<div class="btn btn-lg windows" data-services="0" onclick="getService(this)"><i class="fa fa-windows icon"></i>
							<div class="time">&nbsp;</div>
						</div>
					</td>
					<td align="center">
						<div class="btn btn-lg carpets" data-services="1" onclick="getService(this)"><i class="fa fa-check icon"></i>
							<div class="time">&nbsp;</div>
						</div>
					</td>
					<td align="center">
						<div class="btn btn-lg oven" data-services="2" onclick="getService(this)"><i class="fa fa-user icon"></i>
							<div class="time">&nbsp;</div>
						</div>
					</td>
					<td align="center">
						<div class="btn btn-lg ironing" data-services="3" onclick="getService(this)"><i class="fa fa-cogs icon"></i>
							<div class="time">&nbsp;</div>
						</div>
					</td>
				</tr>
				<tr>
					<td><div class="text">Windows (05)</div></td>
					<td><div class="text">Carpet Cleaning</div></td>
					<td><div class="text">Oven Cleaning</div></td>
					<td><div class="text">Ironing</div></td>
				</tr>
			</table>
		</div>
		<div class="side-bar">
			<div class="side-head">Enquiry Summary</div>
			<div class="bar-item"><strong><i class="fa fa-check requested"></i> <span id="hours">0</span> Hours Requested</strong></div>
			<div class="bar-item"><i class="fa fa-plus"></i> Bedrooms <span class="bedprice">0</span></div>
			<div class="bar-item"><i class="fa fa-plus"></i> Bathrooms <span class="bathprice">0</span></div>
			<div class="bar-item"></div>
			<div class="bar-item"><i class="fa fa-plus"></i> Windows <span class="services">0</span></div>
			<div class="bar-item"><i class="fa fa-plus"></i> Carpet Cleaning <span class="services">0</span></div>
			<div class="bar-item"><i class="fa fa-plus"></i> Oven Cleaning <span class="services">0</span></div>
			<div class="bar-item"><i class="fa fa-plus"></i> Ironing <span class="services">0</span></div>
			<div class="bar-item">
				PRICE <span class="totalprice">0</span>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function $(name) {
			var x = document.querySelector(name);
			return x;
		}

		function resetClass(classes) {
			var x = document.getElementsByClassName(classes);
			for(var i = 0; i < x.length; i++) {
				x[i].classList.remove('active');
			}
		}
		var hours = 0;

		function bedroomPrice(roomCount) {
			var value = '270';
			switch(roomCount) {
				case '1':
					value = value;
					hours = 1;
				break;
				case '2':
					value = value * roomCount;
					hours = 2;
				break;
				case '3':
					value = value * roomCount;
					hours = 2;
				break;
				case '4':
					value = value * roomCount;
					hours = 3;
				break;
				default:
					value = '0.00';
				break;
			}
			$('#hours').innerHTML = hours;
			$('.bedprice').innerHTML = parseInt(value);
			return parseInt(value);
		}

		function bathroomPrice(roomCount) {
			var value = '180';
			switch(roomCount) {
				case '1':
					value = value;
					hours = parseInt($('#hours').innerHTML);
				break;
				case '2':
					value = value * roomCount;
					hours = parseInt($('#hours').innerHTML);
				break;
				case '3':
					value = value * roomCount;
					hours += 2;
				break;
				case '4':
					value = value * roomCount;
					hours += 2;
				break;
				default:
					value = '0.00';
				break;
			}
			$('#hours').innerHTML = hours;
			$('.bathprice').innerHTML = parseInt(value);
			return parseInt(value);
		}

		var x = document.getElementsByClassName('services');
		function windowsPricing(count=5) {
			var value = '60'; //60 per window
			if(count > 0) {
				value = value * count;
			}
			else {
				value = 0;
			}
			x[0].innerHTML = parseInt(value);
			$('#hours').innerHTML = 0;
			hours += 2;
			$('#hours').innerHTML = hours;
			return value;
		}

		function carpetsPricing() {
			value = '150';
			// $('.services').innerHTML = parseInt(value);
			x[1].innerHTML = parseInt(value);
			$('#hours').innerHTML = 0;
			hours += 2;
			$('#hours').innerHTML = hours;
			return value;
		}
		function ovenPricing() {
			value = '200';
			// $('.services').innerHTML = parseInt(value);
			x[2].innerHTML = parseInt(value);
			$('#hours').innerHTML = 0;
			hours += 2;
			$('#hours').innerHTML = hours;
			return value;
		}
		function ironingPricing() {
			value = '400';
			// $('.services').innerHTML = parseInt(value);
			x[3].innerHTML = parseInt(value);
			$('#hours').innerHTML = 0;
			hours += 2;
			$('#hours').innerHTML = hours;
			return value;
		}
		//
		function getService(event) {
			resetClass((event.classList.contains("bedrooms")) ? 'bedrooms' : 'bathrooms');
			var roomCount = event.dataset.rooms;

			//write pricing to screen
			if(event.classList.contains("bedrooms")) {
				bedroomPrice(roomCount)
			}
			else if(event.classList.contains("bathrooms")) {
				bathroomPrice(roomCount);
			}
			else if(event.classList.contains("windows")) {
				windowsPricing(5); //qty of minimum 5 windows
			}
			else if(event.classList.contains("carpets")){
				carpetsPricing();
			}
			else if(event.classList.contains("oven")){
				ovenPricing();
			}
			else if(event.classList.contains("ironing")){
				ironingPricing();
			}

			if(event.classList.contains('btn-lg')) {
				event.classList.toggle('active');
				if(event.classList.contains('active')) { //checked
					event.children[0].setAttribute('class', 'fa fa-check icon');
					event.children[1].innerHTML = '+02:00';
				}
				else { //unchecked
					event.children[0].setAttribute('class', 'fa fa-user icon');
					event.children[1].innerHTML = '&nbsp;';
					//reset amounts if uncheck service
					var servicesIndex = event.dataset.services;
					x[servicesIndex].innerHTML = 0;

					$('#hours').innerHTML = 0;
					newHours = (hours - 2);
					hours = 0;
					$('#hours').innerHTML = newHours;
				}
			} else {
				event.classList.add('active');
			}

			totalPrice(); //call total to display amount
		}

		//
		function calcPrices() {
			var finalprice = 0;
			var bedroom = $('.bedprice').innerHTML;
			var bathroom = $('.bathprice').innerHTML;

			// var services = 0;
			/*var windows = $('.windows').innerHTML;
			var carpets = $('.carpets').innerHTML;
			var oven = 	  $('.oven').innerHTML;
			var ironing = $('.ironing').innerHTML;*/

			//finalprice = parseInt($('.totalprice').innerHTML);
			finalprice += parseInt(bedroom); //+ parseInt(bathroom);
			finalprice += parseInt(bathroom);
			/*finalprice += parseInt(windows);
			finalprice += parseInt(carpets);
			finalprice += parseInt(oven);
			finalprice += parseInt(ironing);*/
			
			//get all elements value
			var x = document.querySelectorAll('.services');
			for(var i=0; i < x.length; i++) {
				finalprice += parseInt(x[i].innerHTML);
			}
			return parseInt(finalprice);
		}
		//
		function totalPrice() {
			$('.totalprice').innerHTML = calcPrices();
		}


	</script>
</body>
</html>
