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
                    <a class="navbar-brand" href="acceptJob.php?jobid=#0100"><i class="fa fa-edit" aria-hidden="true"></i> Accept Job </a>
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
                                                <label class="control-label"><font size="4">Job Details</font></label>
                                            </div>
                                        </div>
                                    </div>
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
                                    
                                    <br>
                                    
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><font size="4">Employee Details</font></label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Employee ID</label>
                                                <input type="text" name="Employee ID" class="form-control" value="EN-0000001" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name</label>
                                                <input type="text" name="Name" class="form-control" value="John Doe" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Job Status</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Available</option>
                                                    <option>Ongoing</option>
                                                    <option>Paused</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-2 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Start Time</label>
                                                <select class="form-control" id="sel1">
                                                    <option>PM</option>
                                                    <option>AM</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group label-floating">
                                                <select class="form-control" id="sel1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group label-floating">
                                                <select class="form-control" id="sel1">
                                                    <option>00</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                    <option>32</option>
                                                    <option>33</option>
                                                    <option>34</option>
                                                    <option>35</option>
                                                    <option>36</option>
                                                    <option>37</option>
                                                    <option>38</option>
                                                    <option>39</option>
                                                    <option>40</option>
                                                    <option>41</option>
                                                    <option>42</option>
                                                    <option>43</option>
                                                    <option>44</option>
                                                    <option>45</option>
                                                    <option>46</option>
                                                    <option>47</option>
                                                    <option>48</option>
                                                    <option>49</option>
                                                    <option>50</option>
                                                    <option>51</option>
                                                    <option>52</option>
                                                    <option>53</option>
                                                    <option>54</option>
                                                    <option>55</option>
                                                    <option>56</option>
                                                    <option>57</option>
                                                    <option>58</option>
                                                    <option>59</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-8">
                                            <div class="form-group label-floating">
                                                <a data-toggle="modal" data-target="#acceptModalCenter" class="btn button btn-round">Accept</a>
                                                <a data-toggle="modal" data-target="#rejectModalCenter" class="btn button btn-danger btn-round">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="acceptModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            You have successfully accepted this job!
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-md-12">
                                                <a class="btn button btn-round" href="updateJobStatus.php?jobid=#0100">OKAY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal fade" id="rejectModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Cancel</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you don't want to accept this job?
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-md-12">
                                                <a class="btn button btn-round" href="index.php">Yes</a>
                                            </div>
                                        </div>
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