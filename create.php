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
                    <a class="navbar-brand" href="create.php"><i class="fa fa-plus" aria-hidden="true"></i> Create New Job </a>
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
                                                <textarea type="text" name="jobId" class="form-control" rows="6">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Urgency</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Urgent</option>
                                                    <option>Average</option>
                                                    <option>Normal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Fault Type</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Type 1</option>
                                                    <option>Type 2</option>
                                                    <option>Type 3</option>
                                                    <option>Type 4</option>
                                                    <option>Type 5</option>
                                                    <option>Type 6</option>
                                                    <option>Type 7</option>
                                                    <option>Type 8</option>
                                                    <option>Type 9</option>
                                                    <option>Type 10</option>
                                                </select>
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
                                <h4 class="title">Client</h4>
                            </div>
                            <div class="card-content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Company</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Clarabella Tinkerbell Pte. Ltd</option>
                                                    <option>Prettyprinter Pte. Ltd</option>
                                                    <option>Singapore Institute of Technology</option>
                                                    <option>Popular Pte. Ltd</option>
                                                    <option>National Economic Corporation</option>
                                                    <option>Government Investment Corporation</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Client ID</label>
                                                <input type="text" name="username" class="form-control" value="CI-1234567" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">First Name</label>
                                                <input type="text" name="firstName" class="form-control" value="Monte" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-2">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" name="lastName" class="form-control" value="Luke" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Contact Number</label>
                                                <input type="number" name="contact" class="form-control" value="95769264" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-2">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email</label>
                                                <input type="text" name="email" class="form-control" value="monteluke@company.com" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a data-toggle="modal" data-target="#exampleModalCenter" class="btn button btn-round">Create</a>
                        <a class="btn button btn-round btn-white">Clear</a>
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
                                    You have successfully created a new job!
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