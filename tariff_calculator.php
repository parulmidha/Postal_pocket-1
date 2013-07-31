<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Postal tariff estimator</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<script type="text/javascript" src="view.js"></script>
<script>
function checkTextField(weight) {
    if (weight.value > '35') {
        alert("Field is empty");
    }
}
</script>

<!--
<script type="text/javascript">
$(".button_text").click(function(){
$('.result').show();
});
</script>
-->
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
	
		<h1><a>Postal tariff estimator</a></h1>
		<form id="form_662776" class="appnitro"  method="POST" action="tariff_calculator.php">
					<div class="form_description">
			<h2><b>Postal tariff estimator</b></h2>
			<p>Estimate the value for sending a post effectively.</p>
		</div>						
			<ul >
			
					<li id="li_3" >
		<label class="description" for="element_3">Please enter the approximate distance...</label>
		<div>
		<select class="element select large" id="element_3" required="true" name="distance"> 
			<option value="" selected="selected"></option>
<option value="1" >Local (0 km to 30 km)</option>
<option value="2" >upto 200 Kms (31 km to 200 km)</option>
<option value="3" >201 to 500 Kms</option>
<option value="4" >501 to 1000 Kms</option>
<option value="5" >1001 to 2000 Kms</option>
<option value="6" >Above 2001 Kms</option> 

		</select>
		</div> 
		</li>

<p><b>Problem calculating distance ?</b></p>
<iframe src="mapdemo2.html" width="100%" height="200" scrolling="no" seamless></iframe>




	<li id="li_4" >
		<label class="description" for="element_4">please specify the priority of the desired post... </label>
		<span>
			<input id="priority_low" name="priority" class="element checkbox" type="radio" value="low" />
				<label class="choice" for="priority_low">Low priority (Budget Post)</label>

			<input id="priority_high" name="priority" class="element checkbox" type="radio" value="high" />
				<label class="choice" for="priority_high">High Priority</label>

		</span>		
		</li>	
		
		<li id="li_2" >
		<label class="description" >Please enter the approximate weight (in Kgs)...</label>
		<div>
			<input id="element_2" name="weight" required="true" class="element text" type="number" maxlength="255" min="0.001" max="50" step="0.0001" onblur="checkTextField(this);" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="662776" />
			    
				<input id="saveForm" class="myButton" type="submit" name="submit" value="Calculate Tariff" />
		</li>
			</ul>
			
			
	<div class="result" style="border: 2px solid blue; border-radius: 5px; background: cyan; ">			
<?php
		include('connection.php');
		
		
		$distance = '';
		$weight = '';

		
if(!empty($_POST['distance'])) {
		if(!empty($_POST['priority'])) {
		
		$distance = $_POST['distance'];
		$priority = $_POST['priority'];
		$weight = $_POST['weight'];
		
		if ($distance == 1) $dis = 20;
		if ($distance == 2) $dis = 100;
		if ($distance == 3) $dis = 300;
		if ($distance == 4) $dis = 700;
		if ($distance == 5) $dis = 1500;
		if ($distance == 6) $dis = 3000;
			
			
			
			
	if ($priority == "high") {
			if ($weight <= 2.00000) {
				$query = "select Rate from speedpost where" . " " . $dis . " " . "<= Distance_to
														&& " . " " . $dis . " " . ">= Distance_from
														&& " . " " . $weight . " " . "<= Weight_to
														&& " . " " . $weight . " " . ">= Weight_from";
				$rate = mysql_query($query);
				
			
				while ($i = mysql_fetch_array($rate)) {
					$rti = $i[0];
				
					}
				echo "<b>The system generated response for your query: </b><br>";
				echo "Type of Post : SpeedPost <br>";
				echo "Weight : " . $weight . " Kg <br>";
				echo "Calculated Price : <b>&#8377; " . " " . $rti . "</b>";
				}
			
			else {
				
				$query = "select Rate, Rate_1kgadd from speedpost where" . " " . $dis . " " . "<= Distance_to
														&& " . " " . $dis . " " . ">= Distance_from
														&& " . " " . $weight . " " . "<= Weight_to
														&& " . " " . $weight . " " . ">= Weight_from";
				$rate = mysql_query($query);
				
				while ($i = mysql_fetch_array($rate)) {
					$rti = $i[0];
					$rtiadd = $i[1];
					}
					
				$diff = $weight - 2.00000;
				$amt = $rti + ($rtiadd * $diff);
				echo "<b>The system generated response for your query: </b><br>";
				echo "Type of Post : SpeedPost <br>";
				echo "Weight : " . $weight . " Kg <br>";
				echo "Calculated Price : <b>&#8377; " . "  " . $amt . "</b>";
			}
		}
		
	else if ($priority == "low"){
		if ($weight <= 2.00000) {
				$query = "select Rate from speedpost where" . " " . $dis . " " . "<= Distance_to
														&& " . " " . $dis . " " . ">= Distance_from
														&& " . " " . $weight . " " . "<= Weight_to
														&& " . " " . $weight . " " . ">= Weight_from";
				$query2 = "select Rate from parcel where" . " " . $dis . " " . "<= Distance_to
														&& " . " " . $dis . " " . ">= Distance_from
														&& " . " " . $weight . " " . "<= Weight_to
														&& " . " " . $weight . " " . ">= Weight_from";
				$rate = mysql_query($query);
				$rate2 = mysql_query($query2);
			
				while ($i = mysql_fetch_array($rate)) {
					$rti = $i[0];
				
					}
					
				while ($j = mysql_fetch_array($rate2)) {
					$rti2 = $j[0];
				
					}
				
				if ($rti <= $rti2) {
					echo "<b>The system generated response for your query: </b><br>";
					echo "Type of Post : SpeedPost <br>";
					echo "Weight : " . $weight . " Kg <br>";
					echo "Calculated Price : <b>&#8377; " . " " . $rti . "</b>";
				}
				else {
					echo "<b>The system generated response for your query: </b><br>";
					echo "Type of Post : Express Parcel <br>";
					echo "Weight : " . $weight . " Kg <br>";
					echo "Calculated Price : <b>&#8377; " . " " . $rti2 . "</b>";
					}
			}
			
			else {
				
				$query = "select Rate, Rate_1kgadd from speedpost where" . " " . $dis . " " . "<= Distance_to
														&& " . " " . $dis . " " . ">= Distance_from
														&& " . " " . $weight . " " . "<= Weight_to
														&& " . " " . $weight . " " . ">= Weight_from";
				$query2 = "select Rate, Rate_1kgadd from parcel where" . " " . $dis . " " . "<= Distance_to
														&& " . " " . $dis . " " . ">= Distance_from
														&& " . " " . $weight . " " . "<= Weight_to
														&& " . " " . $weight . " " . ">= Weight_from";
				$rate = mysql_query($query);
				$rate2 = mysql_query($query2);
				
				while ($i = mysql_fetch_array($rate)) {
					$rti = $i[0];
					$rtiadd = $i[1];
					}
				while ($j = mysql_fetch_array($rate2)) {
					$rti2 = $j[0];
					$rtiadd2 = $j[1];
					}
					
				$diff = $weight - 2.00000;
				
				$amt = $rti + ($rtiadd * $diff);
				$amt2 = $rti2 + ($rtiadd2 * $diff);
				
				if ($amt <= $amt2) {
					echo "<b>The system generated response for your query: </b><br>";
					echo "Type of Post : SpeedPost <br>";
					echo "Weight : " . $weight . " Kg <br>";
					echo "Calculated Price : <b>&#8377; " . " " . $amt . "</b>";
				}
				else {
					echo "<b>The system generated response for your query: </b><br>";
					echo "Type of Post : Express Parcel <br>";
					echo "Weight : " . $weight . " Kg <br>";
					echo "Calculated Price : <b>&#8377; " . " " . $amt2 . "</b>";
					}
			}
		}
		}
		else {
			echo "Please select your desired priority.";
			}
	}	
?>
</div>
		</form>	
		<div id="footer">
	
			Generated by Technocrats
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>