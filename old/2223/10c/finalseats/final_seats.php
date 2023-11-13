<html>

<body>


<?php

$lines_id = file("list_id.txt", FILE_IGNORE_NEW_LINES);
$lines_seats = file("list_seats.txt", FILE_IGNORE_NEW_LINES);

$round = count($lines_id);  

  if ($_POST["id"] == '') {
  echo "Please, enter your student ID"
  ;} else {
if (in_array($_POST["id"], $lines_id)) {
for($n = 0; $n < $round; $n++){ 
    if ($_POST["id"] == $lines_id[$n]) {
    echo "Your seat number is:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ", "<font size=18>$lines_seats[$n]</font>";
    }
    ; 
}
   ;
} else {
   echo "Your Student ID is not in the list for this exam. If you were only recently added to the class list, your seat will be assigned directly in the room before the start of the exam." ;
}

  ;}
  


?>

</body>

<html>
