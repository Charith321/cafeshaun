<?php
session_start();
require_once("oop.php");

$un = $_POST["un"];
$pw = $_POST["ps"];

// Check for empty fields first
if ($un == "" && $pw == "") {
    echo "Invalid Entry";
    exit;
}
else if ($un == "") {
    echo "Invalid Username";
    exit;
}
else if ($pw == "") {
    echo "Invalid Password";
    exit;
}

$db = new DB();
$rec = $db->validateLogin($un, $pw);

if (!$rec) {
    echo "Wrong credentials";
} else {
    $_SESSION["una"] = $rec['una'];
    $_SESSION["log_id"] = $rec['log_id'];

    if ($rec["type"] == "admin") {
        header('Location: admin.php');
    } else {
        header('Location: user.php');
    }
    exit;
}
?>
