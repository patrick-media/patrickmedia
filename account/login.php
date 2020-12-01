<?php
setcookie("firststart", "1", "/account/index.html");
?>
<html>
    <body>
        <style>
            body {
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            }
        </style>
        <?php
        echo "Welcome, ", $_GET["firstname"], "!<br>";
        echo "<p>We have contacted you at ", $_GET["email"], ". Please confirm your email address to recieve full site-wide functionality.</p><br>";
        ?>
    </body>
</html>