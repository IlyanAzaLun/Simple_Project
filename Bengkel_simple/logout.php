<?php

require_once('connect.php');
unset($_SESSION['username']);
session_destroy();
header("location:{$base_url}");

?>