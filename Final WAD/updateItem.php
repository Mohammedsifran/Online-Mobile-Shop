
     <?php 
  if(isset($_POST["btnSubmit"])){
	  
	  $cost=$_POST["Cost"];
	  $instock=$_POST["Instock"];
	  $warranty=$_POST["Warranty"];
	$itemcode=$_POST["Itemcode"];
	  
	  
	

$con=mysqli_connect("localhost","root","","it18231274");
	  if(!$con){
		  die("Cannot connect to DB server");
		  
		  }
		  else{
		  
		  
		  $sql="UPDATE `it18231274`.`items` SET `cost` = '".$cost."', `instock` = '".$instock."', `warranty` = '".$warranty."' WHERE `items`.`itemcode` = '".$itemcode."'";

		 }

	
		
		
		//UPDATE `it18231274`.`items` SET `cost` = '60000',`instock` = '8',`warranty` = '2 Year' WHERE `items`.`itemcode` = '#samsungj8';

		mysqli_query($con,$sql);
		mysqli_close($con);
	  header('Location:backend_item.html');
	  
	  
	  }
  
  
  ?>