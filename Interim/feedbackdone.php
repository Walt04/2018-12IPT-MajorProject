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
        <td><h1> SPX BIOLOGY eLearning</h1></td>
    </tr>
</table>
	 
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="quiz.html">Quiz</a>
  <a href="gallery.html">Gallery</a>
  <a class="active" href="feedback.php">Feedback</a>
</div> 
	
<style>
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
</style>	  
<h1 style="background-color:DodgerBlue;">Blueprint of Life - Feedback</h1>

<maincontent>
    
    <?php
		include 'redirect.php';
		
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
		
		$fbPerson = $_POST["fbName"];
		$fbEmail = $_POST["fbEmail"];
		$fbComment = $_POST["fbComment"];
		
		$sql = "INSERT INTO feedback (fbPerson, fbEmail, fbComment) Values ('".$fbPerson."', '".$fbEmail."', '".$fbComment."')";
		
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		
		$url = 'feedback.php';
		redirect($url);
?>	
		
	</maincontent>
			
</body>
	</head>	
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

</html>