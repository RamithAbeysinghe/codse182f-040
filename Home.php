<?php
if
	(time() - $_SESSION['logtime'] > 10000) 
{ 
    echo"<script>alert('You're Automatically timed-out');</script>";
    unset($_SESSION['username'], $_SESSION['logtime']);
    header('Location:Login.php');
    exit;
} 
else 	
{
    $_SESSION['logtime'] = time();
}