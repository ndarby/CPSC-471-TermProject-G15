<html>
<style type="text/css">
	body{
		text-align: center;
		margin: auto;
		vertical-align: middle;
		padding-bottom: 100px;
		padding-top: 100px;
	}
	header{
		text-align: center;
		position: absolute;
		top:0;
		width: 100%;
		height: 60px;
		background: #6af;
		padding-bottom: 20px;
	}
</style>
<header>
	<h1> Login</h1>
</header>
<body>
	<form action="patient-login.php" method="post">
   User ID: <input type="text" name="UserID" required><br><br>
   Password: <input type="password" name="Password" required><br><br>
   <input type="submit" value="Submit" />
   <input type="button" name = "Cancel" value="Cancel" onClick = "window.location='../index.php';"/>
</form>
</form>
</form>
</body>
</html>




