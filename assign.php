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
                    <a class="navbar-brand" href="assign.php?jobid=#0100"><i class="fa fa-edit" aria-hidden="true"></i> Assign Job </a>
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
                                <h4 class="title">Job</h4>
                            </div>
                            <div class="card-content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Job ID</label>
                                                <input type="text" name="Job ID" class="form-control" value="#0100" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Job Description</label>
                                                <textarea type="text" name="jobId" class="form-control" rows="6" disabled>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Urgency</label>
                                                <input type="text" name="urgency" class="form-control" value="Urgent" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1"><div class="form-group label-floating">
                                                <label class="control-label">Fault Type</label>
                                                <input type="text" name="urgency" class="form-control" value="Type 6" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Engineer</h4>
                            </div>
                            <div class="card-content">
                                <form method="POST">
                                    <div class="table-responsive col-md-12 col-sm-12 col-xs-12">
                                        <!--Table-->
                                        <table id="tblEngineers" class="table table-bordered table-hover">
                                            <thead>
                                                <tr id="ddlEngineers">
                                                    <!--For filter bar-->
                                                    <th></th>
                                                    <th rowspan="2">Employee ID</th>
                                                    <th rowspan="2">Name</th>
                                                    <th rowspan="2">Assign</th>
                                                </tr>
                                                <tr>
                                                    <th>Availability</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="success">Available</td>
                                                    <td>EN-0000001</td>
                                                    <td>John Doe</td>
                                                    <td><a data-toggle="modal" data-target="#exampleModalCenter" class="btn button btn-round">Assign</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="success">Available</td>
                                                    <td>EN-0123456</td>
                                                    <td>David Jarvis</td>
                                                    <td><a data-toggle="modal" data-target="#exampleModalCenter" class="btn button btn-round">Assign</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="danger">Busy</td>
                                                    <td>EN-1234567</td>
                                                    <td>Samuel James</td>
                                                    <td><a data-toggle="modal" data-target="#exampleModalCenter" class="btn button btn-round">Assign</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="danger">Busy</td>
                                                    <td>EN-3456789</td>
                                                    <td>Joel Jarvis</td>
                                                    <td><a data-toggle="modal" data-target="#exampleModalCenter" class="btn button btn-round">Assign</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="danger">Busy</td>
                                                    <td>EN-6789012</td>
                                                    <td>James Writes</td>
                                                    <td><a data-toggle="modal" data-target="#exampleModalCenter" class="btn button btn-round">Assign</a></td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    You have successfully assign the engineer to this job!
                                </div>
                                <div class="modal-footer">
                                    <div class="col-md-12">
                                        <a class="btn button btn-round"href="index.php">OKAY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">        
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        ICT2108 Team 3.
                    </p>
                </div>
            </footer>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>