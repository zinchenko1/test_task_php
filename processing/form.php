<?php
  $name = trim($_POST['name']);
  $phone = trim($_POST['phone']);
  $email = trim($_POST['email']);
  $comment = trim($_POST['comment']);

  $error = '';
  $name1 = !preg_match("/^[a-zA-Z ]*$/",$name);
  $comment1 = strip_tags($comment);
  if(mb_strlen($name) < 2 || mb_strlen($name) > 64)
    $error = 'Incorrect name'; 
  else if($name1)
    $error = 'Incorrect name';
  else if(strlen($phone) <= 10)
    $error = 'Incorrect phone'; 
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    $error = 'Incorrect email'; 
  else if(mb_strlen($comment1) < 0 || mb_strlen(strip_tags($comment1)) > 1024)
    $error = 'Comment should not have tags and be more than 1024 characters'; 


    
  if($error !='') {
    echo $error;
    exit();
  }
  
  echo 'Done';

?>