<?php
// connect to the database
// check for a user being logged in
// process the registration form data
session_start();
include ("./includes/dhb.inc.php");
include ("./includes/functions.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Moje stránka</title>
</head>

<body>
<h1>Editace uživatele</h1>
<a href="./index.php">Domů</a> |
<a href="./logout.php">Odhlásit se</a> |
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
<br>
<div id="box">
    <form action="code.php" method="POST">
        <div style="font-size: 20px;margin: 10px;color: white;">Editace dat</div>
        Upravit Email:
        <input id="text" type="email" name="user_email" value="" placeholder="zadejte nový email" autocomplete="off" required ><br><br>
        <button type="submit" name="update_user_email">Potvrď email</button>
    </form>
    <form action="code.php" method="POST">
        Upravit Jméno:
        <input id="text" type="text" name="user_name" value="" placeholder="upravte jméno" autocomplete="off" required><br><br>
        <button type="submit" name="update_user_name">Potvrď jméno</button>
    </form>
    <form action="code.php" method="POST">
        Upravit Příjmení:
        <input id="text" type="text" name="user_surname" value="" placeholder="upravte příjmení" autocomplete="off" required><br><br>
        <button type="submit" name="update_user_surname">Potvrď příjmení</button>
    </form>
    <form action="code.php" method="POST">
        Změnit heslo:
        <input id="text" type="password" name="password" value="" placeholder="nové heslo" autocomplete="off" required><br><br>

        Zadejte heslo pro kontrolu:
        <input id="text" type="password" name="confirm_password" value="" placeholder="nové heslo" autocomplete="off" required><br><br>
        <button type="submit" name="update_password">Potvrď změnu hesla</button>
    </form>

</div>



</body>
</html>