<? php >
$username="yeshwanth";
$password="1234";
$in_username=$_POST['uname'];
$in_password=$_POST['psw'];
if(username==in_username && password==in_password)
{
	echo" <h1>hello welcome</h1>";
}
else if(username!=in_username && password==in_password)
{
	echo "<h1> username is invaid</h1>";
}
else if(username!=in_username && password!=in_password)
{
	echo "<h1> username and pasword is invaid</h1>";
}
else if(username-=in_username && password!=in_password)
{
	echo "<h1> password is invaid</h1>";
}
<?>