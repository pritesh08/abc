<?php
session_start();
unset($_SESSION['name']);
session_destroy();

 header("Refresh:0; url=zrt.html");
exit;
?>