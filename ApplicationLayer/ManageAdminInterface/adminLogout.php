
<?php

//logout.php
session_start(); 
session_unset();
session_destroy(); 
header('location: /Dingo_Food/ApplicationLayer/ManageAdminInterface/adminLogin.php');
exit();
?>
