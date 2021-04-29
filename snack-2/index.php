<?php
  $name = $_GET['name'];
  $email = $_GET['email'];
  $age = $_GET['age'];

  $validate_email = filter_var($email, FILTER_VALIDATE_EMAIL);
  $validate_age = filter_var($age, FILTER_VALIDATE_INT);

  $dot = strpos($email, '.');
  $at = strpos($email, '@');

  if (strlen($name) > 3 && $validate_email && $dot && $at && $validate_age) {
    ?><p> <?php echo $name.'<br>'.$email.'<br>'.$age ?> </p>
      Accesso riuscito<?php

  } else {
    var_dump("Accesso Negato!");
  }
?>
