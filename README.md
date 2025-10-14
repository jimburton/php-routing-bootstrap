# Basic routing setup for PHP

You will have three main types of files:

1.	**Controller** (see [app/index.php](app/index.php)): 
    This is the entry point for the application. Every request comes to this script, whose job is to determine which content file to load based on the URL and sets any necessary variables. It then loads the base template.

2.	**Base Template** (see [app/base.php](app/base.php)): 

    This file will contain the common HTML structure, including the <!DOCTYPE>, <head> and links to the CSS and JS files needed by Bootstrap. It will include the [header](app/header.php) and [sidebar](app/sidebar.php) php files and has a specific point where the page-specific content will go.

3.	**Page-Specific Content** (e.g. [app/home.php](app/home.php)): 

    These files contain only the HTML and PHP for the content relevant to a specific request. They don't include the surrounding <html>, <head>, or <body> tags. The page to be included is determined by the Controller.


