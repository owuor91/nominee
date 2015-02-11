<?php
include("connection.php");
?>
<html>

<head>
<link rel="stylesheet" href="css/cont.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,500|Play|Poiret+One' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="header"> 

 <p style="margin-left:10%;  padding-top:4%; font-size:48px;"><a href="index.php" style="text-decoration:none; color:#000000; "><strong><!--CONTAGIOUS--> 
 <span style="font-size:24px; font-family: 'Play', sans-serif;">NOMINEE</span></strong></a></p>

</div>

<?php $assignee = $_GET['name'];
 

try{
		$dbh = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
		$dbh -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		

		$sth = $dbh ->prepare("UPDATE presenters SET presented = 1 WHERE name =?");
		$sth -> execute(array($assignee));

	}
 
 catch(PDOException $e)
	{
		echo $e-> getMessage();
	}

 ?>



<div class="body">
<div class="pic">
<img src="css/images/contagious.png" style="float:right; margin-bottom:3%;" width="200px" height="200px">
</div>
<div class="bizniz">
<p style="font-size:48px">
<strong>Congratulations,<br><span style="font-size:60px;"> <?php echo $assignee.'.'; ?> </span>You are the next presenter.</strong>
                                                  
</p>
 
 <a href="index.php" style="text-decoration:none;"> &larr; Back</a>
 </div>

</div>
<br><br><br>
<div style="margin-top:33%; clear:all; margin-bottom:2%">
<hr width="80%">
<div>
<span style="float:right; margin-right:10%; font-family: 'Poiret One', cursive;">&copy <?php echo date('Y');?><span> 
</body>
</html>
