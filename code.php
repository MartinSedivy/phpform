
<?php
// Zde si již nevím rady díky nedostatku času, jak získat WHERE id='$id', z přihlášeného uživatele //
//a celá tato stránka zatím na editaci údajů zatím není hotová//
session_start();
    include ("./includes/dhb.inc.php");
    include ("./includes/functions.php");

$user_data = check_login($con);

if(isset($_POST['update_user_email']))
{
    $user_email = $_POST['user_email'];


    $query = "UPDATE Registration SET user_email='$user_email', WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    /*if($query_run)
    {
        $_SESSION['status'] = "Email uložen uspěšně";
        header("Location: index.php");
    }
    else{
       $_SESSION['status'] = "Došlo k chybě při změně emailu";
       header("Location: index.php");
    !-->*/
}
if(isset($_POST['update_user_name']))
{
    $user_name = $_POST['user_name'];


    $query = "UPDATE Registration SET user_name='$user_name', WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    /*if($query_run)
    {
        $_SESSION['status'] = "Jméno změněno uspěšně";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Došlo k chybě při změně jména";
        header("Location: index.php");
    }*/
}
if(isset($_POST['update_user_surname']))
{
    $user_surname = $_POST['user_surname'];


    $query = "UPDATE Registration SET user_surname='$user_surname', WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    /*if($query_run)
    {
        $_SESSION['status'] = "Jméno změněno uspěšně";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Došlo k chybě při změně jména";
        header("Location: index.php");
    }*/
}
if(isset($_POST['update_password']) While ($_POST['password']) === ($_POST['confirm_password']))
{
    $password = $_POST['password'];


    $query = "UPDATE Registration SET password='$password', WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    /*if($query_run)
    {
        $_SESSION['status'] = "Jméno změněno uspěšně";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Došlo k chybě při změně jména";
        header("Location: index.php");
    }*/
}
else;
    echo "Zadali jste nesprávné heslo";
    header("Location: index.php");
?>