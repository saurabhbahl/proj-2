<html>
	<head>
		<title></title>
	</head>
	<script src="js/jquery.min.js"></script>
	<script>
		function prime()
			 {
				var i,flag=0,flag1=0,flag2=0,number,numb,numm,msg,ms,m1,m2,m3;
				number = Number(document.getElementById("n").value);
				numb = Number(document.getElementById("n1").value);
				numm= Number(document.getElementById("n2").value);

				for(i=2; i <= number/2; i++)
				{
					if(number%i == 0)
					{
						flag = 1;
						break;
					}	
				
				}
				
				for(i=2; i <= numb/2; i++)
				{
					if(numb%i == 0)
					{
						flag1 = 1;
						break;
					}	
				
				}
				
				
				for(i=2; i <= numm/2; i++)
				{
					if(numm%i == 0)
					{
						flag2 = 1;
						break;
					}	
				
				}
				
				
			
				if(flag == 0)
				{
					msg = number + " first number is prime";
					if(number%2==0)
					{
						m1=number+"-The number is even";
					}
					else
					{
						m1=number+"-The number is odd";
					}
				}
				else
				{
					msg = number + " first number is not prime";
					if(number%2==0)
					{
						m1=number+"-The number is even";
					}
					else
					{
						m1=number+"-The number is odd";
					}
				}
				
				 if(flag1 == 0)
				{
					msg1 = numb + " second number is prime";
					if(numb%2==0)
					{
						m2=numb+"-The number is even";
					}
					else
					{
						m2=numb+"-The number is odd";
					}
				}
				else
				{
					msg1 = numb + " second number is not prime";
					if(numb%2==0)
					{
						m2=numb+"-The number is even";
					}
					else
					{
						m2=numb+"-The number is odd";
					}
				}
				if(flag2 == 0)
				{
					msg2 = numm + " third number is prime";
					if(numm%2==0)
					{
						m3=numm+"-The number is even";
					}
					else
					{
						m3=numm+"-The number is odd";
					}
				}
				else
				{
					msg2 = numm + " third number is not prime";
					if(number%2==0)
					{
						m3=numm+"-The number is even";
					}
					else
					{
						m3=numm+"-The number is odd";
					}
					
				} 
				
				alert(msg + "\n" + msg1 + "\n" + msg2 + "\n\n" + m1 + "\n" + m2 + "\n" +  m3 );
				
			}
</script>
	<body>
	
	
		<form name="abc" method="post">
			Enter Number:<input type="text" name="num" id="n" ><input type="text" name="n" id="n1" ><input type="text" name="numb" id="n2" ></br>
			<input type="submit" name="s1" value="send" id="s1" onClick="prime()" >
	
		</form>
	</body>

</html>


If your WordPress host supports git, check to see if it helps in your development process. One of the hosting providers, Pantheon, for example, makes it easy to visualise and understand version control by integrating the git process within its dashboard. Check out their guide here.

Also, check out this interactive tryGit exercise from CodeSchool that walks you through the basics steps of learning Git and pushing to remote repositories like GitHub within 15 minutes. You can also use the exercise to refresh your learning of Git.

Let me know if you have any questions or suggestions about Git and Github in the comments below.

