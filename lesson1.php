<?php

$newvar = "This is the first real lesson";
$check = 3;

if ($check==4) {
    echo $newvar;
}
elseif ($check>=5) {
    echo "Check is greater than or equal to 5. <br>";
}
else {
    echo "Check is not 4, 5 or greater than 5. <br>";
}

while ($check<7) {
echo "Check is " . $check . ".<br>";
$check++;
}


?>