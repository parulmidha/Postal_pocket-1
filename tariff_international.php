<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>International Tariff Estimator</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style type="text/css">
.goBack {
	position: absolute;
	top: 0px;
	left: 10px;
	height: 20px;
	}
	</style>

</head>
<body id="main_body" >
	<a class="myButton goBack" href="./">Go Back</a>
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>International Tariff Estimator</a></h1>
		<form id="form_668445" class="appnitro"  method="post" action="tariff_international.php">
					<div class="form_description">
			<h2>International Tariff Estimator</h2>
			<p>Now estimate your tariff for international posts..</p>
		</div>						
			<ul >
			
					<!--<li id="li_1" >
		<label class="description" for="element_1">FROM : </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Enter your country (India)</small></p> 
		</li>-->		
		<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="_include/js/jquery-1.7.1.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <li id="li_2" >
  <script>
  $(function() {
    var country = [
      "Afghanistan",
      "Argentina",
      "Australia",
      "Austria",
      "Bahrain",
      "Bangladesh",
      "Barbados",
      "Belarus",
      "Belgium",
      "Bermuda",
      "Bhutan",
      "Botswana",
      "Brunei Darussalam",
      "Bulgaria (Rep)",
      "Cambodia",
      "Canada",
      "Cape Verde",
      "Cayman Island",
      "China (People's Rep)",
      "Cuba",
      "Cyprus",
      "Democratic Republic of Congo",
	  "Denmark",
	  "Egypt",
	  "El Salvador",
	  "Eritrea",
	  "Estonia",
	  "Ethiopia",
	  "Fiji",
	  "France",
	  "Georgia",
	  "Germany",
	  "Ghana",
	  "Greece",
	  "Guyana",
	  "Hong Kong",
	  "Hungary",
	  "Iceland",
	  "Indonesia",
	  "Iran",
	  "Iraq",
	  "Ireland",
	  "Israel",
	  "Italy",
	  "Japan",
	  "Jordan",
	  "Kenya",
	  "Korea (Republic of)",
	  "Kuwait",
	  "Latvia",
	  "Luxembourg",
	  "Macao (China)",
	  "Malawi",
	  "Malaysia",
	  "Maldives",
	  "Mauritius",
	  "Mexico",
	  "Mongolia",
	  "Morocco",
	  "Namibia",
	  "Nauru",
	  "Nepal",
	  "Netherlands",
	  "New Zealand",
	  "Niger",
	  "Nigeria",
	  "Norway",
	  "Oman",
	  "Pakistan",
	  "Panama (Rep)",
	  "Papua New Guinea",
	  "Philippines",
	  "Poland",
	  "Portugal",
	  "Qatar",
	  "Rwanda",
	  "Romania",
	  "Russia",
	  "Saudi Arabia",
	  "Senegal",
	  "Singapore",
	  "South Africa",
	  "Spain",
	  "Sri Lanka",
	  "Sudan",
	  "Sweden",
	  "Switzerland",
	  "Taiwan",
	  "Tanzania",
	  "Thailand",
	  "Tunisia",
	  "Turkey",
	  "United Arab Emirates (UAE)",
	  "Uganda",
	  "United Kingdom of  Great Britain",
	  "Ukraine",
	  "United States of America",
	  "Vietnam",
	  "Yemen"
	  
    ];
    $( "#TO" ).autocomplete({source: country
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label class="description" for="TO">TO: </label>
  <input id="TO" name="country" required="true" class="element large" type="text" maxlength="255" value=""  />
</div>
<p class="guidelines" id="guide_2"><small>Enter the country where you want to send a post.</small></p> 
 </li>
 </body>
 </html>
 


		
		<!--<li id="li_2" >
		<label class="description" for="country">TO : </label>
		<div>
			<input id="country" name="country" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>Enter the country where you want to send a post.</small></p> 
		</li>	-->
		</li>		<li id="li_4" >
		<label class="description" for="element_4">What are you sending? </label>
		<span>
			<input id="Documentation" name="choice" class="element checkbox" type="radio" value="Documentation" />
<label class="choice" for="Documentation">Documentation</label>
<input id="Merchandise" name="choice" class="element checkbox" type="radio" value="Merchandise" />
<label class="choice" for="Merchandise">Merchandise</label>

		</span> 
		</li>		<li id="li_3" >
		
		
		
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Slider - Snap to increments</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <style type="text/css">
  #slider{
  color: blue;
  border: 3px solid #000;
  height: 3px;
  }
  </style>
  <script>
  $(function() {
    $( "#slider" ).slider({
      value:0,
      min: 1,
      max: 20000,
      step: 1,
      slide: function( event, ui ) {
        $( "#element_3" ).val( ui.value + ""  );
      }
    });
    $( "#element_3" ).val( "" + $( "#slider" ).slider( "value" ) );
  });
  </script>
</head>
<body>
 
<p>
  <label class="description" for="element_3">Weight (in Grams):</label>
  <input type="number" name="weight" id="element_3" style="border: 2px; color: #000; font-weight: bold" class="element text medium" required="true" maxlength="255" value=""/>
</p>
 
<div id="slider"></div>
 
 
</body>
</html>
		<!--<label class="description" for="element_3">Enter weight of your article (in Grams) : </label>
		<div>
			<input id="element_3" name="element_3" required="true" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>-->
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="668445" />
			    
				<input id="saveForm" class=" myButton" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		
<div class="result" style="border: 2px solid blue; border-radius: 5px; background: cyan; ">					
	<?php
		include('connection.php');
		$count = 2;
		if (!empty($_POST['country'])) {
		$country = $_POST['country'];
		
$querycheck = "select count(country) from international_tariff where " . " " . "Country =" . " " . "'" . $country . "'" . " ";
$checkk = mysql_query($querycheck);
while ($ij = mysql_fetch_array($checkk)) {
		$count = $ij[0];
		}

		}
		

if (!($count == 0))	{	
if (!empty($_POST['country'])) {
		if(!empty($_POST['choice'])) {
		
		$choice = $_POST['choice'];
		$weight = $_POST['weight'];

			
			
			
	if ($choice == "Documentation") {
			if ($weight <= 250) { 
				$query = "select DocumentRate from international_tariff where " . " " . "Country =" . " " . "'" . $country . "'" . " ";
														
												
				$rate = mysql_query($query);
				
			
				while ($i = mysql_fetch_array($rate)) {
					$rti = $i[0];
				
					}
				echo "<b>The system generated response for your query: </b><br>";
				
				echo "Weight : " . $weight . " g <br>";
				echo "Calculated Price : <b>&#8377; " . $rti . "</b>";
				}
			
			else {
				
				$query = "select DocumentRate, DocumentRate1 from international_tariff where " . " " . "Country =" . " " . "'" . $country . "'" . " ";
														
				$rate = mysql_query($query);
				
				while ($i = mysql_fetch_array($rate)) {
					$rti = $i[0];
					$rtiadd = $i[1];
					}
					
				$diff = $weight - 250;
				$temp = $diff/250;
				$amt = $rti + ($rtiadd * $temp);
				echo "<b>The system generated response for your query: </b><br>";
				echo "Weight : " . $weight . " g <br>";
				echo "Calculated Price : <b>&#8377; " . $amt . "</b>";
			}
		}
		
		else if ($choice == "Merchandise") {
			if ($weight <= 250) { 
				$query1 = "select MerchandiseRate from international_tariff where " . " " . "Country =" . " " . "'" . $country . "'" . " ";
	
												
				$rate2 = mysql_query($query1);
				
			
				while ($j = mysql_fetch_array($rate2)) {
					$rti1 = $j[0];
				
					}
				echo "<b>The system generated response for your query: </b><br>";
				echo "Weight : " . $weight . " g <br>";
				if (!($rti1 == 0)) {
				echo "Calculated Price : <b>&#8377; " . $rti1 . "</b>";
				}
				else {
				echo "Data not available.";
				}
				}
			
			else {
				
				$query1 = "select MerchandiseRate, MerchandiseRate1 from international_tariff where " . " " . "Country =" . " " . "'" . $country . "'" . " ";
														
				$rate2 = mysql_query($query1);
				
				while ($j = mysql_fetch_array($rate2)) {
					$rti1 = $j[0];
					$rtiadd1 = $j[1];
					}
					
				$diff1 = $weight - 250;
				$temp1 = $diff1/250;
				$amt1 = $rti1 + ($rtiadd1 * $temp1);
				
				echo "<b>The system generated response for your query:</b><br>";
				echo "Weight : " . $weight . " g <br>";
				if (!($amt1 == 0)) {
				echo "Calculated Price : <b>&#8377; " . $amt1 . "</b>";
				}
				else {
				echo "Data not available.";
				}
				}
			
		}
		}
		else {
			echo "Please select your desired choice.";
			}
	}
	}
	elseif ($count == 0) {
		echo "Data not available for the specified country. Inconvenience is regretted.";
	}
?>
</div>			
			
			
		</form>	
		<div id="footer">
			<p><b>Generated by Technocrats</b></p>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
