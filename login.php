<?php 
if(!isset($_SESSION)) { session_start();} 
/* My First Personal Membership System by Guweh */

/* Require login.php to call login function */
require("classes/UserClass.php");

/* Call for login function */
$login = new UserClass();

if($login->isLoggedIn() == true){
  header('Location: index.php');    // If user is already logged in redirect back to index.php
} else {
  include("views/loginForm.php");   // Else prompt login form
}