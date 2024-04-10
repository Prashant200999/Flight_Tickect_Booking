<?php
// Authentication and Authorization

error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'dbhelper.php';

header("Location:http://localhost/Flight_Booking/index.php");



$referer = $_SERVER['HTTP_REFERER'];
$credentials = $_POST;
if(str_contains($referer, 'index.php'))
{
    $userDetail = authenticate('userTable', $credentials);
    if(!empty($userDetail)) {
        //Login
        session_start();
        $_SESSION['user_details'] = $userDetail;
        header("Location:http://localhost/Flight_Booking/seat.php");
    }
} else{

}
