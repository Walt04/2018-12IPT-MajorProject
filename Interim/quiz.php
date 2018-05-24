<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>SPX Biology - Quiz</title>
	<link href="css/spxbiology.css" rel="stylesheet" type="text/css">
	</head>	
<body>
<table>
    <tr>
        <td><img src="biopicture.jpg" alt="Biology" width="300" height="200"></td>
        <td><h1 align="centre">SPX BIOLOGY eLearning</h1></td>
    </tr>
</table>
	 
<div class="topnav">
  <a href="index.html">Home</a>
  <a class="active" href="quiz.html">Quiz</a>
  <a href="gallery.html">Gallery</a>
  <a href="feedback.php">Feedback</a>
</div> 

<h1 style="background-color:DodgerBlue;">Blueprint of Life - Quiz Results</h1>

    <?php
     $totalscore = 0;
     $maxscore = 3;
                     
         if(isset($_POST["q1"])) {
                    $answer1 = $_POST["q1"];
               if($answer1 == "T") {
                      echo("<h3>Question 1 is correct!</h3>");
                             $totalscore += 1;
                                    }
       else {
         echo("<h3>Question 1 is incorrect.</h3>");
            }
            }
       else {
          echo("<h3>Question 1 has not been answered.</h3>");
             }
                           
       if(isset($_POST["q2"])) {
                   $answer1 = $_POST["q2"];
           if($answer1 == "T") {
             echo("<h3>Question 2 is correct!</h3>");
                    $totalscore += 1;
                           }
               else {
         echo("<h3>Question 2 is incorrect.</h3>");
                   }
                 }
        else {
        echo("<h3>Question 2 has not been answered.</h3>");
             }
                   
         if(isset($_POST["q3"])) {
                      $answer1 = $_POST["q3"];
         if($answer1 == "T") {
               echo("<h3>Question 3 is correct!</h3>");
                          $totalscore += 1;
                }
         else {
           echo("<h3>Question 3 is incorrect.</h3>");
                }
                }
         else {
           echo("<h3>Question 3 has not been answered.</h3>");
              }
                           
echo("<h3>Well done... you got ".$totalscore." out of ".$maxscore."</h3>");                          
                           
?>


 
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
</style>
</body>	  

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

</html>