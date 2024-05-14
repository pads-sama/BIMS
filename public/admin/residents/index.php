<?php

require_once('../../../private/initialize.php');

$page_title = "Number of residents";

include_once(SHARED_PATH . '/admin_header.php');
?>

<!--Container-->
<div class="container bg-red-300">
    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0">
        <div class="add-button-container">
            <a href="<?php echo url_for('admin/residents/new_resident.php'); ?>">
                Add Resident
            </a>
        </div>
        <table id="table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">First Name</th>
                    <th data-priority="2">Middle Name</th>
                    <th data-priority="3">Last Name</th>
                    <th data-priority="4">Email</th>
                    <th data-priority="5">Contact Number</th>
                    <th data-priority="1">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>
                        <button class="modal-open view">View</button>
                        <a href="" class="edit">Edit</a>
                        <a href="" class="delete">Delete</a>
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
