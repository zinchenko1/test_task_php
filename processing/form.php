<?php
  $name = trim($_POST['name']);
  $phone = trim($_POST['phone']);
  $email = trim($_POST['email']);
  $comment = trim($_POST['comment']);

  $error = '';
  if(mb_strlen($name) < 2 || mb_strlen($name) > 64)
    $error = 'Incorrect name'; 
  else if(!preg_match("/^[a-zA-Z ]*$/",$name))
    $error = 'Incorrect name';
  else if(strlen($phone) <= 10)
    $error = 'Incorrect phone';
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    $error = 'Incorrect email'; 
  else if(strip_tags($comment))
    $error = 'Comment should not have tags and be more than 1024 characters'; 
  else if(mb_strlen($comment) < 0 || mb_strlen($comment) > 1024)
    $error = 'Comment should not have tags and be more than 1024 characters'; 
    
  if($error !='') {
    echo $error;
    exit();
  }
  
  echo 'Done';

?>