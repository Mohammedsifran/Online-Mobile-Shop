
     <?php 
  if(isset($_POST["btnSubmit"])){
	  $itemcode=$_POST["Itemcode"];
	  $name=$_POST["Name"];
	  $model=$_POST["Model"];
	  $cost=$_POST["Cost"];
	  $instock=$_POST["Instock"];
	  $warranty=$_POST["Warranty"];
	
	  
	  
	

$con=mysqli_connect("localhost","root","","it18231274");
	  if(!$con){
		  die("Cannot connect to DB server");
		  
		  }
		  
		  
		  
		  $sql="INSERT INTO `it18231274`.`items` (`itemcode`, `name`, `model`, `cost`, `instock`, `warranty`) VALUES (
'".$itemcode."',  '".$name."',  '".$model."',  '".$cost."',  '".$instock."',  '".$warranty."'
)";


		mysqli_query($con,$sql);
		mysqli_close($con);
	header('Location:backend_item.html');


	  
	  }
  
  
  ?>