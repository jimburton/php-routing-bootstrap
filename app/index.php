<?php
// Basic routing logic  based on a URL parameter
$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    $pageTitle = 'Home Page';
    $contentFile = 'home.php';
    $user = 'Guest'; // Example dynamic data
} elseif ($page === 'about') {
    $pageTitle = 'About Us';
    $contentFile = 'about.php';
} else {
    // Handle 404
    $pageTitle = 'Not Found';
    $contentFile = '404.php';
}

// Load the base template which will in turn include $contentFile
include 'layout.php';
?>
