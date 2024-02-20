
     <?php 
  if(isset($_POST["btnSubmit"])){
	  $itemcode=$_POST["Itemcode"];

	  
	  
	

$con=mysqli_connect("localhost","root","","it18231274");
	  if(!$con){
		  die("Cannot connect to DB server");
		  
		  }
		  else{
		  
		  
		  $sql="DELETE FROM `it18231274`.`items` WHERE `items`.`itemcode` = '".$itemcode."'";
		
		//DELETE FROM `it18231274`.`items` WHERE `items`.`itemcode` = '#Nokia4'


		 }

		mysqli_query($con,$sql);
		
		mysqli_close($con);
	  header('Location:backend_item.html');
	 
	 
	  }
  
  
  ?>