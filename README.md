# Basic routing setup for PHP

You will have three main types of files:

1.	Base Template/Layout File ([app/base.php]): 

    This file will contain the common HTML structure, including the <!DOCTYPE>, <head>, banner/header, footer, the Bootstrap layout and a specific spot where the page-specific content will go.
    ```php
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle; ?></title>
    </head>
<body>

    <header>
        <h1>My Awesome Website</h1>
        <?php include 'navbar.php'; ?>
    </header>

    <nav>
        </nav>

    <main>
        <?php
        // This is the key line: it pulls in the specific page content
        include $contentFile;
        ?>
    </main>

    <footer>
        <p>&copy; 2025</p>
    </footer>
</body>
</html>
```

2.	Page-Specific Content Files (e.g., home.php, about.php): 

    These files contain only the HTML and PHP for the main content area. They don't include the surrounding <html>, <head>, or <body> tags.
```html
<h2>Welcome Home!</h2>
<p>This is the dynamic content for the homepage.</p>
<?php if (isset($user)): ?>
    <p>Hello, <?php echo htmlspecialchars($user); ?>!</p>
<?php endif; ?>
```
3.	Controller/Routing File (index.php): 
    This file determines which content file to     load based on the URL and sets any necessary variables.
```php
<?php
// Basic routing logic (often based on a URL parameter)
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
```
