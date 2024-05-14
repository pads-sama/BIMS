<?php

require_once('../../private/initialize.php');

$page_title = "Dashboard";

include_once(SHARED_PATH . '/admin_header.php');
?>

<div class="">
    <div class="card-container">
        <!--  Number of residents -->
        <div class="card">
            <div class="card-header">
                <div class="card-wrapper">
                    <h5 class="card-title">
                        <span class="card-icon">
                            <i class="fas fa-users"></i>
                        </span>
                        Number of residents
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <h4 class="population">2,01,620</h4>

                <!-- <div class="flex items-center">
                    <span class="py-1 px-2 font-semibold bg-success-1 text-sm text-success hover:text-white hover:bg-success rounded-std transition-colors duration-500 inline-flex items-center justify-center mr-2"><i class="fas fa-arrow-up mr-2"></i> 2.31%</span>
                    <p class="text-sm font-semibold">From Last Month</p>
                </div> -->
            </div>
        </div>
        <!-- Total Visitors -->

        <!-- Total Clicks -->
        <div class="card">
            <div class="card-header border-b border-primary-1 pb-4">
                <div class="card-wrapper">
                    <h5 class="card-title">
                        <span class="card-icon">
                            <i class="fas fa-mouse"></i>
                        </span>
                        Request Documents
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <h4 class="population">1,96,325</h4>

                <!-- <div class="flex items-center">
                    <span class="py-1 px-2 font-semibold bg-success-1 text-sm text-success hover:text-white hover:bg-success rounded-std transition-colors duration-500 inline-flex items-center justify-center mr-2"><i class="fas fa-arrow-up mr-2"></i> 5.93%</span>
                    <p class="text-sm font-semibold">From Last Month</p>
                </div> -->
            </div>
        </div>
        <!-- Total Clicks -->

        <!-- Commission -->
        <div class="card">
            <div class="card-header">
                <div class="card-wrapper">
                    <h5 class="card-title">
                        <span class="card-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </span>
                        Blotters
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <h4 class="population">1,20,145</h4>

                <!-- <div class="flex items-center">
                    <span class="py-1 px-2 font-semibold bg-success-1 text-sm text-success hover:text-white hover:bg-success rounded-std transition-colors duration-500 inline-flex items-center justify-center mr-2"><i class="fas fa-arrow-up mr-2"></i> 9.05%</span>
                    <p class="text-sm font-semibold">From Last Month</p>
                </div> -->
            </div>
        </div>
        <!-- Commission -->

        <!-- Bounce Rate -->
        <div class="card">
            <div class="card-header ">
                <div class="card-wrapper">
                    <h5 class="card-title">
                        <span class="card-icon">
                            <i class="fas fa-chart-line"></i>
                        </span>
                        Barangay Officails
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <h4 class="population">2,01,620</h4>
                <!-- 
                <div class="flex items-center">
                    <span class="py-1 px-2 font-semibold bg-danger-1 text-danger text-sm hover:text-white hover:bg-danger rounded-std transition-colors duration-500 inline-flex items-center justify-center mr-2"><i class="fas fa-arrow-down mr-2"></i> 1.03%</span>
                    <p class="text-sm font-semibold">From Last Month</p>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php
include_once(SHARED_PATH . '/admin_footer.php');
