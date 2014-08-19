<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div id="layout">
            <div id="header">
                <?php include("templates/header.php"); ?>
            </div>
            <div id="container">
                <div id="main">
                    <?php include("templates/home.php"); ?>
                </div>
                <div id ="rightSide">
                    <?php include("templates/right.php"); ?>
                </div>
            </div>
            <br clear="all">
            <div id="footer">
                <?php include("templates/footer.php"); ?>
            </div>
        </div>
    </body>
</html>
