<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$pages = find_pages_by_id($id);

?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<h1>Subject: <?php echo h($pages['menu_name']); ?></h1>

<div class="attributes">
  <dl>
    <dt>Menu Name</dt>
    <dd><?php echo h($pages['menu_name']); ?></dd>
  </dl>
  <dl>
    <dt>Position</dt>
    <dd><?php echo h($pages['position']); ?></dd>
  </dl>
  <dl>
    <dt>Visible</dt>
    <dd><?php echo $pages['visible'] == '1' ? 'true' : 'false'; ?></dd>
  </dl>
  <dl>
    <dt>Content</dt>
    <dd><?php if ($pages['content'] == null ) {
      echo 'Default content';
    } else {
      echo $pages['content'];
    }; ?></dd>
  </dl>
</div>
<br><br>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
