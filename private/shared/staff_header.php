<?php
  if(!isset($page_title)){ $page_title = 'Staff Area';}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"
    href=" <?php echo url_for('/styles/staff.css'); ?>">
    <title>GBI -  <?php echo h($page_title); ?></title>
  </head>
  <body>
     <header>
       <h1>GBI Staff Area</h1>
     </header>

     <navigation>
       <ul>
         <li><a href= <?php echo url_for(("/staff/index.php"))?>>Menu</a></li>
       </ul>
     </navigation>
