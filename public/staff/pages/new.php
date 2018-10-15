<?php

require_once('../../../private/initialize.php');


$id = '';
$menu_name = '';
$position = '';
$visible = '';


if (is_post_request()){
// Handle form values (single page proccesing)

$page = [];
$page['menu_name'] = $_POST['menu_name'] ?? '';
$page['position'] = $_POST['position'] ?? '';
$page['visible'] = $_POST['visible'] ?? '';


$result = insert_page($page);
$new_id = mysqli_insert_id($db); // Returns the auto generated id used in the latest query
redirect_to(url_for('/staff/pages/show.php?id=' . $new_id));

}



 ?>

 <?php $page_title = 'New Page'; ?>
 <?php include(SHARED_PATH . '/staff_header.php'); ?>

 <div id="content">

   <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

   <div class="new page">
     <h1>Create Page</h1>

     <form action="<?= url_for('/staff/pages/new.php');?>" method="post">
       <dl>
         <dt>Menu Name</dt>
         <dd><input type="text" name="menu_name" value="<?= $menu_name; ?>" /></dd>
       </dl>
       <dl>
         <dt>Position</dt>
         <dd>
           <select name="position">
             <option value="1"<?php if ($position =="1"){echo "selected";} ?>>1</option>
           </select>
         </dd>
       </dl>
       <dl>
         <dt>Visible</dt>
         <dd>
           <input type="hidden" name="visible" value="0" />
           <input type="checkbox" name="visible" value="1" <?php if ($visible =="1"){echo "checked";} ?> />
         </dd>
       </dl>
       <div id="operations">
         <input type="submit" value="New Page" />
       </div>
     </form>

   </div>

 </div>

 <?php include(SHARED_PATH . '/staff_footer.php'); ?>
