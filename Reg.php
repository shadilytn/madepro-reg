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
