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

 <p style="margin-left:10%;  padding-top:4%; font-size:48px;"><a href="index.php" style="text-decoration:none; color:#000000; "><strong>CONTAGIOUS
 <span style="font-size:24px; font-family: 'Play', sans-serif;">NOMINEE</span></strong></a></p>

</div>

<div class="names" style="display:none; ">
<?php


try{
$dbh = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
$dbh -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sth = $dbh ->prepare("SELECT * FROM presenters WHERE presented = 0 ");
$sth -> execute();

$sth -> setFetchMode(PDO::FETCH_ASSOC);

$namesarray = array();
while($row = $sth->fetch())
	{
		$namesarray[] =$row['name'];
		
	}
	
	$assignee = trim($namesarray[array_rand($namesarray)]);

}

catch(PDOException $e)
	{
		echo $e-> getMessage();
	}	
	
?>


	<p id="random"><?php echo $assignee; ?></p>
	<script>
	var nominee = document.getElementById("random").innerHTML;
	</script>
</div>

<?php
if(sizeof($namesarray)>0){


echo'<div class="body">
<div class="pic">
<img src="css/images/contagious.png" style="float:right; margin-bottom:3%;" width="200px" height="200px">
</div>
<div class="bizniz">

<p id="display" style="border:1px solid green; text-align:center; width:100%;  float:left; box-shadow:5px 5px 8px 0px #CCC;
 font-family: Play, sans-serif; font-size:60px; margin-top:7%"></p>
 
 <input type="submit" onclick="javascript:change();" Value="Nominate" style="float:left; margin-left:15%;" class="isset" id="nominate" >
 <form action = "" method = "POST">
 <a href="assign.php?name='.$assignee.'" style="float:right; margin-right:15%; padding-top:13px;" class="anka" name="assign">Assign</a>
 </form> ';
}
else{
	echo ' <div class="body bizniz" style="font-size:60px"> Everybody has presented, Reset list.<br> ';
	echo '<form action="" method="POST"><button class="isset" name="reset">Reset</button></form> </div>';
}
	if(isset($_POST['reset'])){
		try {

				$sql = $dbh->prepare('UPDATE presenters SET presented=0 WHERE number>1');
				$sql->execute();

			if($sql){
				echo "<script>
				alert('Reset Successful');
				window.location.assign('index.php');
				</script>";
			}
			
		} catch (PDOException $e) {
			echo $e -> getMessage();
		}

	}

 ?>

 <div style="float:left; margin-top:15%; width:100%; clear:all;">
<a href="index.php" style="text-decoration:none; "> &rarr; Reload &larr; </a>
</div>

 </div>

</div>








<br><br><br><br>
<div style="margin-top:33%; clear:all; margin-bottom:2%">
<hr width="90%">
<div>
<span style="float:right; margin-right:10%; font-family: 'Poiret One', cursive;">&copy <?php echo date('Y')?><span> 
<script type="text/javascript">

var names = <?php echo json_encode($namesarray);?>



var i = 0;
var change = function(){
				
					setInterval(function(){
					if(typeof names[i] !== "undefined"){
						document.getElementById("display").innerHTML = names[i++];
							if(i == names.length){
							names.push(nominee);
							}
				}
					},150);

}


</script>
</body>
</html>

