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
    <!--Replace with your tailwind.css once created-->

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
    <div>
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                    <span class="text-sm">(Esc)</span>
                </div>

                <!-- Add margin if you want to see some of the overlay behind the modal-->
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Simple Modal!</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                    </div>

                    <!--Body-->
                    <p>Modal content can go here</p>
                    <p>...</p>
                    <p>...</p>
                    <p>...</p>
                    <p>...</p>

                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
                        <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class=""><?php echo $page_title ?></span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">email</span>
                <span class="user-avatar">
                    <img src="<?php echo url_for('/assets/images/avatar/man-1.png') ?>" alt="">
                </span>
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