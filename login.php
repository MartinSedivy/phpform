<?php
session_start();

	include ("./includes/dhb.inc.php");
    include ("./includes/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_email = $_POST['user_email'];
		$password = $_POST['password'];

		if(!empty($user_email) && !empty($password) && !is_numeric($user_email))
		{

			//read from database
			$query = "select * from Registration where user_email = '$user_email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "Zadali jste špatné heslo nebo email!";
		}else
		{
			echo "Zadali jste špatné heslo nebo email!";
		}
	}

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Moje stránka</title>
</head>

<body>
    <style type="text/css">

    #text{

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box{

        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }

    </style>
<h1>Vítejte na přihlašovací stránce</h1>
<a href="./index.php">Domů</a> |
<a href="./register.php">Regisrace</a> |
<a href="./login.php">Login</a>  |
<a href="./logout.php">Odhlásit se</a> |
<hr />
    <div id="box">

        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: white;">Login</div>
            Zadejte svůj přihlašovací email:
            <input id="text" type="email" name="user_email"><br><br>
            Zadejte svoje heslo:
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="register.php">Odkaz na registraci</a><br><br>
        </form>
    </div>

<!-- error message code here -->

<!-- registration form html code here -->

</body>
</html>
