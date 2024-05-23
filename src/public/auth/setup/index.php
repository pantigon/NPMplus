<?php
require_once __DIR__ . "/../../../functions/database.php";
$db = db();
if ($db->querySingle("SELECT COUNT(*) FROM auth") !== 0 || array_key_exists("AUTH", $_SESSION) && $_SESSION["AUTH"] === true && array_key_exists("LOGIN_TIME", $_SESSION) && (time() - $_SESSION["LOGIN_TIME"] < 3600)) {
    header("Location: /", true, 307);
    exit;
} else { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NPMplus - Setup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="application-name" content="NPMplus">
    <meta name="author" content="ZoeyVid">
    <meta name="description" content="Login Page for NPMplus">
    <meta name="keywords" content="NPMplus, Setup">
    <link rel="icon" type="image/webp" href="/favicon.webp">
    <!--<script src="https://js.hcaptcha.com/1/api.js?hl=en&render=onload&recaptchacompat=off" async defer></script>-->
</head>
<?php }
