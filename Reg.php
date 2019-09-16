<?php 
session_start();

//initialising variables
$username = "";
$email = "";
$errors = array();

//connect to db
$db = mysqli_connect('localhost','root','','madepro') or die("Could not connect to database");

//Register user
if (isset($_POST['reg_user'])) {

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation
if (empty($username)) { array_push($errors, "Username is required");}
if (empty($email)) { array_push($errors, "Email is required");}
if (empty($password_1)) { array_push($errors, "Password is required");}
if ($password_1 != $password_2) { array_push($errors, "Password do not match");}

// check db for existing user with same username
$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if ($user) {
	if ($user['username'] === $username) {array_push($errors, "Username already exists");}
    if ($user['email'] === $email) {array_push($errors, "Email ID already registered");
    }
}

//Register the user if no error

if (count($errors) == 0) {

	$password = md5($password_1); //this will encrypt the password
	$query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";

	header('location: https://www.madepro.site/program');
    }
}

//LOGIN USER

if (isset($_POST['login_user'])) {

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password_1']);

	if (empty($username)) {
		$array_push($errors, "Username is required") ;
	}
	if (empty($password)) {
		$array_push($errors, "Password is required") ;
	}
	if (count($errors) == 0) {

		$password = md5($password);
		$query = "SELECT * FROM user WHERE username= '$username' AND password= '$password' ";

		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results)) {

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged in successfully";
			header('location: https://www.madepro.site/program');
		}else{
			array_push($errors, "Wrong username/Password. Please try again");
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
<style>
	body{
        background-color: #fff;
	}
	.register-left{
		text-align: left;
		color: #f8f8f8 ;
		padding: 5px;
		font-family: sans-serif;
	}
	.register-left p{
		padding 5px 15px 0;

	}
	.row{
		text-align: left;
		color: #f8f8f8 ;
		padding: 5px;
                
	}
	.register-left .btn-primary{
		border-radius: .5rem;
		border: none;
		width: full;
        background-image: linear-gradient(to right, #f2ce71, #edb62c);		
        font-weight: 600;
		color: #4e4b40;
                position: right;     
	}
	.register-left .btn-primary:hover{
		background: #f2ce71;
		color: #4e4b40 ;
	}
	.registration{
		border: none;
		font-family: sans-serif;
		font-size: 18px;
        background-image: linear-gradient(to right, #f2ce71, #edb62c);		
		border-radius: 2.5%;
		text-align: left;
		color: #4e4b40  ;
		border-radius: .5rem;
		border: none;
		background: #edb62c;
		font-weight: 600;
		margin: 50px ;
		padding: 15px;
	}
	
	
	input[type="text"]{
		width: 700px;
		border: #555;
		background: #fff;
		border-radius: 2.5%;
		text-align: left;
		color: #4e4b40  ;
		border-radius: .5rem;
		font-weight: 150;
		postion: center;
                padding: 20px;
	}
	input[type="email"]{
		width: 700px;
		border: #555;
		background: #fff;
		border-radius: 2.5%;
		text-align: left;
		color: #4e4b40  ;
		border-radius: .5rem;
		font-weight: 150;
		postion: center;
                padding: 20px;
	}
	input[type="password"]{
		width: 700px;
		border: #555;
		background: #fff;
		border-radius: 2.5%;
		text-align: left;
		color: #4e4b40  ;
		border-radius: .5rem;
		font-weight: 150;
		postion: center;
                padding: 20px;
	}
	input[type="password"]{
		width: 700px;
		border: #555;
		background: #fff;
		border-radius: 2.5%;
		text-align: left;
		color: #1c1c1c  ;
		border-radius: .5rem;
		font-weight: 200;
		postion: center;
                padding: 20px;
	}
	button[type="submit"]{
		width: 320px;
		border: #555;
        background-image: linear-gradient(to right, #4e4b40 , #1c1c1c);		
		border-radius: 2.5%;
		text-align: center;
		color: #f2ce71  ;
		border-radius: .5rem;
		font-weight: 150px;
		font-size: 18px;
		padding: 15px;
		margin-left: 425px;
	}
        label{
		color: #4e4b40 ;
		padding: : 30px;
		margin: 120px;
	}
	
	p{
		color: #4e4b40 ;
		padding: 0px;
		postion: center;
	}
	
	b{
		color: #4e4b40 ;
		padding: 0px;
		margin-left: 25px;
    }	
</style>	
</head>
<body>
	<div class-"container">
	<div class="row">
	<div class="col-md-10 offset=md-1">
	<div class="row">
	<div class="header">
	<div class="col-md-7 register-right">	
	<form class="registration">
	<form action="registration.php" method="post">
		
			<?php if(count($errors) > 0 ) : ?>
	<div>
		<?php foreach ($errors as $error) :?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>	
	</div>
<?php endif?>
		
		<div>
				<label for="username"> Username : </label>
				<input type="text" name="username" required>
		<div>
				<label for="email"> Email : </label>
				<input type="email" name="email" required>
		<div>
				<label for="password"> Password : </label>
				<input type="password" name="password_1" required>
		<div>
				<label for="password"> Confirm Password : </label>
				<input type="password" name="password_2" required>
		</div>		
			<button type="submit" name="reg_user"> Register </button>
			
		</form>
	</form>		
	</div>
	</div>
	</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
