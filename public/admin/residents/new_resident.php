<?php

require_once('../../../private/initialize.php');

$page_title = "Number of residents";

include_once(SHARED_PATH . '/admin_header.php');
?>

<div class="container p-9">
    <form>
        <?php include('resident_fields.php') ?>
        <div class="gap-2 mt-8 flex flex-col jusitify-center items-center md:flex-row">
            <input type="submit" />
            <!-- Secondary -->
            <a href="<?php echo url_for('/admin/residents/index.php'); ?>" class="cancel-button">Cancel</a>
        </div>
    </form>
</div>

<?php
include_once(SHARED_PATH . '/admin_footer.php');
