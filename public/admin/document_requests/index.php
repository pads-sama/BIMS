<?php

require_once('../../../private/initialize.php');

$page_title = "Request Documents";

include_once(SHARED_PATH . '/admin_header.php');
?>

<!--Container-->
<div class="container bg-red-300">
    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0">
        <div class="add-button-container">
            <a href="<?php echo url_for('admin/document_requests/new_request.php') ?>">
                Request Document
            </a>
        </div>
        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">Document type</th>
                    <th data-priority="2">Requested by</th>
                    <th data-priority="3">Request Date</th>
                    <th data-priority="4">Rate</th>
                    <th data-priority="1">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>
                        <button class="modal-open view" data-file="<?php echo url_for('/modals/residents/view_modal.php'); ?>">View</button>
                        <button class="modal-open edit" data-file="<?php echo url_for('/modals/residents/edit_modal.php'); ?>">Edit</button>
                        <button class="modal-open delete" data-file="<?php echo url_for('/modals/residents/delete_modal.php'); ?>">Delete</button>
                    </td>
                </tr>
            </tbody>

        </table>


    </div>
    <!--/Card-->


</div>
<!--/container-->

<?php
include_once(SHARED_PATH . '/admin_footer.php');
