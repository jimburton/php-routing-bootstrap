<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <header>
        <?php include 'header.php'; ?>    
    </header>  

<div class="container-fluid pb-3 flex-grow-1 d-flex flex-column flex-sm-row overflow-auto">
    <div class="row flex-grow-sm-1 flex-grow-0">
        
        <aside class="col-sm-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
            <?php include 'sidebar.php' ?>
        </aside>

        <main class="col overflow-auto h-100">
            <div class="bg-light border rounded-3 p-3">
                <?php
                // Pull in the specific page content
                include $contentFile;
                ?>
 
            </div>
        </main>
    </div>
</div>

<footer>
    <p>&copy; 2025</p>
</footer>


  </body>
</html>