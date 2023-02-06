<?php include('head.php'); include('nav.php'); include('aside.php');?>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Overview</h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <div class="row mx-10">
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="row w-95">
                                <div class="info-box">
                                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                                    <div class="info-box-content">
                                        <h5 class="mt-2">Last 24 Hours</h5>
                                    </div>
                                    <div class="float-right mt-3 font-weight-bolder"><p class="info-box-number">290 New Clients</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="row w-95">
                            <div class="info-box">
                                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                                    <div class="info-box-content">
                                        <h5 class="mt-2">Awaiting Process</h5>
                                    </div>
                                    <div class="float-right mt-3 font-weight-bolder"><p class="info-box-number">290 New Clients</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="row">
                            <div class="info-box">
                                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                                    <div class="info-box-content">
                                        <h5 class="mt-2">On Hold</h5>
                                    </div>
                                    <div class="float-right mt-3 font-weight-bolder"><p class="info-box-number">290 New Clients</p></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="d-flex justify-content-between mx-2">
                        <div class="">
                            <div class="row">
                                <div class="info-box">
                                    <div class="col-6">
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total Clients Added</span>
                                            <span class="info-box-number">410</span>
                                            <span class="updown red"><i class="fas fa-arrow-down"></i> 19.5%</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex justify-content-center">
                                            <canvas id="myChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="info-box">
                                    <div class="col-6">
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total Clients Added</span>
                                            <span class="info-box-number">410</span>
                                            <span class="updown green"><i class="fas fa-arrow-up"></i> 19.5%</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex justify-content-center">
                                            <canvas id="myChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="info-box">
                                    <div class="col-6">
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total Clients Visited</span>
                                            <span class="info-box-number">410</span>
                                            <span class="updown red"><i class="fas fa-arrow-down"></i> 19.5%</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex justify-content-center">
                                            <canvas id="myChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                <h2 class="card-title card-heading">Clients</h2>
                                <div class="card-tools">
                                    <button type="button" class="btn main-btn" data-toggle="modal" data-target="#addclients">Add Clients</button>

                                    <div class="modal fade" id="addclients" tabindex="-1" aria-labelledby="addclientsLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h5 class="text-center mb-3">ADD CLIENTS</h5>
                                                    <form action="" method="post">
                                                        <div class="form-group">
                                                            <label class="sr-only" for="inlineFormInputGroupUsername">Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">@</div>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sr-only" for="inlineFormInputGroupUsername">Phone</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Phone">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sr-only" for="inlineFormInputGroupUsername">Location</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Location">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="inlineFormInputGroupUsername">Assign TO</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Assign To">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sr-only" for="inlineFormInputGroupUsername">Type</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                        </div>
                                                                        <select class="custom-select">
                                                                            <option selected disabled>Type</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sr-only" for="inlineFormInputGroupUsername">Status</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                        </div>
                                                                        <select class="custom-select">
                                                                            <option selected disabled>Status</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="inlineFormInputGroupUsername">Color</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Color">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="inlineFormInputGroupUsername">Photos</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Photos</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="inlineFormInputGroupUsername">Remarks</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Ramarks">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <button class="btn view-more-btn">Add</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <div class="table-responsive">
                                            <table class="table table-striped text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Number</th>
                                                        <th>Date</th>
                                                        <th>Type</th>
                                                        <th>Color</th>
                                                        <th>Address</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Ramesh</td>
                                                        <td>1234567890</td>
                                                        <td>31-10-25</td>
                                                        <td>Residental</td>
                                                        <td>Infinity Brown</td>
                                                        <td>Viskhapatnam</td>
                                                        <td><button class="process def-btn">Processing</button></td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-6 text-center"><button class="ct-btn"><span class="hold"><i class="ion-ios-stopwatch-outline"></i></span><br>Hold</button></div>
                                                                <div class="col-6 text-center"><button class="ct-btn"><span class="cancel"><i class="ion-ios-close-outline"></i></span><br>Cancel</button></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn edit-btn">Edit</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ramesh</td>
                                                        <td>1234567890</td>
                                                        <td>31-10-25</td>
                                                        <td>Residental</td>
                                                        <td>Infinity Brown</td>
                                                        <td>Viskhapatnam</td>
                                                        <td><button class="on-hold def-btn">On Hold</button></td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-6 text-center"><button class="ct-btn"><span class="resume"><i class="ion-android-refresh"></i></span><br>Resume</button></div>
                                                                <div class="col-6 text-center"><button class="ct-btn"><span class="cancel"><i class="ion-ios-close-outline"></i></span><br>Cancel</button></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn edit-btn">Edit</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="9" align="center"><button class="btn view-more-btn">View More</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

<?php include('tail.php'); ?>