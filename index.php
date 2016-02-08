<?php include_once("includes/header.php"); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Library Attendance Management System
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
          <div class="col-lg-12">
            <div class="col-lg-9">
               <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Attendance</h3>
                        <div class="box-tools">
                          <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                          </ul>
                        </div>
                      </div><!-- /.box-header -->
                      <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                          <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Fridat</th>
                            <th>Saturday</th>
                          </tr>
                          <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-danger">Absent</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                          </tr>
                          <tr>
                            <td>219</td>
                            <td>Alexander Pierce</td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-danger">Absent</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                          </tr>
                          <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td><span class="label label-danger">Absent</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-danger">Absent</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td><span class="label label-danger">Denied</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-danger">Absent</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                            <td><span class="label label-success">Present</span></td>
                          </tr>
                        </table>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
                  </div>
                </div>
            </div>
            <div class="col-lg-3">
              <a href="compose.html" class="btn btn-primary btn-block margin-bottom">To Do List</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Urgent</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><input type="checkbox"> Prepare IRD<span class="label label-primary pull-right">12</span></a></li>
                    <li><a href="#"><input type="checkbox"> Budget</a></li>
                    <li><a href="#"><input type="checkbox"> Renew</a></li>
                    <li><a href="#"><input type="checkbox"> Subscription <span class="label label-warning pull-right">65</span></a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Other</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><input type="checkbox"> Sort Novels</a></li>
                    <li><a href="#"><input type="checkbox"> Report</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php include_once("includes/footer.php"); ?>