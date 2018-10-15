<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$page = find_pages_by_id($id);

?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<h1>Page: <?php echo h($page['menu_name']); ?></h1>

<div class="attributes">
  <?php $subject = find_subject_by_id($page['subject_id']) ?>
  <dl>
    <dt>Subject</dt>
    <dd><?php echo h($subject['menu_name']); ?></dd>
  </dl>

  <dl>
    <dt>Menu Name</dt>
    <dd><?php echo h($page['menu_name']); ?></dd>
  </dl>
  <dl>
    <dt>Position</dt>
    <dd><?php echo h($page['position']); ?></dd>
  </dl>
  <dl>
    <dt>Visible</dt>
    <dd><?php echo $page['visible'] == '1' ? 'true' : 'false'; ?></dd>
  </dl>
  <dl>
    <dt>Content</dt>
    <dd><?php if ($page['content'] == null ) {
      echo 'Default content';
    } else {
      echo $page['content'];
    }; ?></dd>
  </dl>
</div>
<br><br>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
