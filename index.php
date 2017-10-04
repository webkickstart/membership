<?php
session_start();
    include './models/data.php';
    include './models/class.accounts.php';
?>
<!--
This is the main controller page for the website. 
All functionality comes from views folder
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        <title>Webkickstart Login System</title>
        <!-- TO CHANGE JAVASCRIPT use - views/main.js -->
        <script type="text/javascript" src="main.js"></script>    
    </head>
    <body>
        <div id="container">
        <a href="http://www.webkickstart.com/projects">Back To Projects Home</a>
       <?php if($_SESSION['access_level']==2) {
              include 'views/index.admin.php'; 
        } else {

        if(!isset($_SESSION['user_id'])) { 
        include 'views/index.unlogged.php'; 
        } else {
          include 'views/index.logged.php';
        } 
       }

        ?>
       </div>
    </body>
</html>
