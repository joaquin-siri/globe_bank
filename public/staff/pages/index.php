<?php require_once('../../../private/initialize.php')?>

<?php

$pages_set = find_all_pages();

 ?>

<?php $page_title='Pages';?>

<?php include(SHARED_PATH. '/staff_header.php') ?>

  <div id="content">
      <div class="pages listing">
        <h1>Pages</h1>

        <div class="actions">
          <a class="action" href="<?= url_for('/staff/pages/new.php'); ?>">Create New Page</a>
        </div>

          <table class="list">
            <tr>
              <th>ID</th>
              <th>Subject ID</th>
              <th>Name</th>
              <th>Position</th>
              <th>Visible</th>
              <th>Content</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
            </tr>

            <?php
            while($page = mysqli_fetch_assoc($pages_set)) { ?>
              <?php $subject = find_subject_by_id($page['subject_id']) ?>
              <tr>
                <td><?= h($page['id']);?></td>
                <td><?= h($subject['menu_name']);?></td>
                <td><?= h($page['menu_name']);?></td>
                <td><?= h($page['position']);?></td>
                <td><?= h($page['visible']);?></td>
                <td><?= h($page['content']);?></td>
                <td><a class="action" href="<?= url_for('/staff/pages/show.php?id='.$page['id'])?>">View</a></td>
                <td><a class="action" href="<?= url_for('/staff/pages/edit.php?id='.$page['id'])?>">Edit</a></td>
                <td><a class="action" href="<?= url_for('/staff/pages/delete.php?id=' . h(u($page['id']))); ?>">Delete</a></td>


              </tr>
            <?php } ?>
          </table>

          <?php mysqli_free_result($pages_set); ?>
      </div>

  </div>



<?php include(SHARED_PATH . '/staff_footer.php'); ?>
