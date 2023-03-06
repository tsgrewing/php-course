<?php

if (isset($_GET["name"])){
    $nameVar = $_GET["name"];
}
else {
    $nameVar="Guest";
}
$var3 = 
"<html>
    <head></head>
    <body>
        <h1>
        Hello $nameVar, welcome to the site!
        </h1>
        <form action='http://localhost/sqlphp/form.php' method='GET'>
            <label for='name'>Enter your name:</label><br>
            <input type='text' id='name' name='name'></input><br>
            <input type='submit' value='submit'>
        </form>
    </body>
</html>";

echo $var3;
?>