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
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="row w-95">
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
                        <div class="col-md-4 col-sm-12 col-12">
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
                                <h3 class="card-title">Statistics</h3>
                                </div>
                                <div class="card-body">
                                <div class="chart">
                                    <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2">
                                            <i class="fas fa-square text-warning"></i> Clients Added
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-square text-success"></i> Successfull Follow Ups
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-square text-primary"></i> Total Clients Visited
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card table1">
                                <div class="card-header">
                                    <h3 class="card-title">Agents Rankboard</h3>
                                </div>

                                <div class="card-body">
                                    <div id="jsGrid1"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card table1">
                                <div class="card-header">
                                    <h3 class="card-title">Follow Ups By Location</h3>
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Update software</td>
                                                <td><span class="badge bg-danger">55%</span></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Clean database</td>
                                                <td><span class="badge bg-warning">70%</span></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Cron job running</td>
                                                <td><span class="badge bg-primary">30%</span></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                                <td><span class="badge bg-success">90%</span></td>
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

<?php include('tail.php'); ?>