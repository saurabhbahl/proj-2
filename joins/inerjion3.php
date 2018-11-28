<!DOCTYPE html>
<?php
		$conn=mysqli_connect("localhost","root","","demo")or die(mysqli_connect_error());
				$qu="SELECT product.productid, orders.orderid,customer.customername,product.productname
					FROM ((product
					INNER JOIN customer ON product.customerid = customer.customerid)
					INNER JOIN orders ON product.productid = orders.productid)";
				$res=mysqli_query($conn,$qu)or die(mysqli_error($conn));
				$row=mysqli_affected_rows($conn);
		
	?>
<html>
	<head>
		<title>Bootstarp 3</title>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
		<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
		<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
		 <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
	</head>
	
	<body>
		<div class="container">
		<form method="get">
			<h3 align="center">Data Tables</h3>
			
			
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="reg">
						<tr>
							<th>CustomerName</th>
							<th>Productid</th>
							<th>ProductName</th>
							<th>Orderid</th>
							
						</tr>
						
							<?php
								while($ans=mysqli_fetch_array($res))
								{
									print'
										<tr>
											<td>'.$ans["customername"].'</td>
											<td>'.$ans["productid"].'</td>
											<td>'.$ans["productname"].'</td>
											<td>'.$ans["orderid"].'</td>
											
									
									</tr>
									';
								}
							?>
					</table>
				</div>
				</form>
		</div>
	
	</body>
</html>

<script>
	$(document).ready(function(){
		$('#reg').DataTable();
	});
</script>