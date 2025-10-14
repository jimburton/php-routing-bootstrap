# Basic routing setup for PHP

You will have three main types of files:

1.	Base Template/Layout File (see [app/base.php](app/base.php)): 

    This file will contain the common HTML structure, including the <!DOCTYPE>, <head>, banner/header, footer, the Bootstrap layout and a specific spot where the page-specific content will go.

2.	Page-Specific Content Files (e.g. [app/home.php](app/home.php)): 

    These files contain only the HTML and PHP for the main content area. They don't include the surrounding <html>, <head>, or <body> tags.

3.	Controller/Routing File (see [app/index.php](app/index.php)): 
    This file determines which content file to load based on the URL and sets any necessary variables.
