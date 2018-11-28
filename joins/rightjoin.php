<!DOCTYPE html>
<?php
		 $conn=mysqli_connect("localhost","root","","demo")or die(mysqli_connect_error());
				$qu="select orders.orderid,orders.customerid,customer.customername
						from orders
					right join customer on orders.customerid=customer.customerid";
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
			<select name="sort">
				<option value="asc">Ascending</option>
				<option value="desc">Descending</option>
			</select>
			<input type="submit" name="update" value="Display results">
				<div class="table-responsive">
					
						

			<?php
				if(isset($_GET["update"]))
				{
					$a=$_GET["sort"];
					$conn=mysqli_connect("localhost","root","","demo")or die(mysqli_connect_error());
					$qu="select orders.orderid,orders.customerid,customer.customername
							from orders
						right join customer on orders.customerid=customer.customerid order by customername $a";
					$res=mysqli_query($conn,$qu)or die(mysqli_error($conn));
					$row=mysqli_affected_rows($conn);
					
				}
				?>
				
				<table class="table table-striped table-bordered" id="reg">
			<tr>
				<th>CustomerID</th>
				<th>CustomerName</th>
				<th>Orderid</th>
				
			</tr>
			
			<?php
				while($ans=mysqli_fetch_array($res))
				{
					print'
						<tr>
							<td>'.$ans["customerid"].'</td>
							<td>'.$ans["customername"].'</td>
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