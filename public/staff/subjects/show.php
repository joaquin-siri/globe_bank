<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; //PHP > 7.0

echo h($id);
// echo h($id);

 ?>

<br>
 <a href="show.php?name=<?= u('John Doe');?>">Link 1</a><br>
 <a href="show.php?name=<?= u('Widget&More');?>">Link 2</a><br>
 <a href="show.php?name=<?= raw_u('!#*?');?>">Link 3</a>
