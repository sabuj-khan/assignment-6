<?php
session_start();

$filePath = "";


if ( isset( $_POST['submit'] ) ) {
    $error = array();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $propic = $_FILES['propic'];

	if( $name == NULL ){
		$error['name'] = 'The Name is required';
	}
	if( $email == NULL ){
		$error['email'] = 'The Email Address is required';
	}
	if( $password == NULL ){
		$error['password'] = 'The Password is required';
	}elseif( strlen($password) < 6 ){
		$error['password'] = 'Password must be more than 6 charecters long';
	}
	if( $propic == NULL ){
		$error['propic'] = 'The Profile Picture is required';
	}

	if(count($error) == 0){
		$_SESSION['loggedid'] = true;
		setcookie('username', $name);

		$fileNmae = uniqid().",".date("Y-m-d H:i:s").",".$propic['name'];
		$picfile = "http://localhost/assignment-6/uploads/";
		move_uploaded_file($tmp_name, $picfile.$propic['name']);

		





		//$success = "You have been registered";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAssignment - 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
		<div class="row" style="margin-bottom: 55px;">
			<div class="heading">
				<h2>Project - Assignment Six</h2>
					<p>Hello Users, Please Login Below</p>
			</div>
		</div>
		<div class="row">
			<div class="area-form">
				<form action="" method="POST" enctype="multipart/form-data">
					<label for="name">Name</label> <br>
					<input type="text" name="name" id="name"> <br>
					<div class="error">
                        <?php
                            if(isset($error['name'])){ echo "<p>".$error['name']."</p>";}
                        ?>
                    </div>

                    <label for="email">Email Address</label> <br>
					<input type="email" name="email" id="email"> <br>
					<div class="error">
                        <?php
                            if(isset($error['email'])){ echo "<p>".$error['email']."</p>";}
                        ?>
                    </div>

					<label for="password">Password</label> <br>
					<input type="password" name="password" id="password"> <br>
					<div class="error">
                        <?php
                            if(isset($error['password'])){ echo "<p>".$error['password']."</p>";}
                        ?>
                    </div>

                    <label for="propic">Profile Picture</label> <br>
					<input type="file" name="propic" id="propic"> <br>
					<div class="error">
                        <?php
                            if(isset($error['propic'])){ echo "<p>".$error['propic']."</p>";}
                        ?>
                    </div>

					<input type="submit" value="Submit" name="submit">
				</form>
				<div class="success">
                    <?php
                        if(isset($success)){ echo "<p>".$success."</p>";}
                    ?>
                </div>

			</div>
		</div>
	</div>
</body>
</html>