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
<h1>Tohle je hlavní stránka.</h1>
<a href="./index.php">Domů</a> |
<a href="./login.php">Login</a> |
<a href="./edit_user_data.php"> Editace údajů uživatele </a>  |
<a href="./logout.php">Odhlásit se</a> |

<hr />

<br>
Ahoj, <?php echo $user_data['user_name']; ?>





</body>
</html>