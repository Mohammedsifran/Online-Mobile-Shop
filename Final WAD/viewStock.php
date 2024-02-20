  <?php

$con=mysqli_connect("localhost","root","","it18231274");
	  if(!$con){
		  die("Cannot connect to DB server");
		  
		  }
		  else{
		  
		  if(isset($_POST['search']))
          {
          	$itemcode=$_POST['itemcode'];
          
          
		   $sql="SELECT * FROM `items` where itemcode='".$itemcode."'";
		   
		   
		   //SELECT * FROM `items` WHERE `itemcode`='#fds'
		   
		   
           $query_run=mysqli_query($con,$sql);
          
           while($row=mysqli_fetch_array($query_run))
           {
           		?>
                <br>
                <br>
                <br>
                <table width="340" align="center" bgcolor="#00FF99" bordercolor="#FF0000" border="2" >
                <tr>
               <td width="159"> Item code</td> <td width="163"><?php echo $row['itemcode']; ?></td> </tr>
           		<tr><td> Name</td><td><?php echo $row['name']; ?></td></tr>
               <tr><td> Model</td> <td><?php echo $row['model']; ?></td></tr>
                <tr><td> Cost</td><td><?php echo $row['cost']; ?></td></tr>
               <tr><td>In Stock</td><td><?php echo $row['instock']; ?></td></tr>
                <tr><td> Warranty</td><td><?php echo $row['warranty']; ?></td></tr>
                </tr>
             <?php   
              
           
           }

		  }
		  }
		  
		  ?>
	
	</table>
    			<?php $link_name="Go Back"; ?>
                 <a href="backend_stock.html"><?php $link_name="Go Back"; ?></a>