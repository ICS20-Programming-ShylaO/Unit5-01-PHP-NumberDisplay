<?php

 // initializing user min, max, and list, response as empty strings
  $userMin = $_POST['min'];
  $userMax = $_POST['max'];
  $list = "";

 // response for when user does not enter a min and/or a max
if ((empty($userMin)) || (empty($userMax))) {
      echo "Please enter a minimum and/or a maximum.";
}
  
 // response for when min is greater than the max
elseif ($userMin > $userMax) {
      echo "ERROR: You entered a minimum value that is greater than your maximum value. Try a smaller minimum.";
}
  
 // response for when user enters a valid min and max
else {
  // starting the while loop to display a list from min to max
  while ($userMin <= $userMax) {
    // build the list by adding the "list" and min with a line break each time
    $list = $list . $userMin . "<br>";
    // increment the min by one for each execution of the loop
    $userMin++;
  }

  echo $list;
}
