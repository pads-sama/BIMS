<?php
if (!isset($page_title))
    $page_title = "Dashboard"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./public/assets/images/logo/favicon.png" type="image/gif" sizes="16x16">
    <title>Admin - <?php echo $page_title ?></title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo url_for('/lib/fontawesome/css/all.min.css') ?>">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo url_for('/assets/css/index.css') ?>">
    <link rel="stylesheet" href="<?php echo url_for('/assets/css/auth.css') ?>">
    <link rel="stylesheet" href="<?php echo url_for('/assets/css/residents.css') ?>">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".hamburger").click(function() {
                $(".container").toggleClass("active")
            })
        });
    </script>
</head>

<body class="h-screen">
    <div class="grid-container">
        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class=""><?php echo $page_title ?></span>
            </div>
            <div class="header-right" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                <span class="material-icons-outlined">sampleemail@gmail.com</span>
                <span class="user-avatar">
                    <img src="<?php echo url_for('/assets/images/avatar/man-1.png') ?>" alt="">
                </span>
            </div>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-blue-50 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-sky-100">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-sky-100">Logout</a>
                    </li>
                </ul>
            </div>

        </header>
        <!-- End Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-header">
                    Admin
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <menu class="sidebar-list">
                <li class="sidebar-list-item active">
                    <a href="<?php echo url_for('/admin/index.php'); ?>">
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="<?php echo url_for('/admin/document_requests/index.php'); ?>">
                        Request Document
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="<?php echo url_for('/admin/residents/index.php'); ?>">
                        Residents
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="<?php echo url_for('/admin/blotters/index.php'); ?>">
                        Blotter
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="<?php echo url_for('/admin/officials/index.php'); ?>">
                        Barangay Officials
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="<?php echo url_for('/admin/profile/index.php') ?>">
                        Settings
                    </a>
                </li>
            </menu>
        </aside>
        <!-- End Sidebar -->
        <!-- main page -->
        <main>