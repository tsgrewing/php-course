<?php

if (isset($_POST["name"])){
    $nameVar = $_POST["name"];
}
else {
    $nameVar='Guest';
}

if (isset($_POST["lessons"])){
    $lessonChoice = $_POST["lessons"];
}
else {
    $lessonChoice=null;
}

// $arrVar = array(
//     array('Volvo', 22, 18),
//     array('BMW', 15, 13),
//     array('Saab', 5, 2),
//     array('Land Rover', 17, 15)    
// );

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
            <b>What technologies do you want to learn?</b><br>
                <select name='lessons[]' size='4' multiple>
                    <option value='My SQL'>My SQL</option>
                    <option value='JavaScript'>JavaScript</option>
                    <option value='PHP'>PHP</option>
                    <option value='Python'>Python</option>
                </select>
            <input type='submit' value='submit'>
        </form>
    </body>
</html>";

echo $var3;

if($lessonChoice){
    echo "It looks like you want to learn the following: <br>";

    foreach($lessonChoice as $i) {
        echo $i;
        echo '<br>';
    }
};

?>