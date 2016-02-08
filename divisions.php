<?php include_once("includes/header.php"); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
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
              <div class="pull-left">
                <h2>Division Listing</h2>
              </div>
              <div class="pull-right m-t-20">
                <button class="btn btn-block btn-primary" href="#division" data-toggle="modal"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Divisions</button>
              </div>
              <div class="clearfix"></div>
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Division</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Division Name</th>
                      <th class="w-50">Edit</th>
                      <th class="w-50">Delete</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>John</td>
                      <td><a href="#"><span class="badge bg-green"><i class="fa fa-edit"></i></span></td></a>
                      <td><a href="#"><span class="badge bg-red"><i class="fa fa-close"></i></span></td></a>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Jammie</td>
                      <td><a href="#"><span class="badge bg-green"><i class="fa fa-edit"></i></span></td></a>
                      <td><a href="#"><span class="badge bg-red"><i class="fa fa-close"></i></span></td></a>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Jackob</td>
                      <td><a href="#"><span class="badge bg-green"><i class="fa fa-edit"></i></span></td></a>
                      <td><a href="#"><span class="badge bg-red"><i class="fa fa-close"></i></span></td></a>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>James</td>
                      <td><a href="#"><span class="badge bg-green"><i class="fa fa-edit"></i></span></td></a>
                      <td><a href="#"><span class="badge bg-red"><i class="fa fa-close"></i></span></td></a>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
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
          
          <div class="modal fade" id="division" role="dialog" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2>Division Form</h2>
                </div>
                <div class="modal-body">
                  <form role="form">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Division Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Division Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No. of Student</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter No. of Students">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Standard</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Standard">
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