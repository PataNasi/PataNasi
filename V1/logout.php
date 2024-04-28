<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session data

// Redirect to the login page
header("Location: index.php");
exit(); // Terminate script execution
?>