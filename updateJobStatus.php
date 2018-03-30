<?php 
include('header.php');
?>

<div class="wrapper">
    <?php include('sidebar.php'); ?>

    <div class="main-panel">
        <nav class="navbar navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="jobs.php"><i class="fa fa-folder-open" aria-hidden="true"></i> Jobs </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php include('welcome.php'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">Accepted Jobs</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST">
                                <div class="table-responsive col-md-12 col-sm-12 col-xs-12">
                                    <!--Table-->
                                    <table id="tblJobs" class="table table-bordered table-hover">
                                        <thead>
                                            <tr id="ddlJobs">
                                                <th rowspan="2">Urgency</th>
                                                <th rowspan="2">Location</th>
                                                <th rowspan="2">Job Number</th>
                                                <!--For filter bar-->
                                                <th></th>
                                                <th rowspan="2">Job Start Time</th>
                                                <th rowspan="2">Job Status</th>
                                            </tr>
                                            <tr>
                                                <th>Fault Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="danger">1 - Urgent</td>
                                                <td>Edinburgh</td>
                                                <td><a href="jobDetail.php?jobid=#0100">#0100</a></td>
                                                <td>Type 6</td>
                                                <td>28/03/18 09:00AM</td>
                                                <td>
                                                    <a href="acceptJob.php?jobid=#0100" class="btn button btn-round">Pause</a>
                                                    <a href="assign.php?jobid=#0100" class="btn button btn-success btn-round">Completed</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include('footer.php');
?>