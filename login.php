<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";
mysqli_connect($host,$user,$password,$db);
if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
/*if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $connect=mysql_connect("127.0.0.1","kzr_zetr","350adagsertesborda");
    if($connect){
        $db=mysql_select_db("kzr_zetr");
        if($db){
            $query=mysql_query("SELECT * FROM login WHERE username = '$username' AND password = '$password'");
            $rowcount=mysql_num_rows($query);
            if($rowcount>0){
                $uri="http://kzr.bplaced.de/session/?username=".$username;
                header('Location:'.$uri);
                print 'sucess';
            }else{
                echo "<script type='text/javascript'>login_f_val_phperr();</script>";
                print 'fail';
            }
        }
    }
}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form </title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\fontawesome.min.css">
</head>
<body>
	<div class="container">
	<img src="img/login.jpg"/>
		<form>
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name" id="username"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password" id="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login" id="login" name="login"/>
		</form>
	</div>
</body>
</html>