<?php 
if(!isset($_SESSION)) { session_start();} 
/* My First Personal Membership System by Guweh */ 

/* Require registration.php to call registration class */
require_once("classes/UserClass.php");

/* Call for registration class */
$registration = new UserClass();

include("views/registrationForm.php");