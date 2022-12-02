<?php
session_start();
if($_GET['do'] == 'logout'){
unset($_SESSION['da']);
header('Location: ../bezop_laba6.php');
session_destroy();
exit;
}

