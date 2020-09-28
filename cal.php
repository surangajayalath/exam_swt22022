
 <!DOCTYPE html>
 <html>
 <head>
 	<title>	</title>
 </head>
 <body>

 <form>
 	<label>Number1</label><br>	
 	<input type="number" name="num1"><br>
 	<label>Number2</label><br>			
 	<input type="number" name="num2"><br>	
 	<input type="submit" name="submit" value="Get Total">
 </form>
 <?php 	
@$n1 = $_GET['num1'];
@$n2 = $_GET['num2'];
$total = $n1 + $n2;
echo "Total is: " . $total;
 ?>

 <style type="">
 	input{
 		margin-top: 10px;
 		margin-bottom: 10px;
 	}
 </style>
 
 </body>
 </html>