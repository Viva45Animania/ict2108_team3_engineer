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
                                                    <a data-toggle="modal" data-target="#pauseModalCenter" class="btn button btn-round">Pause</a>
                                                    <a data-toggle="modal" data-target="#completeModalCenter" class="btn button btn-success btn-round">Completed</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="completeModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Job Completed</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <font size="4">
                                                        You have completed this job
                                                    </font>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">
                                                        <font size="3">
                                                            Time Completed
                                                        </font>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">
                                                        <font size="2">
                                                            PM  2   00
                                                        </font>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-12">
                                            <a class="btn button btn-round" href="rejectJob.php?jobid=#0100">OKAY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="pauseModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Job Paused</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <font size="4">
                                                        You have paused this job
                                                    </font>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">
                                                        <font size="2">
                                                            PM  2   00
                                                        </font>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-12">
                                            <a class="btn button btn-round" href="index.php">OKAY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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