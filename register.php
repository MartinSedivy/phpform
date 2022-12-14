<?php
session_start();

    include ("./includes/dhb.inc.php");
    include ("./includes/functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //chybí správná validace údajů
        $user_email = $_POST['user_email'];
        $user_name = $_POST['user_name'];
        $user_surname = $_POST['user_surname'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];


        if(!empty($user_name) && !empty($user_surname) && !empty($password) && !empty($user_email))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into Registration (user_id,user_email,user_name,user_surname,password) values ('$user_id','$user_email','$user_name','$user_surname','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "Zadejte platné údaje.";
        }
    }
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Moje stránka</title>
</head>
<body>
<h1>Registrační stránka</h1>
<a href="./index.php">Domů</a> |
<a href="./register.php">Registrace</a> |
<a href="./login.php">Login</a>
<hr />

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

<div id="box">

    <form method="post">
        <div style="font-size: 20px;margin: 10px;color: white;">Registrace</div>

        <input id="text" type="email" name="user_email" value="" placeholder="Zadejte email" autocomplete="off" required><br><br>
        <input id="text" type="text" name="user_name" value="" placeholder="Zadejte jméno" autocomplete="off" required><br><br>
        <input id="text" type="text" name="user_surname" value="" placeholder="Zadejte příjmení" autocomplete="off" required><br><br>
        <input id="text" type="password" name="password" value="" placeholder="Zadejte heslo" autocomplete="off" required><br><br>
        <input id="text" type="password" name="confirm_password" value="" placeholder="Potvrďte heslo" autocomplete="off" required />
        <input id="button" type="submit" value="Registrovat"><br><br>

        <a href="login.php">Přejít na přihlášení</a><br><br>
    </form>
</div>
</body>
</html>
