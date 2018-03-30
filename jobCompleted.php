<?php include('header.php'); ?>

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
                    <a class="navbar-brand" href="jobCompleted.php"><i class="material-icons">done_all</i> Completed Jobs </a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Completed Jobs</h4>
                                <p class="category">List of Completed Jobs</p>
                            </div>
                            <div class="card-content">
                                <form method="POST">
                                    <div class="table-responsive col-md-12 col-sm-12 col-xs-12">
                                        <table id="tblHistory" class="table table-bordered table-hover" >
                                            <thead>
                                                <tr id="ddlHistory">
                                                    <th rowspan="2">Job Status</th>
                                                    <th rowspan="2">Urgency</th>
                                                    <th rowspan="2">Job No.</th>
                                                    <th rowspan="2">Location</th>
                                                    <th rowspan="2">Traveling Time</th>
                                                    <th></th>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>Fault Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="danger">1 - Urgent</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0051">#0051</a></td>
                                                    <td>Princeton Road</td>
                                                    <td>1 Hours</td>
                                                    <td>Type 5</td>
                                                </tr>

                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="danger">1 - Urgent</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0052">#0052</a></td>
                                                    <td>Clarence Road</td>
                                                    <td>2 Hours</td>
                                                    <td>Type 10</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="danger">1 - Urgent</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0007">#0007</a></td>
                                                    <td>Princeton Road</td>
                                                    <td>2.5 Hours</td>
                                                    <td>Type 3</td>
                                                </tr> 
                                                
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="danger">1 - Urgent</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0002">#0002</a></td>
                                                    <td>Housetone White Road</td>
                                                    <td>0.5 Hours</td>
                                                    <td>Type 2</td>
                                                </tr> 
                                                
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="danger">1 - Urgent</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0081">#0081</a></td>
                                                    <td>Princeton Road</td>
                                                    <td>0.5 Hours</td>
                                                    <td>Type 1</td>
                                                </tr> 

                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="warning">2 - Average</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0053">#0053</a></td>
                                                    <td>Dover Drive</td>
                                                    <td>0.5 Hours</td>
                                                    <td>Type 10</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="warning">2 - Average</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0072">#0072</a></td>
                                                    <td>Houseton White Road</td>
                                                    <td>2 Hours</td>
                                                    <td>Type 10</td>
                                                </tr> 
                                                
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="warning">2 - Average</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0008">#0008</a></td>
                                                    <td>Housetone White Road</td>
                                                    <td>1 Hours</td>
                                                    <td>Type 6</td>
                                                </tr> 

                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="success">3 - Normal</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0054">#0054</a></td>
                                                    <td>Fwahla Tone Road</td>
                                                    <td>2 Hours</td>
                                                    <td>Type 6</td>
                                                </tr>

                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="success">3 - Normal</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0055">#0055</a></td>
                                                    <td>Balestier Road</td>
                                                    <td>1 Hours</td>
                                                    <td>Type 7</td>
                                                </tr> 
                                                
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="success">3 - Normal</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0001">#0001</a></td>
                                                    <td>Princeton Road</td>
                                                    <td>1.5 Hours</td>
                                                    <td>Type 5</td>
                                                </tr> 
                                                
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="success">3 - Normal</td>
                                                    <td><a href="completedJobDetail.php?jobid=#0098">#0098</a></td>
                                                    <td>Gem White Road</td>
                                                    <td>2.5 Hours</td>
                                                    <td>Type 6</td>
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
</div>

<?php include('footer.php'); ?>