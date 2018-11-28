<?php
	$conn=mysqli_connect("localhost","root","","demo")or die(mysqli_connect_error());
	$qu="SELECT orders.orderid, customer.customername, orders.orderdate
			FROM orders
			INNER JOIN customer ON orders.customerid=customer.customerid";
	$res=mysqli_query($conn,$qu)or die(mysqli_error($conn));
	$row=mysqli_affected_rows($conn);

	
	print'<table class="table">
			<tr>
				<th>CustomerName</th>
				<th>OrderID</th>
				<th>Order Date</th>
			</tr>';
	while($ans=mysqli_fetch_array($res))
				{
					print'
						<tr>
							<td>'.$ans["customername"].'</td>
							<td>'.$ans["orderid"].'</td>
							<td>'.$ans["orderdate"].'</td>
					</tr>
					';
				}
				
				print"</table>";
?>