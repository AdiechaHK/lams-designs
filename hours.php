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
            <div class="col-lg-8">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Bordered Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>Time</th>
                      <th>Mon</th>
                      <th>Tue</th>
                      <th>Wed</th>
                      <th>Thu</th>
                      <th>Fri</th>
                      <th>Sat</th>
                      <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                    <tr>
                      <td style="width:150px">
                        <a href="#hours" data-toggle="modal"><i class="fa fa-clock-o"></i></a>&nbsp;&nbsp;
                        8:00 - 9:00 PM
                      </td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <!-- <td>Update software</td> -->
                      <!-- <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red">55%</span></td> -->
                    </tr>
                    <tr>
                      <td style="width:150px">
                        <a href="#hours" data-toggle="modal"><i class="fa fa-clock-o"></i></a>&nbsp;&nbsp;
                        8:00 - 9:00 PM
                      </td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                    </tr>
                    <tr>
                      <td style="width:150px">
                        <a href="#hours" data-toggle="modal"><i class="fa fa-clock-o"></i></a>&nbsp;&nbsp;
                        8:00 - 9:00 PM
                      </td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                    </tr>
                    <tr>
                      <td style="width:150px">
                        <a href="#hours" data-toggle="modal"><i class="fa fa-clock-o"></i></a>&nbsp;&nbsp;
                        8:00 - 9:00 PM
                      </td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                    </tr>
                    <tr>
                      <td style="width:150px">
                        <a href="#hours" data-toggle="modal"><i class="fa fa-clock-o"></i></a>&nbsp;&nbsp;
                        8:00 - 9:00 PM
                      </td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                    </tr>
                    <tr>
                      <td style="width:150px">
                        <a href="#hours" data-toggle="modal"><i class="fa fa-clock-o"></i></a>&nbsp;&nbsp;
                        8:00 - 9:00 PM
                      </td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                      <td>1.</td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <div class="pull-right">
                    <a href="#" class="m-l-15"><i class="fa fa-calendar fa-2x"></i></a>
                  </div>
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="modal fade" id="hours" role="dialog" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2>Time :</h2>
                </div>
                <div class="modal-body">
                  <form role="form">
                    <div class="box-body">
                      <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Start Time</label>
                        <input type="text" class="form-control timepicker" id="exampleInputEmail1" placeholder="Enter Division Name">
                      </div> -->
                      <div class="bootstrap-timepicker">
                        <div class="form-group">
                          <label>Start Time:</label>
                          <div class="input-group">
                            <input type="text" class="form-control timepicker">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                          </div><!-- /.input group -->
                        </div><!-- /.form group -->
                      </div>
                      <div class="bootstrap-timepicker">
                        <div class="form-group">
                          <label>End Time:</label>
                          <div class="input-group">
                            <input type="text" class="form-control timepicker">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                          </div><!-- /.input group -->
                        </div><!-- /.form group -->
                      </div>
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option>Recess Time</option>
                          <option>Class</option>
                          <option>Project</option>
                        </select>
                      </div>
                    </div><!-- /.box-body -->
                    <!-- </form> -->
                  </form>
                </div>
                <div class="modal-footer">
                  <a href="#" class="btn btn-primary" data-dismiss="modal">save</a>
                  <a href="#" class="btn btn-primary" data-dismiss="modal">close</a>
                </div>
              </div>
            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php include_once("includes/footer.php"); ?>