<html>
	<head>
		<title></title>
	</head>
	<script src="jquery.min.js"></script>
	<script>
		function prime()
			 {
				var i,flag=0,number;
				number = Number(document.getElementById("n").value);

				for(i=2; i <= number/2; i++)
				{
					if(number%i == 0)
					{
						flag = 1;
						break;
					}	
				
				}
				
				if(flag == 0)
				{
					alert(number+"-The number is Prime");
					if(number%2==0)
					{
						alert(number+"-The number is even");
					}
					else
					{
						alert(number+"-The number is odd");
					}
					
				
				}
				else
				{
					alert(number+"-The number is not Prime");
					
					if(number%2==0)
					{
						alert(number+"-The number is even");
					}
					else
					{
						alert(number+"-The number is odd");
					}
				}
				
				
			}

			
		

			</script>
	<body>
	
	
		<form name="abc" method="post">
			Enter Number:<input type="text" name="num" id="n" ></br>
			<input type="submit" name="s1" value="send" id="s1" onClick="prime()" >
	
		</form>
	</body>

</html>