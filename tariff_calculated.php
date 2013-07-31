<?php
echo "<html>";
echo "<head>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
echo "<title>Postal tariff estimator</title>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"view.css\" media=\"all\">";
echo "<script type=\"text/javascript\" src=\"view.js\"></script>";
echo "</head>";

echo "<body id=\"main_body\" >";
	
echo "<img id=\"top\" src=\"top.png\">";
echo "<div id=\"form_container\">";
			
		include('connection.php');
		
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
				echo "Calculated Price : <b>&#8377; " . $rti . "</b>";
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
				echo "Calculated Price : <b>&#8377; " . $amt . "</b>";
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
					echo "Calculated Price : <b>&#8377; " . $rti . "</b>";
				}
				else {
					echo "<b>The system generated response for your query: </b><br>";
					echo "Type of Post : Express Parcel <br>";
					echo "Weight : " . $weight . " Kg <br>";
					echo "Calculated Price : <b>&#8377; " . $rti2 . "</b>";
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
					echo "Calculated Price : <b>&#8377; " . $amt . "</b>";
				}
				else {
					echo "<b>The system generated response for your query: </b><br>";
					echo "Type of Post : Express Parcel <br>";
					echo "Weight : " . $weight . " Kg <br>";
					echo "Calculated Price : <b>&#8377; " . $amt2 . "</b>";
					}
			}
		}
		
		
		
		
echo "<div id=\"footer\">";
echo "Generated by Technocrats";
echo "</div>";
echo "</div>";
echo "<img id=\"bottom\" src=\"bottom.png\">";
echo "</body>";
echo "</html>";
?>