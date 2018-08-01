<?php require_once('../../../private/initialize.php')?>

<?php

$pages = [
['id'=>'1', 'name'=>'Twitter', 'url'=>'twitter.com'],
['id'=>'2', 'name'=>'Facebook', 'url'=>'facebook.com'],
['id'=>'3', 'name'=>'Instagram', 'url'=>'instrgram.com'],
];
 ?>

<?php $page_title='Pages';?>

<?php include(SHARED_PATH. '/staff_header.php') ?>

  <div class="content">
      <div class="pages listing">
        <h1>Pages</h1>

          <table class="list">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>URL</th>
              <th>&nbsp;</th>
            </tr>

            <?php
            foreach($pages as $page) { ?>
              <tr>
                <td><?= h($page['id']);?></td>
                <td><?= h($page['name']);?></td>
                <td><?= h($page['url']);?></td>
                <td><a href="<?= url_for('/staff/pages/show.php?id='.$page['id'])?>">Show</a>
                </td>

              </tr>
            <?php } ?>}
          </table>

      </div>

  </div>



<?php include(SHARED_PATH . '/staff_footer.php'); ?>
