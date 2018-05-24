<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>SPX Biology - Feedback</title>
	<link href="css/spxbiology.css" rel="stylesheet" type="text/css">
	
<body>
<table>
    <tr>
        <td><img src="biopicture.jpg" alt="Biology" width="300" height="200"></td>
        <td><h1 align="centre">SPX BIOLOGY eLearning</h1></td>
    </tr>
</table>
	 
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="quiz.html">Quiz</a>
  <a href="gallery.html">Gallery</a>
  <a class="active" href="feedback.php">Feedback</a>
</div> 

<maincontent>
<h1 style="background-color:DodgerBlue;">Blueprint of Life - Feedback</h1> 
      
    <h3>Last 10 Feedback Comments</h3>
    
    <?php
		
		$servername = "172.16.2.214";
		$username = "student";
		$password = "password";
		$dbname = "studentdb";
		
		// Create connection
		$conn = new MySQLi($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die ("Connection failed: " . $conn->connect_error);
		}
			
	$sql = "(SELECT fbId, fbPerson, fbEmail, fbComment FROM feedback ORDER BY fbId DESC LIMIT 10) ORDER BY fbId ASC";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo "<table class='feedback'>";	#note echo is similar to print
			//output data of each row
				echo "<tr>";
					echo "<td>FeedbackId</td>";
					echo "<td>Name</td>";
					echo "<td>Email</td>";
					echo "<td>Comment</td>";
				echo "</tr>";
			
			while($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>" . $row["fbId"]. "</td>";
				echo "<td>" . $row["fbPerson"]. "</td>";
				echo "<td>" . $row["fbEmail"]. "</td>";
				echo "<td>" . $row["fbComment"]. "</td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		$conn->close();
	?>	

		
	
		</p>
		<form action="feedbackDone.php" method="post" name="FeedBackForm" id="FeedBackForm">
			<h3>Leave Your Feedback here:</h3>
				<table width="100%">
					<tbody>
						<tr>
						<td>Name</td>
						<td>
							<input name="fbName" type="text" id="fbName" size="50" maxlength="100" required="required">
						</td>
						</tr>
						<tr>
						<td>Email</td>
						<td>
							<input name="fbEmail" type="email" id="fbEmail" size="50" maxlength="100" required="required"></td>
						</tr>
						<td>Comment</td>
						<td>
	<textarea name="fbComment" rows="5" maxlength="100" id= "fbComment" required="required"></textarea></td>
								   </tr>
								   <tr>
								   	<td><input type="reset" name="reset" id="reset" value="Reset"></td>
								   	<td><input type="submit" name="submit" id="submit" value="Submit"></td>
								   </tr>
					</tbody>
				</table>
			
		</form>
   
    </maincontent>
		
			
				
						
<style>
h1 {
    text-align: center;
    width: 600px;
}	
	
h2 {
    text-align: right;
    width: 800px;
}
	  
	body 
	{
		background-color: #eddfcb
	}
	
	{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #eacd2c;
  color: white;
} 	
	
.feedback{
	border: black 1px solid;
}

	
	
</style>	  


		
</body>
	</head>	
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

</html>