<?php

if (isset($_POST["name"])){
    $nameVar = $_POST["name"];
}
else {
    $nameVar='Guest';
}

$arrVar = array(
    array('Volvo', 22, 18),
    array('BMW', 15, 13),
    array('Saab', 5, 2),
    array('Land Rover', 17, 15)    
);

$var3 = 
"<html>
    <head></head>
    <body>
        <h1>
        Hello $nameVar, welcome to  the site!
        </h1>
        <form action='http://localhost/sqlphp/form.php' method='POST'>
            <label for='name'>Enter your name:</label><br>
            <input type='text' id='name' name='name'></input><br>
            <input type='submit' value='submit'>
        </form>
    </body>
</html>";

echo $var3;

foreach($arrVar as $i) {
    foreach($i as $val) {
        echo $val . " ";
    }
    echo '<br>';
};

?>