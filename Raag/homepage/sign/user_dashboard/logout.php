<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["alert"]);

header("Location: homepage/sign/sign_in_page.php");
exit();

?>
