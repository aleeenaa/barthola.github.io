<?php

$title = "An's Portfolio";
$dirPath = explode("/", $_SERVER['PHP_SELF']);
$page = strtolower($dirPath[count($dirPath)-2]);
$section = isset($dirPath[count($dirPath)-3]) == TRUE ? strtolower($dirPath[count($dirPath)-3]) : 'Home';
$admin = false;

switch ($page) {
    case $title :
    case "Home" :
        $admin = false;
        $title .= " - Home";
        break;
    case "Profile" :
        $admin = false;
        $title .= " - Profile";
        break;
    case "Curriculum Vitae" :
        $admin = false;
        $title .= " - CV";
        break;
    case "Specialty and Scope" :
        $admin = false;
        $title .= " - Specialty and Scope";
        break;
    case "Sitemap" :
        $admin = false;
        $title .= " - Sitemap";
        break;
    case "Admin" :
        $admin = false;
        $title .= " - Admin";
        break;
    default :
        break;
}

if(isset($page)) { ?>

    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="description" content="Aleena Naeem's Portfolio">
        <meta name="author" content="Aleena Naeem">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0">
        <link rel="icon" type="image/ico" href="/Portfolio/favicon.ico"/>
        <link rel="apple-touch-icon" href="/Portfolio/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="/Portfolio/css/stylesheet.css"/>

        <title><?php echo $title ?></title>
    </head>

    <body>
    <header class="banner">
        <h1>Hello all &amp; Welcome!</h1>
        <h2>I'm Aleena and this my portfolio.</h2>
    </header>


    <?php

    include(INCL_ROOT . "navBar.php");
}
