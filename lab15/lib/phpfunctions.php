
<?php
function validate_or_bounce()
{
    if (!isset($_SESSION['username']))
    header("Location: lab_15.php");

}

function showPost($key) 
{
    if ( isset($_POST[$key]) )
    echo htmlspecialchars($_POST[$key]);
}

function getPost($key) 
{
    if ( isset($_POST[$key]) )
    return htmlspecialchars($_POST[$key]);
    return "";
}

function validate_login($username, $password)
{
    if ($username=="hello" && $password=="world")
    return true;
    return false;
}


?>

