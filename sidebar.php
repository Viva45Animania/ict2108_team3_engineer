<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-3.jpg" style="max-width: 260px">
    <div class="logo">
        <a href="index.php" class="simple-text" style="max-width: 230px; left: 20px">
            <img src="images/generic logo.png" style="max-width: 190px">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'user.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="user.php">
                    <i class="material-icons">person_pin</i>
                    <p>Profile</p>
                </a>
            </li>
            
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="index.php">
                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                    <p>Jobs</p>
                </a>
            </li>
            
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'jobCompleted.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="jobCompleted.php">
                    <i class="material-icons">done_all</i>
                    <p>View Completed Jobs</p>
                </a>
            </li>
            
            <li>
                <a>
                    <i class="material-icons" aria-hidden="true">power_settings_new</i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>